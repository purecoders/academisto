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
        <div class="hexCrop d-none d-sm-block">
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
                <div class="hex hover-able-hex">
                    پروژه ها
                </div>
                <div class="hex hover-able-hex">
                    آگهی ها
                </div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex"></div>
                <div class="hex hover-able-hex">
                    ثبت نام
                </div>
                <div class="hex hover-able-hex">
                    ورود
                </div>
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
<ul class="fixed-top d-inline-block rtl mt-4 mr-2 first-page-links">
    <li><a href="{{route('register')}}">ثبت نام</a></li>
    <li><a href="{{route('register')}}">ورود</a></li>
</ul>

<ul class="fixed-bottom d-inline-block rtl mb-4 mr-2 first-page-links">
    <li>درباره ما</li>
    <li>تماس با ما</li>
</ul>



</body>
</html>