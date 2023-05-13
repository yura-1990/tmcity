<!DOCTYPE HTML>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset("/images/favicon.png") }}">
    <title> TMSITI </title>
    <!-- GOOGLE FONTS -->
    <link href="{{ asset("../../css?family=Montserrat:500,600,700%7COpen+Sans:300,400") }}" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset("/css/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{asset("/css/font-awesome.min.css")}}">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{ asset("/revolution/css/settings.css") }}">
    <link rel="stylesheet" href="{{ asset("/revolution/css/layers.css") }}">
    <link rel="stylesheet" href="{{ asset("/revolution/css/navigation.css") }}">
    <!-- ARCHIVES CSS -->
    <link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/css/menu.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/aos2.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/slick.css") }}">
    <link href="{{ asset("/css/animate.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/css/lightcase.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/owl.carousel.min.css") }}">
    <link href="{{ asset("/css/menu.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/css/styles.css") }}">
</head>

<body class="homepage-1 int_white_bg">
<!-- Wrapper -->
<div id="wrapper">
    <header id="header-container" class="header" style="background-color:#001A57;">
        <!-- Header -->
        <div id="header" class="bottom">
            <div class="container">
                <!-- Left Side Content -->
                <div class="left-side" style="width: 100%;">
                    <!-- Logo -->
                    <div class="col-md-auto" style="margin-right:30px;float:left;display:inline-block;margin-top:1px;float:left;">
                        <a href="/" style="color:#ffffff;text-decoration:none;"><img src="{{ asset("/images/mobile.png") }}" alt="" style="width: 20px;color:#ffffff;text-decoration:none;"> +998 71 244-51-84 </a>
                    </div>

                    <div id="logo" class="col-md-auto">
                        <a href="/" style="color:#ffffff;text-decoration:none;"><img src="{{ asset("/images/email.png") }}" alt="" style="width: 20px;"> standart@standart.uz </a>
                    </div>

                    <nav id="navigation-n" class="style-0" >
                        <ul >
                            <li><a href=""> Biz bilan bog‘laning | </a></li>
                            <li><a href=""> Ijtimoiy tarmoqlar: </a></li>
                            <li><a href=""><img src="{{ asset("/images/tg.png") }}"></a></li>
                            <li><a href=""><img src="{{ asset("/images/insta.png") }}"></a></li>
                            <li><a href=""><img src="{{ asset("/images/fb.png") }}"></a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->
            </div>
            <ul class="d-flex">
                @foreach ($locales as $locale)
                    @if($locale == app()->getLocale())
                        <li><a class="text-danger mx-2" href="{{ url("language/$locale") }}">{{ $locale }}</a></li>
                    @else
                        <li><a class="text-white mx-2" href="{{ url("language/$locale") }}">{{ $locale }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- Header / End -->
    </header>


    <header id="header-container" class="header">
        <!-- Header -->
        <div id="" class="head-tr bottom">
            <div class="container">
                <!-- Left Side Content -->
                <div class="navbar-menu d-flex align-items-center">
                    <!-- Logo -->
                    <div id="" class="">
                        <a href="/" class="d-flex align-items-center text-decoration-none">
                            <img src="{{ Voyager::image($logo->logo_image) }}">
                            <p class="logo-title">{{ $logo->logo_title_uz }}</p>
                        </a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="" class="style-1 head-tr">
                        <ul id="responsive">
                            @foreach($homeMenus as $homeMenu )
                                <li class="drop-down d-flex align-items-center">
                                    <a class="text-uppercase navbar-list font-weight-bold" href="{{ route($homeMenu->url) }}">
                                        @switch(app()->currentLocale())
                                            @case('uz')
                                                {{$homeMenu->menu_name_uz}}
                                                @break
                                            @case('oz')
                                                {{$homeMenu->menu_name_oz}}
                                                @break
                                            @case('ru')
                                                {{$homeMenu->menu_name_ru}}
                                                @break
                                            @case('en')
                                                {{$homeMenu->menu_name_en}}
                                                @break
                                        @endswitch
                                    </a>
                                    <ul class="p-0 navbar-link">
                                        @if($homeMenu->homeMenuItems->count()>0)
                                            @foreach($homeMenu->homeMenuItems as $item)
                                                <li class="drop-link">
                                                    <a href="{{ route($item->url) }}" class="drop-link">
                                                        @switch(app()->currentLocale())
                                                            @case('uz')
                                                                {{$item->title_uz}}
                                                                @break
                                                            @case('oz')
                                                                {{$item->title_oz}}
                                                                @break
                                                            @case('ru')
                                                                {{$item->title_ru}}
                                                                @break
                                                            @case('en')
                                                                {{$item->title_en}}
                                                                @break
                                                        @endswitch
                                                    </a>

                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    {{--<div class="clearfix"></div>--}}
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->
    </header>
    {{--<div class="clearfix"></div>--}}

    @include('home.header')

    @yield('content')

    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer bg-white-10">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="netabout">
                            <a href="" class="logo">
                                <img src="{{asset("/images/logo2.png")}}" alt="netcom">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laborios.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3> Institut </h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href=""> Rahbariyat </a></li>
                                    <li><a href=""> Tuzilma </a></li>
                                    <li><a href=""> Me'yoriy hujjatlar </a></li>
                                    <li><a href=""> Yangiliklar </a></li>
                                    <li class="no-mgb"><a href=""> Ochiq ma'lumotlar </a></li>
                                </ul>
                                <ul class="nav-right">
                                    <li><a href=""> Xizmatlar </a></li>
                                    <li><a href=""> Laboratoriya </a></li>
                                    <li><a href=""> O'quv markazi </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
                            <h3> Xizmatlar </h3>
                            <div class="twitter-widget contuct">
                                <div class="twitter-area">
                                    <div class="single-item">
                                        <div class="text">
                                            <h5><a href="#"> Standartlar reestri </a> </h5>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="text">
                                            <h5><a href="#"> Klassifikator </a></h5>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="text">
                                            <h5><a href="#"> Kalkulyator </a></h5>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="text">
                                            <h5><a href="#"> Lug‘at </a></h5>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="text">
                                            <h5><a href="#"> Kompleks Laboratoriya </a></h5>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="text">
                                            <h5><a href="#"> O‘quv markazi </a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="newsletters">
                            <h3> Biz haqimizda </h3>
                            <p>Toshkent shahar, Shayxontohur tumani, Abay ko’chasi 6A-Bino</p>
                        </div>

                        <div class="newsletters">
                            <p>Phone : + 998 71 244 51 84 <br>
                                Email : standart@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container-fluid">
                <p> Qurilishda texnik me’yorlash va standartlashtirish ilmiy-tadqiqot instituti| Rasmiy sayt ma’lumotlaridan havola berish orqali foylanish mumkin <br>
                    Barcha huquqlar himoyalangan © 2023 </p>
            </div>
        </div>
    </footer>

    <a data-scroll="" href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="{{ asset("/js/jquery.min.js") }}"></script>
    <script src="{{ asset("/js/tether.min.js") }}"></script>
    <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/js/mmenu.min.js") }}"></script>
    <script src="{{ asset("/js/mmenu.js") }}"></script>
    <script src="{{ asset("/js/aos.js") }}"></script>
    <script src="{{ asset("/js/aos2.js") }}"></script>
    <script src="{{ asset("/js/slick.min.js") }}"></script>
    <script src="{{ asset("/js/slick.js") }}"></script>
    <script src="{{ asset("/js/jquery.easing.min.js") }}"></script>
    <script src="{{ asset("/js/smooth-scroll.min.js") }}"></script>
    <script src="{{ asset("/js/typed.min.js") }}"></script>
    <script src="{{ asset("/js/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("/js/lightcase.js") }}"></script>
    <script src="{{ asset("/js/owl.carousel.js") }}"></script>
    <script src="{{ asset("/js/jquery.waypoints.min.js") }}"></script>

    <script>
        $('.home5-right-slider').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            rtl: false,
            autoplayHoverPause: false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480: {
                    items: 1,
                    center: false
                },
                520: {
                    items: 2,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 5
                },
                1366: {
                    items: 5
                },
                1400: {
                    items: 5
                }
            }
        });

    </script>

    <script>
        $(window).on('scroll load', function() {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });

    </script>

    <script>
        var typed = new Typed('.typed', {
            strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
            smartBackspace: false,
            loop: true,
            showCursor: true,
            cursorChar: "|",
            typeSpeed: 50,
            backSpeed: 30,
            startDelay: 800
        });

    </script>

    <!-- Slider Revolution scripts -->
    <script src="{{ asset("/revolution/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.carousel.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.parallax.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script src="{{ asset("/revolution/js/extensions/revolution.extension.video.min.js") }}"></script>

    <!-- MAIN JS -->
    <script src="{{asset("/js/script.js")}}"></script>

</div>
<!-- Wrapper / End -->
</body>

</html>
