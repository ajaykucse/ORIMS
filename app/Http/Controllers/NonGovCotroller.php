<?php

namespace App\Http\Controllers;
use DB;
use App\NonGov;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class NonGovCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $NongovOffice = new NonGov;
            $NongovOffice->type=Input::get('type');
            $NongovOffice->contact=Input::get('contact');
            $NongovOffice->details=Input::get('details');
            $NongovOffice->url=Input::get('url');
         if (Input::hasFile('image')) 
         {
             $file = Input::file('image');
             $extensions = $file->getClientOriginalExtension();
             
             if (in_array(strtolower($extensions), array_map('strtolower', $extensionLists))) {
                 $file->move(public_path().'/images/NongovOffice/', $file->getClientOriginalName());
                 $NongovOffice->image = $file->getClientOriginalName();
                 $NongovOffice->save();
                 return 'success';
                // return redirect('/dashboard');
             } else {
                 return 'only image file are allowed';
             }

         }
         
        }catch(\Exception $e){
            dd($e);
        } return 'not';

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NonGov  $nonGov
     * @return \Illuminate\Http\Response
     */
    public function show(NonGov $nonGov)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NonGov  $nonGov
     * @return \Illuminate\Http\Response
     */
    public function edit(NonGov $nonGov)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NonGov  $nonGov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonGov $nonGov)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NonGov  $nonGov
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonGov $nonGov)
    {
        //
    }
}
