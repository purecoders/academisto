@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="card">
            <div class="card-header ">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="active mr-auto"><a  href="{{route('user-ads')}}">آگهی های من</a></li>
                    <li class=" mr-auto"><a href="{{route('user-orders')}}">سفارش پروژه</a></li>
                    <li class="mr-auto"><a href="{{route('user-requests')}}">انجام پروژه</a></li>
                    <li class="mr-auto"><a  href="{{route('user-cv')}}">ارسال رزومه</a></li>
                    <li class="mr-auto"><a href="{{route('user-finance')}}">امور مالی</a></li>
                    <li class="mr-auto"><a  href="{{route('user-ticket')}}">تیکت</a></li>
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
