@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="card">
            <div class="card-header ">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item mr-auto"><a id="card-nav-ads" class="nav-link" href="{{route('user-ads')}}">آگهی های من</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-orders" class="nav-link"  href="{{route('user-orders')}}">سفارش پروژه</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-do" class="nav-link" href="{{route('user-requests')}}">انجام پروژه</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-cv" class="nav-link" href="{{route('user-cv')}}">پروفایل و رزومه</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-finance" class="nav-link" href="{{route('user-finance')}}">امور مالی</a></li>
                    <li class="nav-item mr-auto"><a id="card-nav-ticket" class="nav-link" href="{{route('user-ticket')}}">تیکت</a></li>
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