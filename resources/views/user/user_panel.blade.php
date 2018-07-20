@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="card">
            <div class="card-header ">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="active mr-auto"><a  href="{{route('user-ads')}}">آگهی های من</a></li>
                    <li class="mr-auto"><a href="{{route('user-orders')}}">سفارش پروژه</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu2">انجام پروژه</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu3">ارسال رزومه</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu3">امور مالی</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu3">تیکت</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div id="ads" class="tab-pane fade in active show">
                        @yield('ads')
                    </div>
                    <div id="order_project" class="tab-pane fade">
                        @yield ('orders')
                    </div>
                    <div id="do_project" class="tab-pane fade">
                        @yield('do_project')
                    </div>
                    <div id="send_cv" class="tab-pane fade">
                        @yield('cv')
                    </div>
        </div>
        </div>
    </div>
@endsection
