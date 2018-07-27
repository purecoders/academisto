<?php

namespace App\Http\Controllers;

use App\Ticket;
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
