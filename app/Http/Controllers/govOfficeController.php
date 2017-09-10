<?php

namespace App\Http\Controllers;
use DB;
use App\GovOffice;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class govOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.office.gov_office.gov_office');
    }

      public function govOfficeList(){
        $govoffice = DB::table('govoffice')->orderBy('created_at','desc')->paginate(5);
        dd($govoffice);
        return view('admin/office/gov_office/govoffice')->with('govoffice',$govoffice);
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
            
          try{
            $extensionLists = array('gif', 'Jpg', 'png', 'swf', 'bmp', 'jpc', 'jp2', 'jpf');
            $govOffice = new GovOffice;
            $govOffice->type=Input::get('type');
            $govOffice->contact=Input::get('contact');
            $govOffice->details=Input::get('details');
            $govOffice->url=Input::get('url');
         if (Input::hasFile('image')) 
         {
             $file = Input::file('image');
             $extensions = $file->getClientOriginalExtension();
             
             if (in_array(strtolower($extensions), array_map('strtolower', $extensionLists))) {
                 $file->move(public_path().'/images/govOffice/', $file->getClientOriginalName());
                 $govOffice->image = $file->getClientOriginalName();
                 $govOffice->save();
                 //return 'success';
                 return redirect('/dashboard');
             } else {
                 return 'only image file are allowed';
             }

         }
         
        }catch(\Exception $e){
            dd($e);
        }
          return redirect()->back();

        //     $govOffice = new GovOffice;
            
        //     $govOffice->type=Input::get('type');
        //     $govOffice->contact=Input::get('contact');
        //     $govOffice->details=Input::get('details');
        //     $govOffice->url=Input::get('url');
        // if (Input::hasFile('image')) 
        // {
        //     $file = Input::file('image');
        //     $govOffice->image = $file->getClientOriginalName();
        //      dd($govOffice->image);
        //     $file->move(public_path(). '/', $file->getClientOriginalName());
        // }  

        // $govOffice->save();
        // return 'save';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GovOffice  $govOffice
     * @return \Illuminate\Http\Response
     */
    public function show(GovOffice $govOffice)
    {
        $govOffice['data'] = DB::table('govoffice')->get();


        if(count($govOffice) > 0) 
        {
            return view('admin.news.dashboard',$govOffice);
            
        }
        else
        {
            return view('admin.news.news');

        }
    
    }
     public function getData()
    {
        $govOffice['govOffice'] = DB::table('govoffice')->get();


        if(count($govOffice) > 0) 
        {
            return view('admin.office.gov_office.gov_office',$govOffice);
            
        }
        else
        {
            return view('admin.office.gov_office.gov_office');

        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GovOffice  $govOffice
     * @return \Illuminate\Http\Response
     */
    public function edit(GovOffice $govOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GovOffice  $govOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GovOffice $govOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GovOffice  $govOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(GovOffice $govOffice)
    {
        DB::table('govoffice')->where('id',$id)->delete();
        return redirect()->back();
    }
}
