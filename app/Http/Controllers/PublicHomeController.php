<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
    public function showHealthCare()
    {
        return view('layouts.panel.health-care');
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
