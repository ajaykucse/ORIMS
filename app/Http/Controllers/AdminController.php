<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{

    public function dashboard()
    {

        $news = DB::table('news')->paginate(5);
        $data = DB::table('countries')->paginate(5);
        $hospitals = DB::table('hospitals')->paginate(5);
        $doctor = DB::table('doctor')->paginate(5);
        $govOffice = DB::table('govoffice')->paginate(5);
        $cardata = DB::table('ambulance')->paginate(5);
        $docdata = DB::table('doctor_appointment')->paginate(5);
        $countries = DB::table('countries')->paginate(5);
        $id = DB::table('countries')->paginate(5);
        //return view('admin.dashboard')
        return view('admin.pages.maincontent')
            ->with('id',$id)
            ->with('countries',$countries)
            ->with('data',$data)
            ->with('news',$news)
            ->with('hospitals',$hospitals)
            ->with('doctor',$doctor)
            ->with('govoffice',$govOffice)
            ->with('cardata',$cardata)
            ->with('docdata',$docdata);
         
        //return view('admin.pages.maincontent');
        // Data show for Hospital

        // $da['da'] = DB::table('hospitals')->get();


        // if(count($da) > 0) 
        // {
        //     return view('admin.dashboard',$da);
            
        // }
        // else
        // {
        //     return view('admin.health-care.hospital.hospital');

        // }

        // For news

        // $data['data'] = DB::table('news')->get();


        // if(count($data) > 0) 
        // {
        //     return view('admin.dashboard',$data);
            
        // }
        // else
        // {
        //     return view('admin.news.news');

        // }




        //return view ('admin.dashboard', array('user' => Auth::user()));
    }
    public function storeLocation(Request $request)
    {
        $name = $request->input('name');
        $contact = $request->input('contact');
        $url  = $request->input('url');
        $details = $request->input('details');
        $location_id = $request->input('id');
        $da  = array('name'=>$name,'contact'=>$contact,'url'=>$url,'details'=>$details,'id'=>$id);
        DB::table('hospital')->insert($da);
        echo "Success";
        // return redirect('/dashboard');
    }
        public function store(Request $req)
    {
        $name = $req->input('name');
        $contact = $req->input('contact');
        $url  = $req->input('url');
        $details = $req->input('details');
        // $photo = $req->input('photo');

        $da  = array('name'=>$name,'contact'=>$contact,'url'=>$url,'details'=>$details);
        DB::table('hospital')->insert($da);
        echo "Success";
        $this->getData();
        // return redirect('/dashboard');
    }

    public function insert(Request $request)
    {
        $name = $request->input('name');
        $code      = $request->input('code');
         

        $data  = array('name'=>$name,'code'=>$code);
        DB::table('countries')->insert($data);
        echo "Success";
        $this->getData();
    }
    public function delete($location_id,$news_id,$id,$docid)
    {
        DB::table('countries')->where('id',$location_id)->delete();
        DB::table('news')->where('news_id',$news_id)->delete();
        DB::table('hospitals')->where('id',$id)->delete();
        DB::table('doctor')->where('docid',$docid)->delete();
        //$this->getData();
    }
    public function edit($id)
    {
        $data= location::find($id);
        return view('admin.region.editLocation',['data'=>$data]);
    }

  
    
}
