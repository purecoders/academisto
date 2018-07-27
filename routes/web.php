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
use Illuminate\Http\Request;


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




////############ admin ###############///

Route::get('admin/ads', 'AdController@adminShowAds')->middleware(['auth','super_admin'])->name('admin-ads');
Route::post('admin/remove-ads', 'AdController@adminRemoveAd')->middleware(['auth','super_admin'])->name('admin-remove-ads');
Route::post('admin/user-profile', 'AdminController@adminShowUserProfile')->middleware(['auth','super_admin'])->name('admin-user-profile');////
Route::post('admin/accept-cv', 'AdminController@adminAcceptCv')->middleware(['auth','super_admin'])->name('admin-accept-cv');
Route::get('admin/search-ads', 'AdController@adminSearchAds')->middleware(['auth','super_admin'])->name('admin-search-ads');
Route::get('admin/projects', 'ProjectController@adminShowAllProjects')->middleware(['auth','super_admin'])->name('admin-projects');
Route::post('admin/search-project', 'ProjectController@adminSearchProject')->middleware(['auth','super_admin'])->name('admin-search-project');
Route::post('admin/remove-project', 'ProjectController@adminRemoveProject')->middleware(['auth','super_admin'])->name('admin-remove-project');
Route::get('admin/users', 'AdminController@adminShowUsers')->middleware(['auth','super_admin'])->name('admin-users');
Route::post('admin/remove-user', 'AdminController@adminRemoveUser')->middleware(['auth','super_admin'])->name('admin-remove-user');
//Route::post('admin/user-control', 'AdminController@adminUserControl')->middleware('auth')->name('admin-user-control');
Route::post('admin/user-ads', 'AdminController@adminUserAds')->middleware(['auth','super_admin'])->name('admin-user-ads');
Route::post('admin/remove-user-ad', 'AdminController@adminRemoveUserAd')->middleware(['auth','super_admin'])->name('admin-remove-user-ad');
Route::post('admin/remove-user-project', 'AdminController@adminRemoveUserProject')->middleware(['auth','super_admin'])->name('admin-remove-user-project');
Route::post('admin/remove-user-project-request', 'AdminController@adminRemoveUserProjectRequest')->middleware(['auth','super_admin'])->name('admin-remove-user-project-request');
Route::post('admin/user-orders', 'AdminController@adminUserOrders')->middleware(['auth','super_admin'])->name('admin-user-orders');


Route::post('admin/user-requests', 'AdminController@adminUserRequests')->middleware(['auth','super_admin'])->name('admin-user-requests');






Route::get('admin/user-finance',function (){
  return view('admin.user_pages.finance');
})->middleware(['auth','super_admin'])->name('admin-user-finance');

Route::get('admin/reports',function (){
  return view('admin.reports');
})->middleware(['auth','super_admin'])->name('admin-reports');

Route::get('admin/finance',function (){
  return view('admin.finance');
})->middleware(['auth','super_admin'])->name('admin-finance');

Route::get('admin/tickets',function (){
  return view('admin.tickets');
})->middleware(['auth','super_admin'])->name('admin-tickets');










Route::get('/test',function (){

$ad = Ad::find(10);
$reports = $ad->reports;
$i=0;
  foreach ($reports as $report){
   // echo $reports;
    $i++;
  }

  echo $i;
});






Route::get('/super-admin-panel', function (){
  //you must return 'admin panel view';
})->middleware(['auth', 'super_admin']);


//pouya updated:
Route::post('get-city',function(Request $request){
    $state=State::findOrFail($request->state_id);
    $cities=$state->cities;
    return response()->json($cities);
})->middleware('auth');