@extends('layouts.admin')
@section('content')
    <div class="container rtl bg-light p-4 ">
        <div class="d-flex mb-4">
            <h4 class="pt-2"> فریلنسرهای سایت:</h4>
            <div class="mr-4"></div>

            {{--<form action="{{route('admin-search-user')}}" method="post">--}}
                {{--<div class="d-flex justify-content-around  ">--}}

                    {{--<input type="text" name="user_email" class="form-control w-50 mr-3" placeholder="ایمیل کاربر">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<button type="submit" class=" btn btn-outline-success ">جستجو</button>--}}
                {{--</div>--}}
            {{--</form>--}}


            <div class="d-flex align-self-start ml-4">
                <div>
                    <itm>تعداد کل فریلنسرهای تایید شده:</itm>
                    <itm>{{sizeof($accepted_freelancers)}}</itm>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="alert alert-success d-inline-block p-1">فریلنسر های تایید شده:</h5>
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">امتیاز</th>
                        <th scope="col">پروفایل</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>





                    @php($i=0)
                    @foreach($accepted_freelancers as $user)
                        @php($i++)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$user->email}}</td>
                            <td>{{$rates[$user->id]}}</td>
                            <td>
                                <form class="form-group mr-auto d-inline-block btn-outline-dange" method="post" action="{{route('admin-user-profile')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="user_id" value="{{$user->id}}">
                                    <input class="btn btn-outline-light" type="submit" value="مشاهده پروفایل">
                                </form>
                                {{--<a href="{{route('admin-user-profile',$user->id)}}" class="btn btn-outline-light">مشاهده پروفایل</a>--}}
                            </td>

                            <td>
                                @php($isAdmin = false)
                                @foreach($user->roles as $role)
                                    @if($role->name == 'super_admin')
                                        @php($isAdmin = true)
                                        @break
                                    @endif
                                @endforeach


                                @if($isAdmin == false)
                                    <form class="form-group mr-auto d-inline-block btn-outline-dange" method="post" action="{{route('admin-remove-user')}}">
                                        {{csrf_field()}}
                                        <input  type="hidden" name="user_id" value="{{$user->id}}">
                                        <input class="btn btn-outline-danger" type="submit" value="حذف">
                                    </form>
                                @endif


                                {{--<a href="" class="btn btn-outline-danger">حذف</a>--}}
                            </td>
                        </tr>

                    @endforeach







                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h5 class="alert alert-danger d-inline-block p-1">فریلنسر های تایید نشده:</h5>
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">امتیاز</th>
                        <th scope="col">پروفایل</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>


                    @php($i=0)
                    @foreach($not_accepted_freelancers as $user)
                        @php($i++)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$user->email}}</td>
                            <td>{{$rates[$user->id]}}</td>
                            <td>
                                <form class="form-group mr-auto d-inline-block btn-outline-dange" method="post" action="{{route('admin-user-profile')}}">
                                    {{csrf_field()}}
                                    <input  type="hidden" name="user_id" value="{{$user->id}}">
                                    <input class="btn btn-outline-light" type="submit" value="مشاهده پروفایل">
                                </form>
                                {{--<a href="{{route('admin-user-profile',$user->id)}}" class="btn btn-outline-light">مشاهده پروفایل</a>--}}
                            </td>

                            <td>
                                @php($isAdmin = false)
                                @foreach($user->roles as $role)
                                    @if($role->name == 'super_admin')
                                        @php($isAdmin = true)
                                        @break
                                    @endif
                                @endforeach


                                @if($isAdmin == false)
                                    <form class="form-group mr-auto d-inline-block btn-outline-dange" method="post" action="{{route('admin-remove-user')}}">
                                        {{csrf_field()}}
                                        <input  type="hidden" name="user_id" value="{{$user->id}}">
                                        <input class="btn btn-outline-danger" type="submit" value="حذف">
                                    </form>
                                @endif


                                {{--<a href="" class="btn btn-outline-danger">حذف</a>--}}
                            </td>
                        </tr>

                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection