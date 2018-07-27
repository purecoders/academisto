<?php

namespace App\Http\Controllers;

use App\SitePay;
use Illuminate\Http\Request;

class SitePayController extends Controller
{



  public function __construct()
  {
    $this->middleware(['auth', 'super_admin']);
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
