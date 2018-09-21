<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\BloodBank;
class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.bloodBank');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = DB::table('countries')->get();
        return view('admin.health-care.blood-bank.insertBloodBank',compact('countries'));
    }
    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $cities = DB::table('cities')->where('country_id',$request->country_id)->pluck("name","id")->all();
            $data = view('admin.health-care.hospital.ajax-select',compact('cities'))->render();
            return response()->json(['options'=>$data]);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $contact = $request->input('contact');
        $url = $request->input('url');
        $lat = $request->input('lat');
        $long = $request->input('long');
        $city_id = $request->input('city_id');
        

        $bloodbanks  = array('name'=>$name,'address'=>$address,'contact'=>$contact,'url'=>$url,'lat'=>$lat,'long'=>$long,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        DB::table('bloodbanks')->insert($bloodbanks);



        $all = BloodBank::orderBy('id', 'desc')->first();
        
        $bloodbank_id = ($all->id);
         
        $city_bloodbank = array('city_id' => $city_id,'bloodbank_id'=> $bloodbank_id,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        
        DB::table('city_bloodbank')->insert($city_bloodbank);

        session()->flash('notif','successfully save Blood-Bank');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
