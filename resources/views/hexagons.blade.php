<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/hexagons.css">
    <title>Hexagons</title>
</head>
<body>

<div id="background"></div>
<div class="container text-center">
    <div id="myHexGrid">
        <div class="hexCrop ">
            <div class="hexGrid  pt-5">
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <a class="hex hover-able-hex" href="{{route('projects')}}" style="text-decoration: none">
                    <div>
                        پروژه ها
                    </div>
                </a>
                <a class="hex hover-able-hex" href="{{route('ads')}}" style="text-decoration: none">
                    <div>
                        آگهی ها
                    </div>
                </a>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <a class="hex hover-able-hex" href="{{route('register')}}" style="text-decoration: none">
                <div>
                    ثبت نام
                </div>
                </a>
                <a class="hex hover-able-hex" href="{{route('login')}}" style="text-decoration: none">
                <div >
                    ورود
                </div>
                </a>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
            </div>
        </div>
        <div id="hex3" class="main-hexagon-wrapper">
            <div id="color1" class="main-hexagon">
                <img class="logo " src="assets/img/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<h2 class="slogan">آکادمیستو پلی بین کار و تحصیل</h2>

<ul class="fixed-top d-inline-block rtl mt-4 mr-2 first-page-links p-0 home-list-item-wrapper">
    <li> <img class="list-item-image mr-2" src="{{asset('assets/img/bullot.png')}}" alt=""><a class="home-page-links" href="{{route('register')}}">ثبت نام</a></li>
    <li><img class="list-item-image mr-2" src="{{asset('assets/img/bullot.png')}}" alt=""><a class="home-page-links" href="{{route('login')}}">ورود</a></li>
</ul>

<ul class="fixed-bottom d-inline-block rtl mb-4 mr-2 first-page-links p-0 home-list-item-wrapper">
    <li><img class="list-item-image mr-2" src="{{asset('assets/img/bullot.png')}}" alt=""><a class="home-page-links" href="{{route('register')}}">درباره ما</a></li>
    <li><img class="list-item-image mr-2" src="{{asset('assets/img/bullot.png')}}" alt=""><a class="home-page-links" href="{{route('register')}}">تماس با ما</a></li>
</ul>



</body>
</html>