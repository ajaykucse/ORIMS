<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PublicHomeController@index');
//Route::get('/insert/cities', 'CitiesController@cities');


Route::get('/news/view/{id}', 'PublicHomeController@update');

Route::get('/sign-in', function () {
     return view('auth/login');
});

//For Login Sign Up Authontication





Route::get('/signin', function () {
    return view('loggedin');
});
Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/signin');
})->middleware("auth");
Route::post('/profile','RegisterController@update_avatar');
Route::post('/register_action','RegisterController@store');
Route::post('/login_check','RegisterController@loggedin');
Route::get('/profile','RegisterController@profile');
Route::get('/registation', function () {
return view('register.register');
});
Route::get('/forgot-password','ForgotPasswordController@forgotPassword');
Route::post('/forgot-password','ForgotPasswordController@postForgotPassword');
Route::get('/dashboard', function () {
     return view('admin.dashboard');
});
 
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/index',function(){
	$region = DB::table('location')->get();
	return view::make('index')->with('region',$region);



});
 
Route::get('dashboard', 'AdminController@dashboard');
Route::get('/delete/{location_id}','AdminController@delete');
Route::get('/delete/{news_id}','AdminController@delete');
Route::get('/delete/{docid}','AdminController@delete');
Route::post('store/details', 'AdminController@storeLocation');

Auth:: routes();

Route::get('master', 'HomeController@admin'); 


Auth::routes();

Route::get('/home', 'HomeController@index');

//For Countries 
Route::get('/dashboard/location','LocationController@index');
Route::get('/dashboard/location/create','LocationController@create');
Route::post('/insert/location','LocationController@insert');
//Route::get('/dashboard/location','LocationController@getData');
Route::get('/delete/{location_id}','LocationController@delete');
Route::get('/show/location','LocationController@show');
//Route::get('/edit/(location_id)','LocationController@edit')->name('edit');
Route::get('/location/{id}/edit','LocationController@edit');
Route::put('/location/{id}','LocationController@update');

// For Cities
Route::get('/dashboard/cities','CitiesController@cities');
Route::get('/dashboard/cities/edit/{id}','CitiesController@edit');
Route::post('/dashboard/cities/update/{id}','CitiesController@update');
Route::post('/store/cities', 'CitiesController@store');
/*Route::get('/dashboard/cities','CitiesController@getCities');
Route::get('/dashboard/cities','CitiesController@show');
Route::get('/dashboard/cities','CitiesController@cities');
Route::get('/dashboard/cities','CitiesController@showCities');*/
Route::get('/delete/{id}','CitiesController@delete');
Route::get('/show/cities','CitiesController@show');
Route::get('/dashboard/cities/create','CitiesController@create');


//For News
Route::get('/dashboard/news','NewsController@news');
Route::get('news/list','NewsController@newsList');
Route::get('/news','NewsController@create');
Route::post('/insert/news','NewsController@store');
Route::get('/dashboard/news','NewsController@getData');
Route::get('/dashboard/delete/{news_id}','NewsController@delete');
// Route::get('/edit','NewsController@edit');

//For hospital 
Route::get('/dashboard/hospital','HospitalController@index');
Route::get('/dashboard/hospital/create','HospitalController@create');
Route::post('select-ajax',['as'=>'select-ajax','uses'=>'HospitalController@selectAjax']);
Route::get('/dashboard/delete/{id}','HospitalController@delete');
Route::post('/hospital/store','HospitalController@store');


//For doctor 
Route::get('/dashboard/doctor','DoctorController@index');
Route::get('/dashboard/doctor/create','DoctorController@create');
Route::post('/doctor/store','DoctorController@store');
Route::get('/dashboard/delete/{id}','DoctorController@delete');
 

//For DocAppointment
Route::get('/dashboard/docAppoint','DocAppointmentController@index');
Route::get('/dashboard/doctorAppointments/create','DocAppointmentController@create');
Route::get('/docAppoint','DocAppointmentController@getData');
Route::post('/docAppoint/store','DocAppointmentController@store');



//For Amulance
Route::get('/dashboard/ambulance','AmbulanceCotroller@index');
Route::get('/dashboard/ambulance/create','AmbulanceCotroller@create');
Route::post('/dashboard/ambulance/store','AmbulanceCotroller@store');

//For BloodBank
Route::get('/dashboard/bloodBank','BloodBankController@index');
Route::get('/dashboard/bloodbank/create','BloodBankController@create');
Route::post('select-ajax',['as'=>'select-ajax','uses'=>'BloodBankController@selectAjax']);
Route::post('/dashboard/bloodbank/store','BloodBankController@store');

//For BloodGroup
Route::get('/dashboard/bloodgroup','BloodGroupController@index');
Route::get('/dashboard/bloodgroup/create','BloodGroupController@create');
Route::post('/dashboard/bloodbgroup/store','BloodGroupController@store');

//For government office
Route::get('/govOffice','govOfficeController@index');
Route::post('/insert/govOffice','govOfficeController@store');
Route::post('/delete/{id}','govOfficeController@destroy');

//For nongovernment office
Route::post('/insert/NongovOffice','NonGovCotroller@store');

// For nongovernment office NonGovOfficeController
//Route::post('/store/details','NonGovOfficeController@store');

// For Public Page

Auth::routes();

Route::get('/home', 'HomeController@index');

// For News
Route::get('/news', 'PublicHomeController@showAllNews');
Route::get('/search/news/paper', 'PublicHomeController@searchAllNews');
Route::get('/search/news/paper/individual/{id}', 'PublicHomeController@searchIndividualNews');
Route::get('/news/{id}', 'PublicHomeController@showIndividualNews');


// For Health-Care
Route::get('/health-care', 'PublicHomeController@showHealthCare');

// For Blood-Group
Route::get('/bloodbank','PublicHomeController@showBloodBank');

// For Office
Route::get('/office', 'PublicHomeController@showOffice');


// For Hotel-Restaurant
Route::get('/hotel-restaurant','PublicHomeController@showhotel_restaurant');

// For Travel-Tour
Route::get('/travel-tour','PublicHomeController@showtravel_tour');


//For Education
Route::get('/education','PublicHomeController@showeducation');

