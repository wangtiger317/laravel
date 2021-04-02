<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Web @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/bootstraps/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @yield('head')
</head>
<!--header -->
<div class="header">
    <div class="navigation-wrap  start-header start-style">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">

                        <a class="navbar-brand " href="" target="_blank">
                            <img
                                src="{{asset('assets/images/logo.png')}}" alt="">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav ml-0 py-0 py-md-0">
                                <li class="nav-item  pl-md-3 ml-0  active">
                                    <a class="nav-link " href="#">
                                        WHO WE ARE
                                    </a>
                                </li>
                                <li class="nav-item  pl-md-3 ml-0 ">
                                    <a class="nav-link" href="#">WHAT WE DO</a>
                                </li>
                                <li class="nav-item  pl-md-3 ml-0 ">
                                    <a class="nav-link" href="#">IN THE NEWS</a>
                                </li>
                                <li class="nav-item  pl-md-3 ml-0 ">
                                    <a class="nav-link"
                                       href="#" >BLOG</a>
                                </li>
                                <li class="nav-item  pl-md-3 ml-0 ">
                                    <a class="nav-link" href="#">CONTACT US</a>
                                </li>
                                <li class="last-item pl-md-3     ml-0 ">
                                    <a class="nav-link" href="#">
                                        <img src="{{asset('assets/images/header-right-item.png')}}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--content -->
<div class="container-fluid">
    <div class="row">
        @yield('content')
    </div>
</div>
<div class="footer">
    <div class="navigation-wrap start-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-expand-md navbar-light d-flex">

                        <a class="navbar-brand " href="" target="_blank">
                            <img
                                src="{{asset('assets/images/1x/footer-logo.png')}}" alt="">
                        </a>
                        <div class="footer-bar " >
                            <ul class="navbar-nav ml-0 py-0 py-md-0">
                                <li class="footer-item  pl-md-3 ml-0  active">
                                    <a class="nav-link " href="#">
                                        Memesys Culture Lab
                                    </a>
                                    <a class="nav-link" href="#">Villa no. 2, Villa Bambolim,</a>
                                    <a class="nav-link" href="#">near Goa Dental College,</a>
                                    <a class="nav-link" href="#">Bambolim, Goa 403202</a>

                                </li>
                            </ul>
                        </div>
                        <div class="footer-bar ">
                            <ul class="d-block ml-0 py-0 py-md-0">
                                <li class="footer-item-social  ml-0  active">
                                    <a class="nav-link " href="#">
                                        <img
                                            src="{{asset('assets/images/1x/footer-facebook.png')}}" alt="">
                                    </a>
                                    <a class="nav-link" href="#"> <img
                                            src="{{asset('assets/images/1x/footer-twitter.png')}}" alt=""></a>
                                    <a class="nav-link" href="#"> <img
                                            src="{{asset('assets/images/1x/footer-instagram.png')}}" alt=""></a>
                                </li>
                                <li class="footer-rest-part">
                                    <a class="nav-link " href="#">
                                        General Inquiries:
                                    </a>
                                    <a class="nav-link" href="#">hello@memesyslab.com</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{asset('assets/bootstraps/js/bootstrap.min.js')}}"></script>
</html>

