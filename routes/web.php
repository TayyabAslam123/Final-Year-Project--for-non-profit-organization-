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

Route::get('/masters', function () {
   return view('layout.master');
});

//Route::get('/', function () {
  // return view('layouts.home');
//});


/////user site////
Route::get('/site', function () {
   return view('layout.website');
});

////////////////////////////////////////////////////
///////CONTROLLER _MODEL LINKS//////////////////////
Route::resource('campaign','CampaignController');
Route::resource('ngo','NgoController');
Route::resource('medicalcamp','MedicalcampoController');
Route::resource('scholarship','ScholarController');
Route::resource('projects','ProjectsController');
Route::resource('goodwork','GoodworkController');
Route::resource('donations','DonationsController');
Route::resource('msg','MsgController');
Route::resource('myprofile','BackerController');

Route::resource('User','UserController');

/////////////////////////////////////////////////////
/////////////////////////////////////////////////////

//////////////////AUNTHENTICATION SCEANS//////////////
Auth::routes();
///////_______________________________________________________
Route::get('/', 'HomeController@index')->name('home');


//Route::get('/user', 'HomeController@user')->name('user');
///////______________________________________________________
 /*if (Auth::user()->role=='admin'){
   Route::get('/', 'HomeController@index')->name('home');
      }
 
 else{

   Route::get('/', 'HomeController@user')->name('home');
 }

 */

//////////////////////////////////////////////////////////
///////////////   TESTINGS   ///////////////////////////


Route::get('/mimi', function () {
   return view('user_campaign.camapaign');
});
////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////  

//Route::get('/c', function () {
  // $pos= DB::select('select * from campaigns where status="not approve" ');
   //return view('campaign.verification', ['pos' => $pos]);
//});





///test 
//Route::get('h', 'CampaignController@donate');

//Route::get('/u','donate@donation');
//////////////////////////////////////////////////////////////////////
////////////// ADDITIONAl FUNTIONS/////////////////////////////////////
//>
Route::get('campaign_verification', 'CampaignController@verify');
Route::get('show_campaign', 'CampaignController@showing');
Route::get('show', 'CampaignController@shows');
//>
Route::get('ngo_verification', 'NgoController@verify');
Route::get('show_ngo', 'NgoController@showing');
//>
Route::get('medicalcamp_verification', 'MedicalcampoController@verify');
Route::get('show_medicalcamp', 'MedicalcampoController@showing');
//>
Route::get('projects_verification', 'ProjectsController@verify');
Route::get('show_projects', 'ProjectsController@showing');
//>
Route::get('don', 'FunctionController@show');
//_____________________________________________________________________________________//
///>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

Route::group(['middleware' => 'auth'], function () {
////NAGO PANEL <start>
///ngo main page
Route::get('/org', function () {
   return view('Ngo_org.main');
});


/////

Route::get('/pro', function () {
   return view('Ngo_org.profile');
});

Route::get('/mcamp', function () {
   return view('Ngo_org.medical');
});

Route::get('/proj', function () {
   return view('Ngo_org.projects');
});



///NGO MY PROFILE

Route::get('/profiles', 'NgoController@profiles');
///
Route::get('/allcamps', 'MedicalcampoController@camps');

Route::get('/allprojects', 'ProjectsController@projects');





});

//////NGO PANEL <END>

Route::get('/alluser', 'UserController@in');