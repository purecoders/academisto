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
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel rtl">
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
                        <a class="nav-link" href="{{ route('ads') }}">آگهی ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects') }}">پروژه ها</a>
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
  });
  function send(e) {
    var text=document.getElementById('chat-text');
    if(text.value==""){
      return false
    }
    var dump=text.value.toString().split(' ').join('');
    if(dump==''){
      return false;
    }
    //  var template = $('#hidden-template').html();
    // // template.find('p').value=text.value;
    //  container = $('<div/>').html(template);
    //  container.find('p').value=text.value;
    //  template.html(container.html())
    var t = $("script[type='text/x-custom-template']")
    container = $('<div/>').html(t.html())
    var newtext="<p>"+text.value+"</p>"
    container.find('p').replaceWith(newtext)
    var temp=t.html(container.html())
    console.log($("script[type='text/x-custom-template']").html())
    $('#chat').append(temp.html());
    document.getElementById('chat-text').value="";
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
    document.getElementById('project_id').value=e;
  }
</script>
<script id="hidden-template" type="text/x-custom-template">
    <div class="chat-view d-flex">
        <div class="d-flex flex-column  m-1">
            <i class="fa fa-user img-chat-view"></i>
            <span>کاربر</span>
        </div>
        <p class="ml-1">
        </p>
    </div>
</script>
</html>