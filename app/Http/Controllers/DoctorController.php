<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Doctor;
use Carbon\Carbon;
class DoctorController extends Controller
{
    public function index()
    {
        $doctors=Doctor::orderBy('id','ASC')->paginate(5);
        return view('admin.pages.doctors',compact('doctors'));
    }
    public function create()
    {
        $hospitals = DB::table('hospitals')->get();
        return view('admin.health-care.doctor.insertDoctor', compact('hospitals'));  
    }
        //Function Insert Data Into Database 
    public function store(Request $req)
    {
        $name = $req->input('name');
        $designation = $req->input('designation');
        $specialist = $req->input('specialist');
        $chamber = $req->input('chamber');
        $degree = $req->input('degree');
        $contact = $req->input('contact');
        $address = $req->input('address');
        $hospital_id = $req->input('hospital_id');
        

        $doctors  = array('name'=>$name,'designation'=>$designation,'specialist'=>$specialist,'chamber'=>$chamber,'degree'=>$degree,'contact'=>$contact,'address'=>$address,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        DB::table('doctors')->insert($doctors);
        
        $all = Doctor::orderBy('id', 'desc')->first();
        $doctor_id = ($all->id);
         

        $hospital_doctor = array('hospital_id' => $hospital_id,'doctor_id'=> $doctor_id,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        DB::table('hospital_doctor')->insert($hospital_doctor);

        return back();
    }
    public function delete($id)
    {
        DB::table('doctors')->where('id',$id)->delete();
        return back();
    }
}
