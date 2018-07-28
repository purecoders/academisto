<?php

namespace App\Http\Controllers;

use App\File;
use App\Payment;
use App\Project;
use App\ProjectRequest;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Zarinpal\Zarinpal;
use Zarinpal\Drivers\SoapDriver;


class ProjectController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }




  public function addNewProject(Request $request){
    $merchent_id = '0959fefa-4605-11e8-984b-005056a205be';
    $user = Auth::user();
    $user_id = $user->id;

    $this->validate($request,[
      'title'       =>'required',
      'description' =>'required',
      'user_price'       =>'required',
//      'file'       =>'required',
      'is_immediate'       =>'required',
    ]);



    $file = $request->file('file');

    if($file){
      $site_url = 'http://academisto.com/';

      date_default_timezone_set('Asia/Tehran');

      //create image dir
      $year_dir = date('Y', time());
      $month_dir = date('m', time());
      $file_dir = 'uploads/files/' . $year_dir.'/'.$month_dir;

      //generate name to image
      $file_extension = $file->getClientOriginalExtension();

      $day = date('d', time());
      $hour = date('h', time());
      $minute = date('i', time());


      $file_name = $day.'d'.$hour.'h'.$minute. 'm' .$user_id . 'u'. $this->generateRandomString(15). '.' . $file_extension;

      //save image into dir
      $file->move($file_dir, $file_name);

    }

    $title = $request->input('title');
    $description = $request->input('description');
    $price = $request->input('user_price');
    $is_immediate = $request->input('is_immediate');



    //save project
    $newPrj = new Project();

    $newPrj->user_id = $user_id;
    $newPrj->title = $title;
    $newPrj->description = $description;
    $newPrj->user_price = $price;
    $newPrj->is_immediate = $is_immediate;
    $newPrj->is_started = 0;
    $newPrj->is_finished = 0;

    $newPrj->save();

    //save file to table
    $lastAdId = $newPrj->id;

    if($file) {
      $file = new File();
      $file->user_id = $user_id;
      $file->project_id = $lastAdId;
      $file->is_for_answer = 0;
      $file->path = $file_dir . '/' . $file_name;
      $file->url = $site_url . $file_dir . '/' . $file_name;
      $file->save();
    }
//
    $newPrj->delete();

    $this->zarinpalPayment((int)($price), $lastAdId, $user_id);
  }


  private function zarinpalPayment($amount, $project_id, $user_id){
    $zarinpal = new Zarinpal('0959fefa-4605-11e8-984b-005056a205be', new SoapDriver());
    echo json_encode($answer = $zarinpal->request(route('add-new-project-after-pay',
      ['amount' => $amount, 'project_id' => $project_id, 'user_id' => $user_id] )
      , $amount, 'new project'));
    if(isset($answer['Authority'])) {
      file_put_contents('Authority',$answer['Authority']);
      $zarinpal->redirect();
    }
  }


  public function addNewProjectAfterPayment($amount, $project_id, $user_id) {
    $zarinpal = new Zarinpal('0959fefa-4605-11e8-984b-005056a205be', new SoapDriver());
    $answer['Authority'] = file_get_contents('Authority');
    $result = ($zarinpal->verify('OK', $amount, $answer['Authority']));
    //echo json_encode($result);
    $status = $result['Status'];

    if($status == 'success') {
      $RefID = $result['RefID'];
      $payment = new Payment();
      $payment->user_id = $user_id;
      $payment->paymentable_id = $project_id;
      $payment->paymentable_type = 'App\Project';
      $payment->amount = $amount;
      $payment->bank_receipt = $RefID;
      $payment->success = 1 ;
      $payment->save();

      Project::withTrashed()->find($project_id)->restore();

      return redirect('/user-orders');

    }else{

    }

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


  private function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

}
