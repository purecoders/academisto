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

use App\Ad;
use App\City;
use App\State;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hex', function (){
   return view('hexagons');
});


Route::resource('/ad','AdController');
Route::resource('/city','CityController');
Route::resource('/cv','CvController');
Route::resource('/project','ProjectController');
Route::resource('/project-request','ProjectRequestController');
Route::resource('/report','ReportController');
Route::resource('/site-pay','SitePayController');
Route::resource('/ticket','TicketController');
Route::resource('/user','UserController');
Route::resource('/user-full-info','UserFullInformationController');


//Route::get('user-panel', 'ProjectController@showAllProjects')->name('user-panel');
Route::get('user-panel',function (){
  return view('user.user_panel');
})->middleware('auth')->name('user-panel');


Route::get('user-ads','UserController@getUserAds')->name('user-ads')->middleware('auth');

//
//
//
//Route::get('user-ads',['middleware'=>'auth',function (){
//  return view('user.ads');
//}])->name('user-ads');

Route::get('user-orders','UserController@getUserOrders')->name('user-orders')->middleware('auth');
Route::post('project/accept', 'ProjectRequestController@startProject')->name('project-request-accept')->middleware('auth');
Route::post('project/deny', 'ProjectRequestController@denyRequest')->name('project-request-deny')->middleware('auth');
Route::get('user-order-edit/{id}', 'ProjectController@userProjectEdit')->name('user-order-edit')->middleware('auth');
Route::post('project-update', 'ProjectController@update2')->name('project-update')->middleware('auth');
Route::get('user-order-detail/{id}','UserController@getUserSpecialProjectDetail')->name('user-order-detail')->middleware('auth');
Route::get('user-requests','UserController@getUserProjectRequests')->name('user-requests')->middleware('auth');




Route::get('user-cv','UserController@userCv')->middleware('auth')->name('user-cv');
Route::post('cv-update','CvController@cvUpdate')->middleware('auth')->name('cv-update');
Route::post('user-update','UserController@userUpdate')->middleware('auth')->name('user-update');
Route::get('user-finance','UserController@userFinance')->middleware('auth')->name('user-finance');
Route::post('user-finance-update','UserController@userFinanceUpdate')->middleware('auth')->name('user-finance-update');
Route::get('user-ticket','userController@userTickets')->middleware('auth')->name('user-ticket');
Route::post('user-send-ticket','ticketController@sendTicket')->middleware('auth')->name('user-send-ticket');

Route::get('ads', 'AdController@showAds')->name('ads');
Route::get('search-ad', 'AdController@searchAds')->middleware('auth')->name('search-ad');
Route::post('report-ad', 'ReportController@reportAd')->middleware('auth')->name('report-ad');


Route::get('projects','ProjectController@showAllProjects')->name('projects');
Route::post('search-project','ProjectController@searchProject')->name('search-project');
Route::post('add-new-project','ProjectController@addNewProject')->name('add-new-project');///add new project with pay###############



Route::post('send-request','ProjectRequestController@sendRequest')->middleware('auth')->name('send-request');

Route::post('report-project', 'ReportController@reportProject')->middleware('auth')->name('report-project');











Route::get('/test',function (){

//  $states = State::all();
//  foreach ($states as $state){
//    echo $state->name . '<hr>';
//  }
  $ad = Ad::find(1);
  echo $ad->city->name;
});






Route::get('/super-admin-panel', function (){
  //you must return 'admin panel view';
})->middleware(['auth', 'super_admin']);