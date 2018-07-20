<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

  public function index()
  {
    $cities = City::all();
    //return view('user.show_users', compact('users'));
  }

  public function create()
  {
    // return view('user.register');
  }

  public function store(Request $request)
  {
    City::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $city = City::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $city = City::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {
    $city = City::findOrFail($id);
    $city->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $city = City::findOrFail($id);
    $city->delete();

    //return redirect('/post');
  }


}
