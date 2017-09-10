<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DoctorController extends Controller
{
   public function index()
    {
        return view('admin.health-care.doctor.doctor');
    }
       //Function Insert Data Into Database 
    public function store(Request $req)
    {
        $name = $req->input('name');
        $specialist = $req->input('specialist');
        $degree  = $req->input('degree');
        $contact = $req->input('contact');
        
        //$hospitals = DB::table('hospitals')->where('h_id', '=',$h_id)->get();
        // $photo = $req->input('photo');

        $doctor  = array('name'=>$name,'specialist'=>$specialist,'degree'=>$degree,'contact'=>$contact);
        DB::table('doctor')->insert($doctor);
        echo "Success";

        return redirect()->back();
        $this->getData();
        // return redirect('/dashboard');

    }
    public function getData()
    {
        $doctor['da'] = DB::table('doctor')->get();


        if(count($doctor) > 0) 
        {
            return view('admin.health-care.doctor.dashboard',$doctor);
            
        }
        else
        {
            return view('admin.health-care.hospital.hospital');

        }
    }
    public function delete($docid)
    {
        DB::table('doctor')->where('docid',$docid)->delete();
        return 'success';
    }
}
