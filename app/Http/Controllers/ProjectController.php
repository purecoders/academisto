<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

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

    $this->validate($request,[
      'user_id'     =>'required',
      'title'       =>'required',
      'description'       =>'required',
      'user_price'       =>'required',
      'is_immediate'       =>'required',
      'is_started'       =>'required',
      'is_finished'       =>'required',
    ]);

    $project = Project::findOrFail($id);
    $project->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $project = Project::findOrFail($id);
    $project->delete();

    //return redirect('/post');
  }


}
