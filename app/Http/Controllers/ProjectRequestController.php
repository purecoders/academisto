<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectRequestController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth');
  }

  public function startProject(Request $request){
    $user = Auth::user();

    $id = $request->input('project_request_id');
    $project_request = ProjectRequest::findOrFail($id);
    $project = Project::findOrFail($project_request->project_id);
    if($project->user_id == $user->id){
      $project_request->is_accepted = 1;
      $project_request->save();

      $project->is_started = 1;
      $project->save();

      $project_requests = ProjectRequest::where('project_id', '=', $project_request->project_id)->get();
      foreach ($project_requests as $project_request){
        if($project_request->id != $id) {
          $project_request->is_denied = 1;
          $project_request->save();
        }
      }
    }

    return redirect('/user-order-detail/'.$project->id);

  }


  public function denyRequest(Request $request){
    $user = Auth::user();
    $id = $request->input('project_request_id');

    $project_request = ProjectRequest::findOrFail($id);
    $project = Project::findOrFail($project_request->project_id);
    if($project->user_id == $user->id){
      $project_request->is_denied = 1;
      $project_request->save();
    }

    return redirect('/user-order-detail/'. $project->id);

  }

  public function index()
  {
    $project_requests = ProjectRequest::all();
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
      'project_id'       =>'required',
      'description'       =>'required',
      'price'       =>'required',
    ]);

    ProjectRequest::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $project_request = ProjectRequest::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $project_request = ProjectRequest::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {



    $project_request = ProjectRequest::findOrFail($id);
    $project_request->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $user = Auth::user();
    $project_request= ProjectRequest::findOrFail($id);

    if($project_request->user_id = $user->id){
      $project_request->delete();
    }
    return redirect('/user-requests');
  }


}
