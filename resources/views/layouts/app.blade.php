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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user-panel') }}">پنل کاربری من</a>
                    </li>
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
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

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
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
    $(document).ready(function () {

        //user card panel tab active class
        var url = window.location.href;
        if (url.includes("/user")) {
            if (url.includes("ads")) {
                document.getElementById('card-nav-ads').classList.add('active')
            }
            if (url.includes("requests")) {
                document.getElementById('card-nav-do').classList.add('active')
            }
            if (url.includes("orders")) {
                document.getElementById('card-nav-orders').classList.add('active')
            }
            if (url.includes("cv")) {
                document.getElementById('card-nav-cv').classList.add('active')
            }
            if (url.includes("finance")) {
                document.getElementById('card-nav-finance').classList.add('active')
            }
            if (url.includes("ticket")) {
                document.getElementById('card-nav-ticket').classList.add('active')
            }
        }
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
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                992: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 1,
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
        var text = document.getElementById('chat-text');
        var chatContaienr = document.querySelector('#chat');
        if (text.value == "") {
            return false
        }
        var dump = text.value.toString().split(' ').join('');
        if (dump == '') {
            return false;
        }
        var t = $("script[type='text/x-custom-template']")
        container = $('<div/>').html(t.html())
        var newtext = "<p>" + text.value + "</p>"
        container.find('p').replaceWith(newtext)
        var temp = t.html(container.html())
        $('#chat').append(temp.html());
        document.getElementById('chat-text').value = "";
        chatContaienr.scrollTop = chatContaienr.scrollHeight;
    }

    function sendRequest(projectId) {
        document.getElementById('modal-project-id').value = projectId;
    }
</script>
<script id="hidden-template" type="text/x-custom-template">
    <div class="chat-view d-flex w-50">
        <div class="d-flex flex-column  m-1">
            <i class="fa fa-user img-chat-view"></i>
            <span>کاربر</span>
        </div>
        <p class="ml-1">
        </p>
    </div>
</script>
<script>
    $(document).ready(function () {
        var uniSelect = document.getElementById('uni-select');
        var citySelect = document.getElementById('cities');
        var filterForm = document.getElementById('filter-form');
        uniSelect.onchange = function () {
            citySelect.value = "";
        }
        citySelect.onchange = function () {
            uniSelect.value = "";
        }
        try {
            filterForm.onsubmit = function () {
                if (!uniSelect.value && !citySelect.value) {
                    alert("لطفا با یک مورد فیلتر کنید");
                    return false;
                }
                if (uniSelect.value && citySelect.value) {
                    alert("لطفا بین دانشگاه و شهر فقط یکی را انتخاب کنید!");
                    return false;
                }
            };
        } catch (e) {
            console.log(e);
        }
        $('#state').change(function (e) {
            ClearOptions();
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{url('get-city')}}",
                method: 'post',
                dataType: "json",
                data: {
                    state_id: $('#state').val()
                },
                success: function (result) {
                    for (var i = 0; i < result.length; i++) {
                        $('#cities').append($('<option>', {
                            value: result[i]["id"],
                            text: result[i]["name"]
                        }));
                    }
                },
                error: function (e) {
                    console.log(e.responseText);
                }
            })
        });
        $('#univercity').change(function () {
            if ($(this).val() != 0) {

                $('#state').val(0);
                $('#cities').val(0);
            }

        });
        $('#cities').change(function () {
            if ($(this).val() != 0) {
                $('#univercity').val(0);
            }
        });

    });

    function ClearOptions() {
        var selectObj = $('#cities');
        selectObj.find('option').remove().end().append('<option value="0"></option>');
    }
</script>
</html>