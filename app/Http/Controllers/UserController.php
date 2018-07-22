<?php

namespace App\Http\Controllers;

use App\City;
use App\Project;
use App\State;
use App\Univ;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{





    public function getUserAds(){
      $user = Auth::user();
      $ads = $user->ads;
      $states = State::all();
      $cities = City::all();
      $univs = Univ::all();
      return view('user.ads', compact(['ads', 'states', 'cities', 'univs']));
    }


    public function getUserOrders(){
      $user = Auth::user();
      $projects = $user->projects;
      return view('user.orders',compact(['projects','user']));
    }

    public function getUserSpecialProjectDetail($id){

      $user = Auth::user();
      $projects = $user->projects;
      $isForThisUser = false;
      foreach ($projects as $project){
        if($project->id == $id){
          $isForThisUser = true;
          break;
        }
      }

      if($isForThisUser) {
        $project = Project::findOrFail($id);
        $project_requests = $project->requests;
        $requests = array();
        foreach ($project_requests as $project_request){
          $requests[] = ["project_request"=>$project_request, "user"=>User::findOrFail($project_request->user_id)];
        }

        return view('user.detail_order', compact(['id', 'project', 'requests']));
      }else{
        return redirect('/user-orders');
      }
    }

    public function getUserProjectRequests(){
      $user = Auth::user();
      $project_requests = $user->projectRequests;
      $requests = array();
      foreach ($project_requests as $project_request){
        $requests[] = ["project_request"=>$project_request, "projects"=>Project::findOrFail($project_request->project_id)];
      }
      return view('user.user_requests', compact('requests'));
    }

    public function userCv(){
      $user = Auth::user();
      $cv = $user->cv;
      return view('user.cv', compact(['user', 'cv']));
    }

    public function userUpdate(Request $request){
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->save();

        return redirect('/user-cv');
    }

    public function userFinance(){
      $user = Auth::user();
      $userFullInfo = $user->fullInfo;
      $payments = $user->payments;
      $received_payments = $user->sitePays;

      return view('user.finance', compact(['user', 'userFullInfo', 'payments', 'received_payments']));
    }


    public function userFinanceUpdate(Request $request){
      $user = Auth::user();
      $fullInfo = $user->fullInfo;

      $fullInfo->bank_card_id =  $request->input('bank_card_id');
      $fullInfo->bank_account_id = $request->input('bank_account_id');
      $fullInfo->bank_account_owner_name = $request->input('bank_account_owner_name');
      $fullInfo->save();

      return redirect('user-finance');
    }

    public function userTickets(){
      $user = Auth::user();
      $tickets = $user->tickets;

      return view('user.ticket', compact(['user', 'tickets']));
    }

    public function userSendTicket(){

    }








    public function index()
    {
        $users = User::all();
        //return view('user.show_users', compact('users'));
    }

    public function create()
    {
       // return view('user.register');
    }

    public function store(Request $request)
    {

      $this->validate($request,[
        'name'     =>'required',
        'email'       =>'required',
        //'phone_number'       =>'required',
      ]);


        User::create($request->all());
        //return redirect('/user');
    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        //return view('user.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        //return view('user.edit', compact('user'));

    }


    public function update(Request $request, $id)
    {

      $this->validate($request,[
        'name'     =>'required',
        'email'       =>'required',
        'phone_number'       =>'required',
      ]);

      $user = User::findOrFail($id);
      $user->update($request->all());

      //return redirect('/user/' . $user->id);
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        //return redirect('/post');
    }







}
