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
 Route::group(['middleware' => 'auth'], function () {
Route::get('/adminpanel', function () {
   return view('layout.master');
});
 });



/////user site////
Route::get('/site', function () {
   return view('layout.website');
});

Route::get('/about-goodwill', function () {
   return view('about');
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





Route::get('/mimi', function () {
   return view('user_campaign.camapaign');
});



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

// Route::group(['middleware' => 'auth'], function () {
////NAGO PANEL <start>
///ngo main page
Route::get('/org', function () {
   return view('Ngo_org.main');
});


Route::get('/campaignss', function () {
   return view('Ngo_org.campaign');
});

Route::get('/cc', function () {
   return view('Ngo_org.create_campaign');

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





// });

//////NGO PANEL <END>

Route::get('/alluser', 'UserController@in');

Route::get('/p', 'MasterController@cal');



Route::get('/admin-dash', function () {
   return view('layouts.home');
});