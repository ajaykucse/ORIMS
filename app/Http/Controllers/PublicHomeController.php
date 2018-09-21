<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Hospital;
use App\BloodBank;
use DB;
use Carbon\Carbon;
class PublicHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allNewsSites=News::orderBy('visit_count','DESC')->get();
        return view('welcome',compact('allNewsSites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAllNews()
    {
        $allNewsSites=News::orderBy('visit_count','DESC')->paginate(18);
        return view('layouts.panel.news',compact('allNewsSites'));
        //return  $allNewsSites_bangla->all();
    }
    public function showIndividualNews($id)
    {
        $individualNews=News::orderBy('visit_count','DESC')->where('type',$id)->paginate(10);
        return view('layouts.panel.individualNews',compact('individualNews','id'));
        //return  $allNewsSites_bangla->all();
    }

    public function searchAllNews(Request $request)
    {
        $allNewsSites=News::orderBy('visit_count','DESC')->where('name','like','%'.$request->newsPaper.'%')->paginate(10);
        return view('layouts.panel.news',compact('allNewsSites'));
    }
    public function searchIndividualNews(Request $request,$id)
    {
        $individualNews=News::orderBy('visit_count','DESC')->where('name','like','%'.$request->newsPaper.'%')->paginate(10);
        return view('layouts.panel.individualNews',compact('individualNews','id'));
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
        News::where('news_id',$id)->increment('visit_count');
        $individualNews=News::where('news_id',$id)->first();
        return Redirect::to($individualNews->url);
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
    function get_local_time(){

   $ip = file_get_contents("http://ipecho.net/plain");

   $url = 'http://ip-api.com/json/'.$ip;

   $tz = file_get_contents($url);

   $tz = json_decode($tz,true)['timezone'];

   return $tz;

}



    public function showHealthCare(Request $req)
    {
        $s = $req->input('s');


       // $query=$req->get('q');
        //$if($query){
            //$hospitals=$query ? Hospital::search($query)->orderBy('id', 'ASC')->paginate(2):Hospital::all();


            //$hospitals=News::orderBy('id','DESC')->where('name','like','%'.$req->query.'%')->paginate(10);

        $hospitals=Hospital::orderBy('id','ASC')
        ->search($s)
        ->paginate(1);

             
           // $doctors = DB::table('doctors')
           //  ->join('hospital_doctor', 'doctors.id', '=', 'hospital_doctor.doctor_id')
           //  ->join('hospitals','hospitals.id', '=','hospital_doctor.hospital_id')
           //  ->where( 'doctors.id', '=', 2)
           //  ->select('hospitals.name')
           //  ->select('doctors.name')
           //  ->get();
             
        // $doctors = DB::table('doctors')->where(
        //             ("hospitals.id='hospital_doctor.hospital_id'") AND 
        //             ("doctors.id = 'hospital_doctor.doctor_id'"))->get();
// $doctors_info = DB::table('hospital_doctor')
//                     ->join('hospitals', 'hospitals.id', '=', 'hospital_doctor.hospital_id')
//                     ->join('doctors', 'doctors.id', '=', 'hospital_doctor.doctor_id')
//                     ->select('doctors.name as doctor_name','doctors.designation as designation','doctors.specialist as specialist','doctors.chamber as chamber','doctors.degree as degree','doctors.contact as doctor_contact','doctors.address as doctor_address','hospitals.*')
//                     ->get();
    $v = DB::table('hospital_doctor')->select('hospital_doctor.hospital_id')->distinct('hospital_doctor.hospital_id')
        ->get();
        $a = array();
        foreach ($v as $k => $value)
        {
            $a[$k] = $value->hospital_id;
        }
        //dd($a);


        $doctors_info = DB::table('hospital_doctor')
                    ->join('hospitals', 'hospitals.id', '=', 'hospital_doctor.hospital_id')
                    ->join('doctors', 'doctors.id', '=', 'hospital_doctor.doctor_id')
                    ->whereIn('hospitals.id',$a)
                    ->select('doctors.*','hospitals.name as h_name')
                    ->get();
 



       /* echo "<pre>";
        print_r($doctors_info);
        echo "</pre>";*/
// foreach ($doctors_info as $d){
//     echo "Hospital name is ".$d->h_name."<br>";
//     echo "Doctors name is ".$d->name."<br>";




        // $t = Carbon::now();
        // $t->day;
        // $t = date('m:i A,h:i A');
//        dd($t);

      // /*echo "<pre>";
      //   print_r($doctors_info);
      //   echo "</pre>";*/
      //   foreach ($doctors_info as $d){

      //           echo "Hospital Address is ".$d->address." and Doctors name is ".$d->doctors_name."<br/>";
      //   }
            
           // dd($doctors_info);

    $ambulances = DB::table('ambulances')
                ->join('hospitals','hospitals.id','=','ambulances.id')
                ->select('ambulances.*')
                ->where('ambulances.hospital_id','2')
                ->get();

               // dd($ambulances);


                

    return view('layouts.panel.health-care', compact('ambulances','hospitals','doctors_info','s'));
    }//else{
           // $hospitals=Hospital::orderBy('id','ASC')->paginate(2);
            //return view('layouts.panel.health-care', compact('hospitals'));
    //}
    
    // public function scopeSearchHospital($query, $search)
    // {
    //     //return $query->where('name' , 'LIKE' , "%$search%");
    // }
    public function showBloodBank(Request $req)
    {
        $s = $req->input('s');

        $bloodbanks=BloodBank::orderBy('id','ASC')
        ->search($s)
        ->paginate(1);

    return view('layouts.panel.bloodbank',compact('bloodbanks','s'));
    }
    public function showOffice()
    {
        return view('layouts.panel.office');
    }
    public function showhotel_restaurant()
    {
        return view('layouts.panel.hotel-restaurant');
    }
    public function showtravel_tour()
    {
        return view('layouts.panel.travel-tour');
    }
      public function showeducation()
    {
        return view('layouts.panel.education');
    }
}
