<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
 use App\Country;
use Illuminate\Database\Eloquent\Model;

class LocationController extends Controller
{
	public function index()
	{
/*        $data = Country::paginate(2);
        return view('admin.pages.location',compact('data'));*/
        $data['data'] = DB::table('countries')->paginate(3);

        if(count($data) > 0)
        {
            //return view('admin.region.location',$data);
            return view('admin.pages.location',$data);

        }
	}
	public  function create(){
	    return view('admin.region.newLocation');
    }
    //Function Insert Data Into Database 
   	public function insert(Request $request)
    {
        $name = $request->input('name');
        $code  = $request->input('code');

        $data  = array('name'=>$name,'code'=>$code,'created_at'=>Carbon::now()->toDateTimeString(),'updated_at'=>Carbon::now()->toDateTimeString());
        DB::table('countries')->insert($data);
        //echo "Success";
        //$this->getData();
        return redirect('dashboard/location');
    }

    // Function To Get Data From Database 
    public function getData()
    {
        $data['data'] = DB::table('countries')->paginate(10);

        if(count($data) > 0) 
        {
            //return view('admin.region.location',$data);
            return view('admin.pages.location',$data);
            
        }
        else
        {
            //return view('admin.region.location');
            return view('admin.pages.location');

        }
    }

    // Function For delete Data From Database
    public function delete($id)
    {
        DB::table('countries')->where('id',$id)->delete();
        return back();
    }
    public function show()
    {
        // $data= location::find($location_id);
       // return $location_id;
        return view('admin.region.location');
    }
    /*public function location(){
        //return view('admin.region.location');
        return view('admin.pages.location');
    }*/
    public function edit($id)
    {
        $countries=Country::find($id);
         
        return view('admin.region.editLocation',compact('countries'));
    }
    public function update(Request $request, $id)
    {
        $countries=Country::find($id);
        $countries->name = $request->input('name');
        $countries->code = $request->input('code');
         

        $countries->update();
        return redirect('/dashboard/location');
    }
}
