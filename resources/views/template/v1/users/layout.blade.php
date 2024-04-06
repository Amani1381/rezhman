<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Megapod Template">
    <meta name="keywords" content="Megapod, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مگا پاد | صفحه اصلی</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/v1/users/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/v1/users/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/v1/users/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/v1/users/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/v1/users/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/v1/users/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/v1/users/css/style.css')}}" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__search">
        <form action="#">
            <input type="text" placeholder="کلمه کلیدی + اینتر..">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="{{asset('assets/v1/users/img/logo.png')}}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{asset('assets/v1/users/img/logo.png')}}" alt=""></a>
                </div>
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">خانه</a></li>
                        <li><a href="./about.html">درباره ما</a></li>
                        <li><a href="./episodes.html">پادکست ها</a></li>
                        <li><a href="#">صفحات</a>
                            <ul class="dropdown">
                                <li><a href="./episodes-details.html">مشخصات پادکست</a></li>
                                <li><a href="./blog.html">بلاگ</a></li>
                                <li><a href="./blog-details.html">مشخصات بلاگ</a></li>
                            </ul>
                        </li>
                        <li><a href="./contact.html">ارتباط با ما</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="header__left">
                    <div class="header__left__search">
                        <form action="#">
                            <input type="text" placeholder="کلمه کلیدی + اینتر..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="header__left__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
@yield('content')
<!-- Footer Section Begin -->
<footer class="footer set-bg" data-setbg="{{asset('assets/v1/users/img/footer-bg.jpg')}}">
    <div class="container">
        <div class="footer__subscriber">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer__subscriber__text">
                        <h3>عضویت رایگان در خبرنامه!</h3>
                        <p>جهت دریافت جدیدترین پادکست ها مشترک خبرنامه ما شوید.</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <form action="#" class="footer__subscriber__form">
                        <input type="text" placeholder="آدرس ایمیل خود را وارد کنید">
                        <button type="submit" class="site-btn">عضویت</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="footer__widget">
                    <div class="footer__logo">
                        <a href="#"><img src="{{asset('assets/v1/users/img/logo.png')}}" alt=""></a>
                    </div>
                    <p class="footer__copyright__text">© کپی رایت
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        - تمامی حقوق محفوظ است.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="footer__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('assets/v1/users/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/v1/users/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/v1/users/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/v1/users/js/mixitup.min.js')}}"></script>
<script src="{{asset('assets/v1/users/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/v1/users/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/v1/users/js/main.js')}}"></script>

<!-- Music Plugin -->
<script src="js/jquery.jplayer.min.js"></script>
<script src="js/jplayerInit.js"></script>
</body>

</html>

