<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
use Auth;
use Image;
class RegisterController extends Controller
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
        //
        $data = Input::except(array('_token'));
        //var_dump($data);

        $rule=array(
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'cpassword'=>'required|same:password'
            );

        $message=array(
            'cpassword.required'=>'the confirem password is required',
            'cpassword.min'=>'the confirem password must be at last 6 characters',
            'cpassword.same'=>'the confirem password and password must same',
            );

        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            return Redirect::to('registation')->withErrors($validator);
            //echo "yes fails";
        }else {
            //echo "not";
            Register::formstore(Input::except(array('_token','cpassword')));

            return Redirect::to('registation')->with('success','successfully registered');
        }
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
    public function loggedin(){
        //echo "login fun";
        $data = Input::except(array('_token'));
        // //var_dump($data);

        $rule=array(
             
            'email'=>'required|email',
            'password'=>'required',
             
            );

     

        $validator=Validator::make($data,$rule);


        if($validator->fails()){
           return Redirect::to('signin')->withErrors($validator);
            echo "yes fails";
        }else {
            //$data = Input::except(array('_token'));
            //var_dump($data);
            $userdata=array(
                'email'=>Input::get('email'),
                'password'=>Input::get('password')
                );
            if(Auth::attempt($userdata)){
                return Redirect::to('dashboard');
                // echo "yes match";
            }else{
                return Redirect::to('signin');
                // echo "not match";
            }
        }
    }
    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()) );

    }
}
