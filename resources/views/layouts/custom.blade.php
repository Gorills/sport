<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>



    <link rel="stylesheet" href="{{URL::asset('css/site.css') }}">
    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,700|Montserrat:400,600,700|Roboto+Slab:300,400,700|Rock+Salt&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap&subset=cyrillic" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />
    <meta property="og:image" content="" />
    <meta name="theme-color" content="#30254d">
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('twitter:description')" />
    <meta name="twitter:title" content="@yield('twitter:title')" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <p class="header__logo-title">Fantastic Sport</p>
                <p class="header__logo-subtitle">champions uniform</p>
            </div>


            <div class="header__nav">
                <a href="#" class="header__link">Главная</a>
                <a href="#" class="header__link">Каталог</a>
                <a href="#" class="header__link">Акции</a>
                <a href="#" class="header__link">Магазин</a>
            </div>
        </div>
    </div>
</header>
<div class="toggle-menu" id="menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>



@yield('content')



<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__logo">
                <p class="footer__logo-title">Fantastic Sport</p>
                <p class="footer__logo-subtitle">champions uniform</p>
            </div>
            <div class="footer__nav-wrapper">

                <div class="footer__nav">
                    <a class="footer__link" href="#">Каталог</a>
                    <a class="footer__link" href="#">Акции</a>
                    <a class="footer__link" href="#">Магазин</a>
                    <a class="footer__link" href="#">Оплата</a>
                    <a class="footer__link" href="# ">Толстовки Джордан</a>
                </div>
                <div class="footer__options-wrapper">
                    <p class="footer__categories">Дополнительные категории:</p>

                    <div class="footer__options">
                        <a href="#" class="footer__options-link">ВМХ</a>
                        <a href="#" class="footer__options-link">Трюковые самокаты</a>
                        <a href="#" class="footer__options-link">Аксессуары</a>
                        <a href="#" class="footer__options-link">Носки</a>
                        <a href="#" class="footer__options-link">Сумки/рюкзаки</a>
                        <a href="#" class="footer__options-link">Брюки</a>
                        <a href="#" class="footer__options-link">Брюки</a>
                        <a href="#" class="footer__options-link">Мячи</a>
                    </div>

                </div>


            </div>


        </div>
    </div>
</footer>




<script>
    $(".menu-btn").click(function(e) {
        e.preventDefault();
        $(this).toggleClass('menu-btn_active');
        $(".header").toggleClass('header_active');

    })
    $(".header__link").click(function(e) {
        // e.preventDefault();
        $(".menu-btn").removeClass("menu-btn_active");
        $(".header").removeClass("header_active");
        $(".header__link").toggleClass('header_active');
    })
</script>

<style src="{{ URL::asset('js/app.js') }}"></style>
</body>
</html>
