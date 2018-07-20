<?php

namespace App\Http\Controllers;

use App\ProjectRequest;
use Illuminate\Http\Request;

class ProjectRequestController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth');
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
    $this->validate($request,[
      'user_id'     =>'required',
      'project_id'       =>'required',
      'description'       =>'required',
      'price'       =>'required',
    ]);


    $project_request = ProjectRequest::findOrFail($id);
    $project_request->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $project_request = ProjectRequest::findOrFail($id);
    $project_request->delete();

    //return redirect('/post');
  }


}
