<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NoName</title>
    <link rel="icon" href="{{asset('logo/noname.png')}}" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--        -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!---->

{{--    <style>--}}
{{--        body {--}}

{{--            background: rgba(191, 191, 210, 0.2) url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4"%3E%3Cpath fill="%239C92AC" fill-opacity="0.4" d="M1 3h1v1H1V3zm2-2h1v1H3V1z"%3E%3C/path%3E%3C/svg%3E');--}}
{{--        }--}}
{{--    </style>--}}
<!--        -->

    <style>
        /footer/
        ul {
            margin: 0px;
            padding: 0px;
        }
        .footer-section {
            background: #232121;
            position: relative;
        }
        .footer-cta {
            border-bottom: 1px solid #373636;
        }
        .single-cta i {
            color: #f60257;
            font-size: 30px;
            float: left;
            margin-top: 8px;
        }
        .cta-text {
            padding-left: 15px;
            display: inline-block;
        }
        .cta-text h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 2px;
        }
        .cta-text span {
            color: #757575;
            font-size: 15px;
        }
        .footer-content {
            position: relative;
            z-index: 2;
        }
        .footer-pattern img {
            position: absolute;
            top: 0;
            left: 0;
            height: 330px;
            background-size: cover;
            background-position: 100% 100%;
        }
        .footer-logo {
            margin-bottom: 30px;
        }
        .footer-logo img {
            max-width: 200px;
        }
        .footer-text p {
            margin-bottom: 14px;
            font-size: 14px;
            color: #7e7e7e;
            line-height: 28px;
        }
        .footer-social-icon span {
            color: #fff;
            display: block;
            font-size: 20px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
        }
        .footer-social-icon a {
            color: #fff;
            font-size: 16px;
            margin-right: 15px;
        }
        .footer-social-icon i {
            height: 40px;
            width: 40px;
            text-align: center;
            line-height: 38px;
            border-radius: 50%;
        }
        .facebook-bg{
            background: #3B5998;
        }
        .twitter-bg{
            background: #55ACEE;
        }
        .google-bg{
            background: #f60257;
        }
        .footer-widget-heading h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 40px;
            position: relative;
        }
        .footer-widget-heading h3::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -15px;
            height: 2px;
            width: 50px;
            background: #f60257;
        }
        .footer-widget ul li {
            display: inline-block;
            float: left;
            width: 50%;
            margin-bottom: 12px;
        }
        .footer-widget ul li a:hover{
            color: #f60257;
        }
        .footer-widget ul li a {
            color: #878787;
            text-transform: capitalize;
        }
        .subscribe-form {
            position: relative;
            overflow: hidden;
        }
        .subscribe-form input {
            width: 100%;
            padding: 14px 28px;
            background: #2E2E2E;
            border: 1px solid ;
            color: #fff;
        }
        .subscribe-form button {
            position: absolute;
            right: 0;
            background: #f60257;
            padding: 13px 20px;
            border: 1px solid #f60257;
            top: 0;
        }
        .subscribe-form button i {
            color: #fff;
            font-size: 22px;
            transform: rotate(-6deg);
        }
        .copyright-area{
            background: #343a40;
            padding: 25px 0;
        }
        .copyright-text p {
            margin: 0;
            font-size: 14px;
            color: #878787;
        }
        .copyright-text p a{
            color: #f60257;
        }
        .footer-menu li {
            display: inline-block;
            margin-left: 20px;
        }
        .footer-menu li:hover a{
            color: #f60257;
        }
        .footer-menu li a {
            font-size: 14px;
            color: #878787;
        /nav/
        }
        @import url("https://fonts.googleapis.com/css?family=Titillium+Web");
        * {
            font-family: "Titillium Web", sans-serif;
        }
        .navbar .navbar-brand {
            font-size: 30px;
        }
        .navbar .nav-item {
            padding: 10px 20px;
        }
        .navbar .nav-link {
            color:white;
            font-size: 20px;
            margin-left: 10px;
        }
        .navbar .nav-link:hover {
            background: black;

        }
        .fa-bars {
            color: #007bff;
            font-size: 30px;
        }


        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        /* #container {
             width: 100%;
             height: 100%;
             display: flex;
             justify-content: center;
             align-items: center;
         }*/

        #panel, #panel-container {
            width:100%;
            height: 500px;
        }

        #panel-container {
            position: absolute;
            background: url("https://images.unsplash.com/photo-1550587542-1668407b73d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80") center top;
            background-size: cover;
            transform: perspective(400px) rotateX(0deg) rotateY(0deg);
            transform-style: preserve-3d;
            box-shadow: 1.5rem 2.5rem 5rem 0.7rem rgba(0,0,0,0.13);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .panel-content {
            color: black;
            text-align: center;
            padding: 20px;
            transform: translateZ(80px) scale(0.8);
            transform-style: preserve-3d;
            overflow-wrap: break-word;
        }
    </style>
