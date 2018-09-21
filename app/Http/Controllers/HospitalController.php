<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Hospital;
USE Carbon\Carbon;
class HospitalController extends Controller
{	
	public function index()
    {
    	$hospitals=Hospital::orderBy('id','ASC')->paginate(5);
        return view('admin.pages.hospitals',compact('hospitals'));
        
    }
    public function create()
    {
        $countries = DB::table('countries')->get();

        return view('admin.health-care.hospital.insertHospital',compact('countries'));
    }
    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $cities = DB::table('cities')->where('country_id',$request->country_id)->pluck("name","id")->all();
            $data = view('admin.health-care.hospital.ajax-select',compact('cities'))->render();
            return response()->json(['options'=>$data]);
        }

    }
       //Function Insert Data Into Database 
    public function store(Request $req)
    {
        //city_id,country_id
        $name = $req->input('name');
        $contact = $req->input('contact');
        $url  = $req->input('url');
        $address = $req->input('address');
        $lat = $req->input('lat');
        $long = $req->input('long');
        $city_id = $req->input('city_id');
        //$hospital_id=$req->input('hospital_id');

        //save();
        //store city_id and hospital_id to city_hospital table
        //$hospitals = DB::table('location')->where('city_region', '=', $)->get();
        //$hospital_id = Hospital::orderBy('id', 'desc')->first();
        $hospitals  = array('name'=>$name,'contact'=>$contact,'url'=>$url,'address'=>$address,'lat'=>$lat,'long'=>$long,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        DB::table('hospitals')->insert($hospitals);
        
        $all = Hospital::orderBy('id', 'desc')->first();
		$hospital_id = ($all->id);
		 
        $city_hospital = array('city_id' => $city_id,'hospital_id'=> $hospital_id,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        DB::table('city_hospitals')->insert($city_hospital);


        //  $data = ['name'=>$city_name,'country_id'=>$country_id,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()];
        // DB::table('cities')->insert($data);


        return back();
    }
 
    public function delete($id)
    {
        DB::table('hospitals')->where('id',$id)->delete();
        return redirect('/dashboard');        
    }
    public function hospitals()
    {
        
        return view('admin.pages.hospitals');
    }

}
