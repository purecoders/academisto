<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      $user = Auth::user();
      $roles = $user->roles;
      $isSuperAdmin = false;
      foreach ($roles as $role){
        if($role->name == 'super_admin'){
          $isSuperAdmin = true;
          break;
        }
      }


      if($isSuperAdmin){
        return redirect('/admin/ads');

      }else{
        return redirect('/user-panel');
      }




//        $user = Auth::user();
//        $roles = $user->roles;
//        foreach ($roles as $role){
//          if($role->name == 'super_admin'){
//            return redirect('/admin/ads');
//          }
//        }
//
//        return redirect('/user-panel');


    }
}