</head>

<body style="">
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark shadow-lg fixed-top h-16">
    <div class="container">
        <a href="#" class="navbar-brand">
            <!-- Logo Image -->
            <img src="{{asset('logo/noname.png')}}" width="45" alt="" class="d-inline-block align-middle mr-2">
            <!-- Logo Text -->
            <span class="text- font-weight-bold">NoName</span>
        </a>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse bg-dark">
            <ul class="navbar-nav ml-auto -m-4">
                <li class="nav-item "><a href="{{url('/')}}" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#" class="nav-link mr-16">Contact</a></li>
                <li class="nav-item"><a href="{{ route('cart.list') }}" class="nav-link ">
                        <i class="fa fa-cart-plus fa fa-xs text-white"></i>
                        <span class="pl-1 text-white -mt-1 fa fa-xs">  {{ Cart::getTotalQuantity()}}</span>

                    </a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>
<!-- FOR DEMO PURPOSE-->


<!-- ====== Navbar Section End -->
{{--<nav class="navbar sticky-top navbar-expand-lg bg-dark">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="#">--}}
{{--            <img src="image/img.png" alt="" width=120vw>--}}
{{--        </a>--}}

{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <i class="fas fa-bars" style="color: #e86629--}}
{{--"></i>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}

{{--            <ul class="navbar-nav mr-auto w-100 justify-content-end">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">About</a>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Contact</a>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Services</a>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Other</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}

{{--                    <a href="{{ route('cart.list') }}" class="flex items-center" style="padding-top: 12px">--}}

{{--                        <svg class="w-5 h-5 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--                        </svg>--}}
{{--                       <span style="color: #ff5e14" class="pl-1"> {{ Cart::getTotalQuantity()}}</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<header>--}}
{{--    <div class="container px-6 py-3 mx-auto">--}}
{{--        <div class="flex items-center justify-between">--}}


{{--            <div class="flex items-center justify-end w-full">--}}
{{--                <button class="mx-4 text-gray-600 focus:outline-none sm:mx-0">--}}

{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <nav  class="p-6 mt-4 text-white bg-black sm:flex sm:justify-center sm:items-center">--}}
{{--            <div class="flex flex-col sm:flex-row">--}}
{{--                <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="/">Home</a>--}}
{{--                <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('products.list')}}">Shop</a>--}}
{{--                <a href="{{ route('cart.list') }}" class="flex items-center">--}}
{{--                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--                    </svg>--}}
{{--                    {{ Cart::getTotalQuantity()}}--}}
{{--                </a>--}}

{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</header>--}}

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

        </div>
    </div>
</div>

@yield('content')
{{--<div id="container">--}}
{{--    <div id="panel">--}}
{{--        <div id="panel-container" style="background-image:url({{asset('image/123.jpg')}}) ">--}}
{{--            <div class="panel-content">--}}
{{--                <h1>Hello</h1>--}}
{{--                <p>My name is Seppe Dekeyser</p>--}}
{{--                <p>I make fancy stuff.</p>--}}
{{--                <p>Sometimes.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- ====== Navbar Section Start -->
<!-- NAVBAR-->
<!-- FOR DEMO PURPOSE-->
<!-- NAVBAR-->
<!-- NAVBAR-->
<style></style>



<footer class="footer-section mt-24">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>1010 Avenue, sw 54321, chandigarh</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>9876543210 0</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>mail@info.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{asset('logo/noname.png')}}"
                                                      class="img-fluid w-20" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Expert Team</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <canvas id="canvas"></canvas>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2018, All Right Reserved <a href="">Anup</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

{{---<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>--}}


{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>--}}

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{---<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}


</body>
</html>
