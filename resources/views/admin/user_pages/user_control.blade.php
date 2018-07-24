@extends('layouts.admin')
@section('content')
    <div class="container rtl">
        <div class="card">
            <div class="card-header ">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item mr-auto"><a id="card-nav-profile" class="nav-link"  href="{{route('admin-user-profile')}}">پروفایل</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-ads"  class="nav-link" href="{{route('admin-user-ads')}}">آگهی ها</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-orders" class="nav-link" href="{{route('admin-user-orders')}}">سفارش ها</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-requests" class="nav-link" href="{{route('admin-user-requests')}}">درخواست ها</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-finance" class="nav-link" href="{{route('admin-user-finance')}}">امور مالی</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div id="info" class="tab-pane fade in active show">
                        @yield('user_info')
                    </div>
                </div>


            </div>
        </div>
@endsection