<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DocAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.doctorAppointments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = DB::table('doctors')->get();
        $hospitals = DB::table('hospitals')->get();

        return view('admin.health-care.doctor-appointment.insertDoctor-appointment',compact('doctors','hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $month = $req->input('month');
        $day = $req->input('day');
        $startTime = $req->input('startTime');
        $endTime = $req->input('endTime');
        $doctor_id = $req->input('doctor_id');
        $hospital_id = $req->input('hospital_id');
        

        $docappointments  = array('month'=>$month,'day'=>$day,'startTime'=>$startTime,'endTime'=>$endTime,'doctor_id'=>$doctor_id,'hospital_id'=>$hospital_id,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        DB::table('docappointments')->insert($docappointments);
        
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
     public function getData()
    {
        $da['da'] = DB::table('doctor_appointment')->get();


        if(count($da) > 0) 
        {
            return view('admin.health-care.doctor-appointment.dashboard',$da);
            
        }
        else
        {
            return view('admin.health-care.doctor-appointment.doctor-appointment');

        }
    }
}
