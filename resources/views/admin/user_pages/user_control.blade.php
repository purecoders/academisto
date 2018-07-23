@extends('layouts.admin')
@section('content')
    <div class="container rtl">
        <div class="card">
            <div class="card-header ">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="active mr-auto"><a  href="{{route('admin-user-profile')}}">پروفایل</a></li>
                    <li class="active mr-auto"><a  href="{{route('admin-user-ads')}}">آگهی ها</a></li>
                    <li class=" mr-auto"><a href="{{route('admin-user-orders')}}">سفارش ها</a></li>
                    <li class="mr-auto"><a href="{{route('admin-user-requests')}}">درخواست ها</a></li>
                    <li class="mr-auto"><a href="{{route('user-finance')}}">امور مالی</a></li>
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