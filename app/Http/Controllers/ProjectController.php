<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }


  public function payment(){

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
    if($project->user_id == $user->id){
      $project->title = $request->input('title');
      $project->description = $request->input('description');
      $project->user_price = $request->input('user_price');
      $project->save();
    }

    return redirect('/user-orders');

  }



  public function index()
  {
    $projects = Project::all();
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
