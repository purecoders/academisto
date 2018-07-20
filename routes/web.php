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
Route::get('user-panel',['middleware'=>'auth',function (){
    return view('user.user_panel');
}]);
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
Route::get('/test',function (){

    return view('test');
});
