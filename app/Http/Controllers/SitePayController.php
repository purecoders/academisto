<?php

namespace App\Http\Controllers;

use App\SitePay;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SitePayController extends Controller
{



  public function __construct()
  {
    $this->middleware(['auth', 'super_admin']);
  }


  public function freelancerPayPage(Request $request){
    $user_id = $request->input('user_id');
    $sum_pay = $request->input('sum_pay');

    return view('admin.user_pages.pay', compact(['user_id', 'sum_pay']));
  }

  public function sendFreelancerPay(Request $request){
    $this->validate($request,[
      'user_id' =>'required',
      'sum_pay' =>'required',
      'bank_receipt' =>'required',
    ]);

    $user_id = $request->input('user_id');
    $sum_pay = $request->input('sum_pay');
    $bank_receipt = $request->input('bank_receipt');

    $sity_pays = SitePay::where('user_id', '=', $user_id)->where('success', '=', 0)->get();
    foreach ($sity_pays as $pay){
      $pay->success = 1;
      $pay->bank_receipt = $bank_receipt;
      $pay->save();
    }

    return redirect('/admin/freelancers');

  }







  public function index()
  {
    $site_pays = SitePay::all();
    //return view('user.show_users', compact('users'));
  }

  public function create()
  {
    // return view('user.register');
  }

  public function store(Request $request)
  {

    $this->validate($request,[
      'user_id'     =>'required',
      'amount'       =>'required',
      'bank_receipt'       =>'required',
    ]);


    SitePay::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $site_pay = SitePay::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $site_pay = SitePay::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {

    $this->validate($request,[
      'user_id'     =>'required',
      'amount'       =>'required',
      'bank_receipt'       =>'required',
    ]);


    $site_pay = SitePay::findOrFail($id);
    $site_pay->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $site_pay = SitePay::findOrFail($id);
    $site_pay->delete();

    //return redirect('/post');
  }


}
