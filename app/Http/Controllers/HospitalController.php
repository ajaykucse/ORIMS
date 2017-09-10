<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HospitalController extends Controller
{	
	public function index()
    {
        return view('admin.health-care.hospital.hospital');
        
    }
       //Function Insert Data Into Database 
    public function store(Request $req)
    {
        $name = $req->input('name');
        $contact = $req->input('contact');
        $url  = $req->input('url');
        $details = $req->input('details');
        
        // $hospitals = DB::table('location')->where('city_region', '=', $)->get();
        // $photo = $req->input('photo');

        $da  = array('name'=>$name,'contact'=>$contact,'url'=>$url,'details'=>$details);
        DB::table('hospitals')->insert($da);
        echo "Success";

        return redirect()->back();
        $this->getData();
        // return redirect('/dashboard');
    }
    public function getData()
    {
        $da['da'] = DB::table('hospitals')->get();


        if(count($da) > 0) 
        {
            return view('admin.health-care.hospital.dashboard',$da);
            
        }
        else
        {
            return view('admin.health-care.hospital.hospital');

        }
    }
    public function delete($id)
    {
        DB::table('hospitals')->where('id',$id)->delete();
        //$this->getData();
        return redirect()->back();
    }
}
