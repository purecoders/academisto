<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }


  public function sendTicket(Request $request){
    if(strlen($request->input('text')) > 0) {
      $user = Auth::user();
      $ticket = new Ticket();
      $ticket->user_id = $user->id;
      $ticket->text = $request->input('text');
      $ticket->is_user_send = 1;
      $ticket->save();
    }

    return redirect('/user-ticket');
  }


  public function showAdminTickets(){
    $tickets = Ticket::orderBy('created_at', 'desc')->get();
    $users_id = array();
    foreach ($tickets as $ticket){
      $user_id = $ticket->user_id;
      if(!in_array($user_id, $users_id)){
        $users_id [] = $user_id;
      }
    }



    //$users = array();
    $users_tickets = array();
    foreach ($users_id as $user_id){
      $user = User::withTrashed()->find($user_id);
      //$users[] = $user;
      $tickets = $user->tickets;
      $last_ticket_date = Ticket::orderBy('created_at', 'desc')->first()->created_at;
      $newTicketsCount = 0;
      foreach ($tickets as $ticket){
        if($ticket->is_admin_seen == 0) {
          $newTicketsCount++;
        }
      }

      $users_tickets [] =['user'=>$user, 'new_tikects_count'=>$newTicketsCount, 'last_ticket_date'=>$last_ticket_date];

    }

    $special_user_tickets =[];

//    echo json_encode($users_tickets);
//    exit();

    return view('admin.tickets', compact(['users_tickets', 'special_user_tickets']));
  }

  public function showAdminUserTickets($user_id){
    $special_user = User::find($user_id);

    $tickets = Ticket::orderBy('created_at', 'desc')->get();
    $users_id = array();
    foreach ($tickets as $ticket){
      $user_id = $ticket->user_id;
      if(!in_array($user_id, $users_id)){
        $users_id [] = $user_id;
      }
    }



    //$users = array();
    $users_tickets = array();
    foreach ($users_id as $user_id){
      $user = User::withTrashed()->find($user_id);
      //$users[] = $user;
      $tickets = $user->tickets;
      $last_ticket_date = Ticket::orderBy('created_at', 'desc')->first()->created_at;
      $newTicketsCount = 0;


      foreach ($tickets as $ticket) {
        if($user->id == $special_user->id) {
          $ticket->is_admin_seen = 1;
          $ticket->save();
        }

        if($ticket->is_admin_seen == 0) {
          $newTicketsCount++;
        }
      }

      $users_tickets [] =['user'=>$user, 'new_tikects_count'=>$newTicketsCount, 'last_ticket_date'=>$last_ticket_date];

    }


    if($special_user !== null) {
      $special_user_tickets = $special_user->tickets;
    }else{
      $special_user_tickets = [];
    }

//    echo json_encode($users_tickets);
//    exit();

    return view('admin.tickets', compact(['users_tickets', 'user_tickets', 'special_user_tickets']));

  }


  public function AdminSendTicket(Request $request){
    $text = $request->input('text');
    $user_id = $request->input('user_id');

    $ticket = new Ticket();
    $ticket->user_id = $user_id;
    $ticket->text = $text;
    $ticket->is_user_send = 0;
    $ticket->is_admin_seen = 1;
    $ticket->save();

    return redirect('/admin/user-tickets/'.$user_id);


  }









  public function index()
  {
    $tickets = Ticket::all();
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
    ]);

    Ticket::create($request->all());
    //return redirect('/user');
  }


  public function show($id)
  {
    $ticket = Ticket::findOrFail($id);
    //return view('user.show', compact('user'));
  }


  public function edit($id)
  {
    $ticket = Ticket::findOrFail($id);
    //return view('user.edit', compact('user'));

  }


  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'user_id'     =>'required',
      'title'       =>'required',
      'description'       =>'required',
    ]);

    $ticket = Ticket::findOrFail($id);
    $ticket->update($request->all());

    //return redirect('/user/' . $user->id);
  }


  public function destroy($id)
  {
    $ticket = Ticket::findOrFail($id);
    $ticket->delete();

    //return redirect('/post');
  }



}
