@extends('layouts.admin')
@section('content')
    <div class="container rtl">
        <div class="row">
            <div class="col-sm-3 p-0">
                <div class="admin-chat-view-user-header p-2">
                    <h4>کاربران</h4>
                </div>
                <div class="d-flex flex-column admin-chat-view-sidebar">
                    <div class="rtl">



                        @foreach($users_tickets as $user_ticket)

                            <a href="{{route('admin-user-tickets', $user_ticket['user']['id'])}}">
                                <div class="admin-chat-view-user p-1 text-center bg-dark border-bottom border-info">
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>
                                        <h5 class="admin-chat-view-user-name mr-auto ">{{$user_ticket['user']['email']}}</h5>
                                        @if($user_ticket['new_tikects_count'] > 0)
                                            <span class="btn-danger" style="padding: 10px;margin: 10px">{{$user_ticket['new_tikects_count']}}</span>
                                        @else
                                            <span  style="padding: 10px;margin: 10px"></span>
                                        @endif
                                        <div class="d-flex flex-column align-items-end justify-content-around">
                                            {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                            <form class="btn btn-outline-secondary" action="{{route('admin-user-profile')}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="user_id" value="{{$user_ticket['user']['id']}}">
                                                <input class="btn btn-outline-secondary" type="submit" value="پروفایل">

                                            </form>
                                            <span class="text-muted mt-auto">{{$user_ticket['last_ticket_date']}} </span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        @endforeach


                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">محسن</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">علی</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">امین</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">امید</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">مهدی</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">پویا</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">پویا</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">پویا</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">پویا</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="admin-chat-view-user p-1 text-center bg-dark border-bottom  border-info">--}}
                            {{--<div class="d-flex align-items-center">--}}
                                {{--<i class="fa fa-user-circle admin-chat-view-user-img mr-2"></i>--}}
                                {{--<h5 class="admin-chat-view-user-name mr-auto ">پویا</h5>--}}
                                {{--<div class="d-flex flex-column align-items-end justify-content-around">--}}
                                    {{--<a href="#" class="btn btn-outline-secondary">پروفایل</a>--}}
                                    {{--<span class="text-muted mt-auto">12:34 PM </span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}



                    </div>


                </div>
            </div>
            <div class="col-sm-9 p-0">
                <div class="admin-chat-view-user-header p-2 ml-1">
                    <h4>تیکت ها</h4>
                </div>
                <div class="card-body bg-dark ml-1">
                    <div id="chat">


                        @foreach($special_user_tickets as $ticket)
                            @if($ticket->is_user_send == 0)
                        <div class="chat-view d-flex w-50">
                            <div class="d-flex flex-column  m-1 ">
                                <i class="fa fa-user img-chat-view"></i>
                                <b><span>ادمین</span></b>
                            </div>
                            <p class="ml-1">
                                {{$ticket->text}}
                            </p>
                        </div>

                            @else



                        <div class="chat-view d-flex  bg-info w-50 ml-auto ">
                            <p class=" mr-auto">
                                {{$ticket->text}}
                            </p>
                            <div class="d-flex flex-column">
                                <i class="fa fa-user img-chat-view m-1"></i>
                                <b><span>{{$ticket->user->name}}</span></b>
                            </div>
                        </div>

                            @endif


                        @endforeach


                        {{--<div class="chat-view d-flex  bg-info w-50 ml-auto ">--}}
                            {{--<p class=" mr-auto">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده--}}
                                {{--از طراحان گرافیک است.</p>--}}
                            {{--<div class="d-flex flex-column">--}}
                                {{--<i class="fa fa-user img-chat-view m-1"></i>--}}
                                {{--<span>کاربر</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="chat-view d-flex  bg-info w-50 ml-auto ">--}}
                            {{--<p class=" mr-auto">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده--}}
                                {{--از طراحان گرافیک است.</p>--}}
                            {{--<div class="d-flex flex-column">--}}
                                {{--<i class="fa fa-user img-chat-view m-1"></i>--}}
                                {{--<span>کاربر</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}





                    </div>
                </div>
                @if($special_user_tickets !== null && $special_user_tickets!= [])
                <div class="card-footer d-flex ml-1 bg-dark">
                    <form  action="{{route('admin-send-ticket')}}" method="post">
                        {{csrf_field()}}
                        <textarea name="text" id="chat-text" type="text" class="form-control mr-5" rows="3"
                              placeholder="متن..."></textarea>

                        <input type="hidden" name="user_id" value="{{$ticket->user->id}}">
                        <button class="btn btn-primary align-self-center " type="submit"> ارسال</button>

                    </form>

                </div>
               @endif
            </div>
        </div>
    </div>
@endsection