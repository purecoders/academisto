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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hex', function (){
   return view('hexagons');
});


Route::resource('/ad','AdController');
Route::resource('/chat','ChatController');
Route::resource('/city','CityController');
Route::resource('/cv','CvController');
Route::resource('/project','ProjectController');
Route::resource('/project-request','ProjectRequestController');
Route::resource('/report','ReportController');
Route::resource('/site-pay','SitePayController');
Route::resource('/ticket','TicketController');
Route::resource('/user','UserController');
Route::resource('/user-full-info','UserFullInformationController');

Route::get('user-panel',function (){
    return view('user.user_panel');
})->middleware('auth')->name('user-panel');

Route::get('user-ads',['middleware'=>'auth',function (){
    return view('user.ads');
}])->name('user-ads');

Route::get('user-orders',['middleware'=>'auth',function (){
    return view('user.orders');
}])->name('user-orders');

Route::get('user-order-edit/{id}',['middleware'=>'auth',function ($id){
    return view('user.edit_order',compact('id'));
}])->name('user-order-edit');

Route::get('user-order-detail/{id}',['middleware'=>'auth',function ($id){
    return view('user.detail_order',compact('id'));
}])->name('user-order-detail');

Route::get('user-requests',['middleware'=>'auth',function (){
    return view('user.user_requests');
}])->name('user-requests');

Route::get('user-cv',function (){
    return view('user.cv');
})->middleware('auth')->name('user-cv');

Route::get('user-finance',function (){
    return view('user.finance');
})->middleware('auth')->name('user-finance');

Route::get('user-ticket',function (){
    return view('user.ticket');
})->middleware('auth')->name('user-ticket');

Route::get('ads',function (){
    return view('site.ads');
})->middleware('auth')->name('ads');

Route::get('projects',function (){
    return view('site.projects');
})->middleware('auth')->name('projects');

Route::get('admin/ads',function (){
    return view('admin.ads');
})->middleware('auth')->name('admin-ads');

Route::get('admin/projects',function (){
    return view('admin.projects');
})->middleware('auth')->name('admin-projects');

Route::get('admin/users',function (){
    return view('admin.users');
})->middleware('auth')->name('admin-users');

Route::get('admin/user-control',function (){
    return view('admin.user_pages.user_control');
})->middleware('auth')->name('admin-user-control');

Route::get('admin/user-profile',function (){
    return view('admin.user_pages.profile');
})->middleware('auth')->name('admin-user-profile');

Route::get('admin/user-ads',function (){
    return view('admin.user_pages.ads');
})->middleware('auth')->name('admin-user-ads');

Route::get('admin/user-orders',function (){
    return view('admin.user_pages.orders');
})->middleware('auth')->name('admin-user-orders');

Route::get('admin/user-requests',function (){
    return view('admin.user_pages.user_requests');
})->middleware('auth')->name('admin-user-requests');










Route::get('/test',function (){
    return view('test');
});
