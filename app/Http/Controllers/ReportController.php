<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('super_admin', ['only' => [ 'index', 'show', 'destroy']]);
  }


  public function index()
  {
    $reports = Report::all();
    //return view('user.show_users', compact('users'));
  }

  public function create()
  {
    // return view('user.register');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'user_id_from'     =>'required',
      'user_id_to'     =>'required',
      'reportable_id'       =>'required',
      'reportable_type'       =>'required',
      'description'       =>'required',
    ]);

    Report::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $report = Report::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $report = Report::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'user_id_from'     =>'required',
      'user_id_to'     =>'required',
      'reportable_id'       =>'required',
      'reportable_type'       =>'required',
      'description'       =>'required',
    ]);


    $report = Report::findOrFail($id);
    $report->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $report = Report::findOrFail($id);
    $report->delete();

    //return redirect('/post');
  }



}
