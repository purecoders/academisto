<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Project;
use App\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('super_admin', ['only' => [ 'index', 'show', 'destroy']]);
  }


  public function reportAd(Request $request){
    $user = Auth::user();
    $user_id_from = $user->id;

    $ad_id = $request->input('ad_id');
    $ad = Ad::findOrFail($ad_id);
    $user_id_to = User::findOrFail($ad->user_id)->id;

    $report = Report::where('user_id_from' ,'=', $user_id_from)->where('reportable_id', '=', $ad_id)->where('reportable_type', '=', 'App\Ad')->first();

    if($report === null) {
      $report = new Report();
      $report->user_id_from = $user_id_from;
      $report->user_id_to = $user_id_to;
      $report->reportable_id = $ad_id;
      $report->reportable_type = 'App\Ad';

      $report->save();
    }

    return redirect('/ads');
  }

  public function reportProject(Request $request){
    $user = Auth::user();
    $user_id_from = $user->id;

    $project_id = $request->input('project_id');
    $project = Project::findOrFail($project_id);
    $user_id_to = User::findOrFail($project->user_id)->id;

    $report = Report::where('user_id_from' ,'=', $user_id_from)->where('reportable_id', '=', $project_id)->where('reportable_type', '=', 'App\Project')->first();
    if($report === null) {
      $report = new Report();
      $report->user_id_from = $user_id_from;
      $report->user_id_to = $user_id_to;
      $report->reportable_id = $project_id;
      $report->reportable_type = 'App\Project';

      $report->save();
    }

    return redirect('/projects');
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
