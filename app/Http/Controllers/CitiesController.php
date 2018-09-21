<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Http\Request;
use App\Country;
use DB;
use Carbon\Carbon;
class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cities()
    {
        $countries = DB::table('countries')
            ->join('cities', 'countries.id', '=', 'cities.country_id')
            ->select('cities.*', 'countries.name as country_name','countries.id as country_id')
            ->get();
        return view('admin.pages.cities',['countries' => $countries]);
        /*foreach ( $countries as $v) {
            echo 'Country name is '.$v->country_name.' City name is '.$v->name.'<br/>';
        }*/



        //$countries= DB::table('countries')->get();
        //return view('admin.cities.insertCities',$countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries= Country::all()->toArray();
        //return view('admin.cities.cities',compact('countries'));
        return view('admin.cities.insertCities',compact('countries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $country_id = $request->get('country_id');
        $city_name = $request->get('city_name');
        //echo 'Country id : '.$country_id.' and city name : '.$city_name;
       $data = ['name'=>$city_name,'country_id'=>$country_id,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()];
        DB::table('cities')->insert($data);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function show(Cities $cities)
    {
         return view('admin.pages.cities');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = DB::table('countries')->get();
        $cities = DB::table('cities')->where('id', $id)->first();
        //echo $cities->id. ' '.$cities->name;
        return view('admin.cities.editCities',['city' => $cities,'country_list'=>$countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cities $cities,$id)
    {
        $country_id = $request->get('country_id');
        $city_name = $request->get('city_name');
        //echo 'Country id : '.$country_id.' and city name : '.$city_name;
        //$data = ['name'=>$city_name,'country_id'=>$country_id,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString()];
        DB::table('cities')->where('id', $id)
            ->update([
                'name' => $city_name,
                'country_id' => $country_id,
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString()
            ]);;

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cities $cities)
    {
        //
    }
    public function getCities()
    {
        // $cities = Country::all()->
        $data['data'] = DB::table('cities')->get();
        foreach ($data as $key => $value) {
            //echo $key ."=". $value."<br/>";
            foreach ($value as $d) {
                echo "City Name is ".$d->name." Country id is ".$d->country->name."<br/>";
            }
        }

        if(count($data) > 0) 
        {
            return view('admin.pages.cities',$data);
            
        }
        else
        {
            return view('admin.pages.cities');

        }
    }
    public function showCities()
    {
        $data['data'] = DB::table('cities')->paginate(10);

        if(count($data) > 0) 
        {
            //return view('admin.region.location',$data);
            return view('admin.pages.cities',$data);
            
        }
        else
        {
            //return view('admin.region.location');
            return view('admin.pages.cities');

        }
    }
    public function delete($id)
    {
        DB::table('cities')->where('id',$id)->delete();
        return back();
    }
}