<?php

namespace App\Http\Controllers;

use App\UserFullInformation;
use Illuminate\Http\Request;

class UserFullInformationController extends Controller
{


  public function index()
  {
    $user_full_informations = UserFullInformation::all();
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
      'bank_account_id'       =>'required',
      'bank_card_id'       =>'required',
      'bank_account_owner_name'       =>'required',
    ]);

    UserFullInformation::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $user_full_info = UserFullInformation::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $user_full_info = UserFullInformation::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'user_id'     =>'required',
      'bank_account_id'       =>'required',
      'bank_card_id'       =>'required',
      'bank_account_owner_name'       =>'required',
    ]);

    $user_full_info = UserFullInformation::findOrFail($id);
    $user_full_info->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $user_full_info = UserFullInformation::findOrFail($id);
    $user_full_info->delete();

    //return redirect('/post');
  }




}
