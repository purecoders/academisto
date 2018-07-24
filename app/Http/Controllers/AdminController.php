<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Cv;
use App\Project;
use App\ProjectRequest;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function adminShowUserProfile(Request $request){
    $id = $request->input('user_id');
    $user = User::findOrFail($id);
    $rates = $user->rates;
    $rate_count = 0;
    $sum_rates = 0;
    foreach ($rates as $rate){
      $sum_rates += $rate->rate;
      $rate_count++;
    }

    if ($rate_count != 0){
      $rate = $sum_rates / $rate_count;
    }else{
      $rate = 0;
    }

    $user_ad_count = $user->ads->count();
    $user_project_count = $user->projects->count();
   // view('admin.user_pages.user_control', compact(['user', 'rate', 'user_ad_count', 'user_project_count']));
    return view('admin.user_pages.profile', compact(['user', 'rate', 'user_ad_count', 'user_project_count']));
  }

  public function adminAcceptCv(Request $request){
    $user_id = $request->input('user_id');
    $cv = Cv::where('user_id', '=', $user_id)->first();
    $cv->is_accepted = 1;
    $cv->save();

    return redirect('/admin/user-profile/' . $user_id);
  }



  public function adminShowUsers(){
    $users = User::all();

    $rates = array();

    foreach ($users as $user) {
      $user_rates = $user->rates;

      $rate_count = 0;
      $sum_rates = 0;
      foreach ($user_rates as $rate) {
        $sum_rates += $rate->rate;
        $rate_count++;
      }

      if ($rate_count != 0) {
        $rate = $sum_rates / $rate_count;
      } else {
        $rate = 0;
      }
      $rates[$user->id] = $rate;
    }

    return view('admin.users', compact(['users', 'rates']));

  }




  public function adminRemoveUser(Request $request){
    $user = User::findOrFail($request->input('user_id'));
    $user->delete();
    return redirect('admin/users');

  }


//  public function adminUserControl($id){
//    $user = findOrFail($id);
//
//    return view('admin.user_pages.user_control', compact('user'));
//  }


  public function adminUserAds(Request $request){
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $ads = $user->ads;
    return view('admin.user_pages.ads', compact(['user', 'ads']));
  }


  public function adminUserOrders(Request $request){
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $projects = $user->projects;
    return view('admin.user_pages.orders', compact(['user', 'projects']));
  }

  public function adminUserRequests(Request $request){
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $project_requests = $user->projectRequests;
    return view('admin.user_pages.user_requests', compact(['user','project_requests']));

  }


  public function adminRemoveUserAd(Request $request){
    $ad_id = $request->input('ad_id');
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $ad = Ad::find($ad_id);
    $ad->delete();
    $ads = $user->ads;
    return view('admin.user_pages.ads', compact(['user', 'ads']));
  }


  public function adminRemoveUserProject(Request $request){
    $project_id = $request->input('project_id');
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $project = Project::find($project_id);
    $project->delete();
    $projects = $user->projects;
    return view('admin.user_pages.orders', compact(['user', 'projects']));
  }


  public function adminRemoveUserProjectRequest(Request $request){
    $project_request_id = $request->input('request_id');
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $project_request = ProjectRequest::find($project_request_id);
    $project_request->delete();
    $project_requests = $user->projectRequests;
    return view('admin.user_pages.user_requests', compact(['user', 'project_requests']));
  }











}
