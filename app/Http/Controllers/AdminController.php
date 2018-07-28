<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Cv;

use App\Payment;
use App\Project;
use App\ProjectRequest;
use App\Report;
use App\SitePay;
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


  public function adminUserFinance(Request $request){

    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $user_full_info = $user->fullInfo;

    $payments = $user->payments;
    $paymentsFullInfo = array();
    foreach ($payments as $payment){

      if($payment->success == 1) {

        if ($payment->paymentable_type == 'App\Ad') {
          $ad = Ad::find($payment->paymentable_id);
          $paymentsFullInfo [] = ['payment' => $payment, 'payment_name' => $ad['title']];
        }elseif ($payment->paymentable_type == 'App\Project') {
          $project = Project::find($payment->paymentable_id);
          $paymentsFullInfo [] = ['payment' => $payment, 'payment_name' => $project['title']];
        }

      }

    }


    $userPays = Payment::where('user_id', '=', $user->id)->where('success', '=', 1)->get();
    $sitePays = SitePay::where('user_id', '=', $user->id)->where('success', '=', 1)->get();
    $siteMustPays = SitePay::where('user_id', '=', $user->id)->where('success', '=', 0)->get();

    $userSumPays = 0;
    $siteSumPays = 0;
    $siteSumMustPays = 0;

    foreach ($userPays as $pay){
      $userSumPays += $pay->amount;
    }

    foreach ($sitePays as $pay){
      $siteSumPays += $pay->amount;
    }

    foreach ($siteMustPays as $pay){
      $siteSumMustPays += $pay->amount;
    }





    return view('admin.user_pages.finance', compact(['user', 'user_full_info','paymentsFullInfo', 'userPays', 'sitePays', 'userSumPays', 'siteSumPays', 'siteSumMustPays']));
//    return view('admin.user_pages.finance', compact(['user', 'user_full_info']));
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

  public function adminRemoveUserAdFromReports(Request $request){
    $ad_id = $request->input('ad_id');
    $reports = Report::where('reportable_id' ,'=', $ad_id)->where('reportable_type', '=', 'App\Ad')->get();
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $ad = Ad::find($ad_id);
    $ad->delete();
    foreach ($reports as $report){
      $report->delete();
    }
    $ads = $user->ads;
    return redirect('/admin/reports');
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

  public function adminRemoveUserProjectFromReports(Request $request){
    $project_id = $request->input('project_id');
    $reports = Report::where('reportable_id' ,'=', $project_id)->where('reportable_type', '=', 'App\Project')->get();
    $user_id = $request->input('user_id');
    $user = User::findOrFail($user_id);
    $project = Project::find($project_id);
    $project->delete();
    foreach ($reports as $report){
      $report->delete();
    }
    $projects = $user->projects;
    return redirect('/admin/reports');
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


  public function adminReports(){
    $reports = Report::all();
    $reportsFullInfo = array();
    foreach ($reports as $report) {
      if($report->reportable_type == 'App\Ad'){
        $ad = Ad::find($report->reportable_id);
        $reportsFullInfo [] = ['report'=>$report, 'reportable_name'=>$ad['title']];
      }elseif ($report->reportable_type == 'App\Project'){
        $project = Project::find($report->reportable_id);
        $reportsFullInfo [] = ['report'=>$report, 'reportable_name'=>$project['title']];
      }

    }


    return view('admin.reports', compact(['reportsFullInfo']));
  }




  public function adminFinance(){
    $payments = Payment::where('success', '=', 1)->withTrashed()->get();
    $site_pays = SitePay::where('success', '=', 1)->withTrashed()->get();

    $paymentsSum = 0;
    $site_paysSum = 0;

    foreach ($payments as $payment){
      $paymentsSum += $payment->amount;
    }

    foreach ($site_pays as $pay){
      $site_paysSum += $pay->amount;
    }


    return view('admin.finance', compact(['payments', 'site_pays', 'paymentsSum', 'site_paysSum']));
  }



  public function adminSearchUser(Request $request){
    $email = $request->input('user_email');
    if($email === null || strlen($email) < 2){
      return redirect('admin/users');
    }else{
      $users = User::where('email', 'like', '%'.$email.'%')->get();
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

  }







}
