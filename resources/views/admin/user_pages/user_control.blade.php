@extends('layouts.admin')
@section('content')
    <div class="container rtl">
        <div class="card">
            <div id="admin-user-card-nav" class="card-header">
                <ul class="nav nav-tabs card-header-tabs">

                    <li class="nav-item mr-auto">
                        <a id="card-nav-profile" class="nav-link mt-1">
                            <form class="p-0" method="post" action="{{route('admin-user-profile')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input id="form-control-profile" class="form-control border-0 bg-light" type="submit" value="پروفایل">
                            </form>
                        </a>
                        {{--<a id="card-nav-profile" class="nav-link"  href="{{route('admin-user-profile')}}">پروفایل</a>--}}
                    </li>
                    <li class="nav-item mr-auto">
                        <a id="card-nav-ads" class="nav-link mt-1">
                            <form method="post" action="{{route('admin-user-ads')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input id="form-control-ads" class="form-control border-0 bg-light" type="submit" value="آگهی ها">
                            </form>
                        </a>
                        {{--<a id="card-nav-ads"  class="nav-link" href="{{route('admin-user-ads')}}">آگهی ها</a>--}}
                    </li>

                    <li class="nav-item mr-auto">
                        <a id="card-nav-orders" class="nav-link mt-1">
                            <form method="post" action="{{route('admin-user-orders')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input id="form-control-orders" class="form-control border-0 bg-light" type="submit" value="سفارش ها">
                            </form>
                        </a>
                        {{--<a id="card-nav-orders" class="nav-link" href="{{route('admin-user-orders')}}">سفارش ها</a>--}}
                    </li>

                    <li class="nav-item mr-auto">
                        <a id="card-nav-requests" class="nav-link mt-1">
                            <form method="post" action="{{route('admin-user-requests')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input id="form-control-requests" class="form-control border-0 bg-light" type="submit" value="درخواست ها">
                            </form>
                        </a>
                        {{--<a id="card-nav-requests" class="nav-link" href="{{route('admin-user-requests')}}">درخواست ها</a>--}}
                    </li>

                    <li class="nav-item mr-auto">
                        <a id="card-nav-finance"  class="nav-link mt-1">
                            <form method="post"
                                  action="{{route('admin-user-finance')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input id="form-control-finance" class="form-control border-0 bg-light " type="submit" value="امور مالی">
                            </form>
                        </a>
                        {{--<a id="card-nav-finance" class="nav-link" href="{{route('admin-user-finance')}}">امور مالی</a>--}}
                    </li>


                </ul>
            </div>
            <div class="card-body mt-2">
                <div class="tab-content">
                    <div id="info" class="tab-pane fade in active show">
                        @yield('user_info')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection