@extends('layouts.app')
@section('content')
    <div class="container rtl">
        <div class="card">
            <div class="card-header ">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="active mr-auto"><a  href="{{route('user-ads')}}">آگهی های من</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu1">پروژه های درخواست داده شده</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu2">سفارش پروژه</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu3">ارسال رزومه</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu3">امور مالی</a></li>
                    <li class="mr-auto"><a data-toggle="tab" href="#menu3">تیکت</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active show">
                        @yield('ads')
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>منو</h3>
                        <p>یک تغییر برای تست گیت میباشد.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.</p>
                    </div>
        </div>
        </div>
    </div>
@endsection
