<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap -->
    <link href="{{asset('CMS/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('CMS/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('CMS/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('CMS/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('CMS/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('CMS/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('CMS/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('CMS/build/css/custom.min.css')}}" rel="stylesheet">




    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('Front/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Front/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>

                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>

                </div>
            </div>
            <div class="ht-right">
                <a href="{{route('login')}}" class="login-panel"><i class="fa fa-user"></i>Login</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-lg-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <form action="{{route('Front.search')}}" method="post" class="input-group">
                            @csrf
                            <input type="text" name="search" placeholder="What do you need?">
                            <button type="button"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-lg-3">
                    <ul class="nav-right">

                        <li class="cart-icon"><a href="{{route('Front.shoppingcart')}}">
                                <i class="fa fa-shopping-bag"></i>

                            </a>

                        </li>
                        <li class="cart-price"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <center>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="{{route('Front.index')}}">Home</a></li>
                    <li><a href="{{route('Front.shop')}}">Shop</a></li>
                   
                    <li><a href="./contact.html">Contact</a></li>

                </ul>
            </nav>
            </center>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->

@yield('content')



<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="img/footer-logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('Front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('Front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Front/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('Front/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('Front/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('Front/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('Front/js/jquery.dd.min.js')}}"></script>
<script src="{{asset('Front/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('Front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('Front/js/main.js')}}"></script>



<!-- jQuery -->
<script src="{{asset('CMS/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('CMS/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('CMS/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('CMS/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('CMS/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('CMS/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('CMS/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('CMS/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('CMS/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('CMS/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('CMS/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('CMS/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('CMS/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('CMS/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('CMS/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('CMS/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('CMS/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('CMS/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('CMS/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('CMS/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('CMS/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('CMS/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('CMS/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('CMS/build/js/custom.min.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
