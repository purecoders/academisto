<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectRequest;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }


  public function addNewProject(){

  }


  public function userProjectEdit($id){
    $user = Auth::user();
    $project = Project::findOrFail($id);
    if($project->user_id == $user->id){

      return view('user.edit_order',compact('project'));
    }else{
      return redirect('/user-orders');
    }


  }

  public function update2(Request $request){
    $user = Auth::user();
    $id = $request->input('id');
    $project = Project::findOrFail($id);

    if($project->user_id == $user->id && $project->is_started == 0){
      $project->title = $request->input('title');
      $project->description = $request->input('description');
      $project->user_price = $request->input('user_price');
      $project->save();
    }

    return redirect('/user-orders');

  }


  public function showAllProjects(){
    $projects = Project::orderBy('created_at', 'desc')->paginate(12);
    return view('site.projects', compact('projects'));
  }


  public function searchProject(Request $request){
    $text = $request->input('text');
    if ($text !== null && strlen($text) > 1) {
      $projects = Project::orderBy('created_at', 'desc')->where('title', 'like', '%'.$text.'%')->paginate(12);
      return view('site.projects', compact('projects'));
    }else{
      return redirect('/projects');
    }
  }



//########### admin

  public function adminShowAllProjects(){
    $projects = Project::orderBy('created_at', 'desc')->paginate(12);
    return view('admin.projects', compact('projects'));
  }


  public function adminSearchProject(Request $request){
    $text = $request->input('text');
    if ($text !== null && strlen($text) > 1) {
      $projects = Project::orderBy('created_at', 'desc')->where('title', 'like', '%'.$text.'%')->paginate(12);
      return view('admin.projects', compact('projects'));
    }else{
      return redirect('admin/projects');
    }
  }

  public function adminRemoveProject(Request $request){
    $project_id = $request->input('project_id');
    $project = Project::find($project_id);
    $reports = Report::where('reportable_id', '=', $project_id)->where('reportable_type', '=', 'App\Project')->get();
    foreach ($reports as $report){
      $report->delete();
    }
    $project->delete();
    return redirect('/admin/projects');
  }


  public function index()
  {
  }

  public function create()
  {
  }

  public function store(Request $request)
  {

    $this->validate($request,[
      'user_id'     =>'required',
      'title'       =>'required',
      'description'       =>'required',
      'user_price'       =>'required',
      'is_immediate'       =>'required',
      'is_started'       =>'required',
      'is_finished'       =>'required',
    ]);


    Project::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $project = Project::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $project = Project::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {

//    $this->validate($request,[
//      'user_id'     =>'required',
//      'title'       =>'required',
//      'description'       =>'required',
//      'user_price'       =>'required',
//      'is_immediate'       =>'required',
//      'is_started'       =>'required',
//      'is_finished'       =>'required',
//    ]);

    $project = Project::findOrFail($id);
    $project->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $user = Auth::user();
    $project= Project::findOrFail($id);
    if($project->user_id = $user->id){
      $project->delete();
    }
    return redirect('/user-orders');
  }


}
