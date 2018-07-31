<?php

namespace App\Http\Controllers;

use App\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cvUpdate(Request $request)
    {
        $user = Auth::user();

        $cv = $user->cv;
        if ($cv === null) {
            $cv = new Cv();
            $cv->user_id=$user->id;
            $cv->is_accepted=0;
        }
        $cv->cv_text = $request->input('cv_text');
        $cv->save();

        return redirect('/user-cv');
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
        $this->validate($request, [
            'user_id' => 'required',
            'cv_text' => 'required',
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
        $user = Auth::user();
        $cv = $user->cv;
        $cv->cv_text = $request->input('cv_text');
        return redirect('/user-cv');
    }


    public function destroy($id)
    {
        $cv = Cv::findOrFail($id);
        $cv->delete();

        //return redirect('/post');
    }


}
