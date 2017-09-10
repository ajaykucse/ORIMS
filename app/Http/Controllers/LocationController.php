<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
 
class LocationController extends Controller
{
	public function index()
	{
		return view('admin.region.location');
	}
    //Function Insert Data Into Database 
   	public function insert(Request $request)
    {
    	$country_code = $request->input('country_code');
        $country      = $request->input('country');
        $city_region  = $request->input('city_region');
        $zip          = $request->input('zip');

        $data  = array('country_code'=>$country_code,'country'=>$country,'city_region'=>$city_region,'zip'=>$zip);
        DB::table('location')->insert($data);
        echo "Success";
        //$this->getData();
        return redirect('/dashboard');
    }

    // // Function To Get Data From Database 
    // public function getData()
    // {
    //     $data['data'] = DB::table('location')->get();


    //     if(count($data) > 0) 
    //     {
    //         return view('admin.region.dashboard',$data);
            
    //     }
    //     else
    //     {
    //         return view('admin.region.location');

    //     }
    // }

    // Function For delete Data From Database
    public function delete($location_id)
    {
        DB::table('location')->where('location_id',$location_id)->delete();
        return redirect('/dashboard');
    }
    public function edit()
    {
        // $data= location::find($location_id);
        return view('admin.region.editLocation');
    }
}
