<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\News;
use Illuminate\Support\Facades\Input;
class NewsController extends Controller
{
     public function index()
    {

    }


    public function newsList(){
        $news = DB::table('news')->orderBy('created_at','desc')->paginate(5);
        dd($news);
        return view('admin/news/news')->with('news',$news);
    }
    //Function Insert Data Into Database 
    // public function insert(Request $request)
    // {
    //  $name = $request->input('name');
    //     $type      = $request->input('type');
    //     $url  = $request->input('url');

    //     $data  = array('name'=>$name,'type'=>$type,'url'=>$url);
    //     DB::table('news')->insert($data);
    //     echo "Success";
    //     //$this->getData();
    //     return redirect('/dashboard');
    // }
    public function create()
    {
        return view('admin.news.news');
    }
    public function store(Request $request)
     {
        try{
            $extensionList = array('gif', 'Jpg', 'png', 'swf', 'bmp', 'jpc', 'jp2', 'jpf');
            $news = new News;
            $news->name=Input::get('name');
            $news->type=Input::get('type');
            $news->url=Input::get('url');
         if (Input::hasFile('file')) 
         {
             $file = Input::file('file');
             $extension = $file->getClientOriginalExtension();
             
             if (in_array(strtolower($extension), array_map('strtolower', $extensionList))) {
                 $file->move(public_path().'/images/news/', $file->getClientOriginalName());
                 $news->photo = $file->getClientOriginalName();
                 $news->save();
                 return 'success';
                 return redirect('/dashboard');
             } else {
                 return 'only image file are allowed';
             }

         }
         
        }catch(\Exception $e){
            dd($e);
        }  return redirect()->back();
       
        
     }


    public function getData()
    {
        $data['data'] = DB::table('news')->get();


        if(count($data) > 0) 
        {
            return view('admin.news.dashboard',$data);
            
        }
        else
        {
            return view('admin.news.news');

        }
    }

     // Function For delete Data From Database
    public function delete($news_id)
    {
        DB::table('news')->where('news_id',$news_id)->delete();
        return redirect()->back();
    }
    public function edit($news_id)
    {
        $data= news::find($news_id);
        return view('admin.region.editNews',['data'=>$data]);
    }
 
}
