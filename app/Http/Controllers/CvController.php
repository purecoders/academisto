<?php

namespace App\Http\Controllers;

use App\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $cvs = Cv::all();
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
      'cv_text'       =>'required',
    ]);


    Cv::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $cv = Cv::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $cv = Cv::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'user_id'     =>'required',
      'cv_text'       =>'required',
    ]);

    $cv = Cv::findOrFail($id);
    $cv->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $cv = Cv::findOrFail($id);
    $cv->delete();

    //return redirect('/post');
  }


}
