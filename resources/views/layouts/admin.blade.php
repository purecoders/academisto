<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
{{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
{{--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">--}}

<!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/secondStyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel rtl">
        <div class="container">
            <a class="navbar-brand testt" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a id="nav-ads" class="nav-link" href="{{ route('admin-ads') }}">آگهی ها</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-projects" class="nav-link" href="{{ route('admin-projects') }}">پروژه ها</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-users" class="nav-link" href="{{ route('admin-users') }}">کاربران</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-freelancers" class="nav-link" href="{{ route('admin-freelancers') }}">فریلنسرها</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-reports" class="nav-link" href="{{ route('admin-reports') }}">گزارش ها</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-finance" class="nav-link" href="{{ route('admin-finance') }}">امور مالی</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-ticket" class="nav-link" href="{{ route('admin-tickets') }}">تیکت ها</a>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">ورود</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}   <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    خروج
                                </a>
                                <a class="dropdown-item" href="{{ route('user-panel') }}">
                                    حساب کاربری
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item float-left">
                            <span  class="nav-link border-bottom">Admin</span>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
<script src="{{asset('assets/js/bundle.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script>
  $(document).ready(function() {
    //for swipe on mobile
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 10,
      // init: false,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1200: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 5,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 5,
        },
        576: {
          slidesPerView: 1,
          spaceBetween: 2,
        }
      }
    });
    var url = window.location.href;
    if(url.includes("/admin/ads")){
      document.getElementById('nav-ads').classList.add('active')
    }
    if(url.includes("/admin/projects")){
      document.getElementById('nav-projects').classList.add('active')
    }
    if(url.includes("/admin/projects")){
      document.getElementById('nav-projects').classList.add('active')
    }
    if(url.includes("/admin/user")){
      document.getElementById('nav-users').classList.add('active')
      if(url.includes("profile")){document.getElementById('card-nav-profile').classList.add('active')}
      if(url.includes("ads")){document.getElementById('card-nav-ads').classList.add('active')}
      if(url.includes("orders")){document.getElementById('card-nav-orders').classList.add('active')}
      if(url.includes("requests")){document.getElementById('card-nav-requests').classList.add('active')}
      if(url.includes("finance")){document.getElementById('card-nav-finance').classList.add('active')}
    }
    if(url.includes("/admin/freelancers")){
      document.getElementById('nav-freelancers').classList.add('active')
    }
    if(url.includes("/admin/reports")){
      document.getElementById('nav-reports').classList.add('active')
    }
    if(url.includes("/admin/finance")){
      document.getElementById('nav-finance').classList.add('active')
    }
    if(url.includes("/admin/ticket")){
      document.getElementById('nav-ticket').classList.add('active')
    }
  });
  function send(e) {
    var text=document.getElementById('chat-text');
    var chatContaienr=document.querySelector('#chat');
    if(text.value==""){
      return false
    }
    var dump=text.value.toString().split(' ').join('');
    if(dump==''){
      return false;
    }
    var t = $("script[type='text/x-custom-template']")
    container = $('<div/>').html(t.html())
    var newtext="<p>"+text.value+"</p>"
    container.find('p').replaceWith(newtext)
    var temp=t.html(container.html())
    $('#chat').append(temp.html());
    document.getElementById('chat-text').value="";
    chatContaienr.scrollTop=chatContaienr.scrollHeight;
  }
  var uniSelect=document.getElementById('uni-select');
  var citySelect=document.getElementById('city-select');
  var filterForm=document.getElementById('filter-form');
  uniSelect.onchange=function () {
    citySelect.value="";
  }
  citySelect.onchange=function () {
    uniSelect.value="";
  }
  filterForm.onsubmit=function () {
    if(!uniSelect.value&&!citySelect.value){
      alert("لطفا با یک مورد فیلتر کنید");
      return false;
    }
    if(uniSelect.value&&citySelect.value){
      alert("لطفا بین دانشگاه و شهر فقط یکی را انتخاب کنید!");
      return false;
    }
  };
  function sendRequet(e){
    //e is project id
    document.getElementById('request-form').action="Your route"+e;
  }
</script>
<script id="hidden-template" type="text/x-custom-template">
    <div class="chat-view d-flex w-50">
        <div class="d-flex flex-column  m-1">
            <i class="fa fa-user img-chat-view"></i>
            <span>ادمین</span>
        </div>
        <p class="ml-1">
        </p>
    </div>
</script>
</html>