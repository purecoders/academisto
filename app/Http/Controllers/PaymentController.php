<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', 'super_admin');
  }

  public function index()
  {
    $payments = Payment::all();
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
      'paymentable_id'       =>'required',
      'paymentable_type'       =>'required',
      'amount'       =>'required',
    ]);

    Payment::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $payment = Payment::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $payment = Payment::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {

    $this->validate($request,[
      'user_id'     =>'required',
      'paymentable_id'       =>'required',
      'paymentable_type'       =>'required',
      'amount'       =>'required',
    ]);

    $payment = Payment::findOrFail($id);
    $payment->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $payment = Payment::findOrFail($id);
    $payment->delete();

    //return redirect('/user');
  }




}
