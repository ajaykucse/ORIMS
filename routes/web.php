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
Route::get('/news/view/{id}', 'PublicHomeController@update');

// Route::get('/sign-in', function () {
//     return view('auth/login');
// });

// For Login Sign Up Authontication

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
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });
 
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/index',function(){
	$region = DB::table('location')->get();
	return view::make('index')->with('region',$region);



});
 
Route::get('dashboard', 'AdminController@dashboard');
Route::get('/delete/{news_id}','AdminController@delete');
Route::get('/delete/{docid}','AdminController@delete');
Route::post('store/details', 'AdminController@storeLocation');

// Auth:: routes();

// Route::get('master', 'HomeController@admin'); 


Auth::routes();

// Route::get('/home', 'HomeController@index');

// For Region & City 
Route::post('/insert/location','LocationController@insert');
Route::get('/location','LocationController@getData');
Route::get('/delete/{id}','LocationController@delete');
Route::get('/edit','LocationController@edit');

// For News
Route::get('news/list','NewsController@newsList');
Route::get('/news','NewsController@create');
Route::post('/insert/news','NewsController@store');
Route::get('/news','NewsController@getData');
Route::get('/delete/{news_id}','NewsController@delete');
// Route::get('/edit','NewsController@edit');

// For hospital 
Route::get('/hospital','HospitalController@index');
Route::get('/delete/{id}','HospitalController@delete');
Route::post('/hospital/store','HospitalController@store');


// For doctor 
Route::get('/doctor','DoctorController@index');
Route::post('/doctor/store','DoctorController@store');
 

//For DocAppointment
Route::get('/docAppoint','DocAppointmentController@index');
Route::get('/docAppoint','DocAppointmentController@getData');
Route::post('/docAppoint/store','DocAppointmentController@store');



//For Amulance
Route::get('/ambulance','AmbulanceCotroller@index');
Route::post('/ambulance/store','AmbulanceCotroller@store');


// For government office
Route::get('/govOffice','govOfficeController@index');
Route::post('/insert/govOffice','govOfficeController@store');
Route::post('/delete/{id}','govOfficeController@destroy');

// For nongovernment office
Route::post('/insert/NongovOffice','NonGovCotroller@store');

// For nongovernment office NonGovOfficeController
//Route::post('/store/details','NonGovOfficeController@store');

//For Public Page

Auth::routes();

Route::get('/home', 'HomeController@index');

// For News
Route::get('/news', 'PublicHomeController@showAllNews');
Route::get('/search/news/paper', 'PublicHomeController@searchAllNews');
Route::get('/search/news/paper/individual/{id}', 'PublicHomeController@searchIndividualNews');
Route::get('/news/{id}', 'PublicHomeController@showIndividualNews');


// For Health-Care
Route::get('/health-care', 'PublicHomeController@showHealthCare');


//For Office
Route::get('/office', 'PublicHomeController@showOffice');


//For Hotel-Restaurant
Route::get('/hotel-restaurant','PublicHomeController@showhotel_restaurant');

//For Travel-Tour
Route::get('/travel-tour','PublicHomeController@showtravel_tour');


//For Education
Route::get('/education','PublicHomeController@showeducation');
