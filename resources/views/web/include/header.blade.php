<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jigyas is a creative education html template">
    <title>Jigyas - Education HTML Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- CSS -->
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/default.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/modal-video-min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/plugin.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/flaticon1.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <header id="inner-navigation">
        <div class="topbar-section">
            <div class="container">
                <div class="topbar-inner">
                    <div class="top-bar-left pull-left">
                        <ul>
                            <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                            <li><i class="fa fa-envelope"></i> Email: <a href="#">demo@mail.com</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right pull-right">
                        <ul>
                            <li><a class="btn btn-primary" href="{{route('web.login')}}">Student Login</a></li>
                            <li><a class="btn btn-danger" href="{{route('web.register')}}">Student Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">
            <div class="container">
                <div class="logo pull-left">
                <h2><a href="{{route('web.index')}}"><img src="{{asset('web/images/logo.png')}}" alt=""></a></h2>
                </div>
                <div id="navbar" class="navbar-nav-wrapper pull-right">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li class="active">
                            <a href="{{route('web.index')}}">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Department</a>
                        </li>
                        <li>
                            <a href="#">Course</a>
                        </li>
                        <li>
                            <a href="#">Books</a>
                        </li>
                        <li>
                            <a href="#">JISE</a>
                        </li>
                        <li>
                            <a href="#">logo</a>
                        </li>
                        <li>
                            <a href="#">Article</a>
                        </li>
                        <li>
                            <a href="#">prize</a>
                        </li>
                        <li>
                            <a href="#">Gallery</a>
                        </li>
                        <li>
                            <a href="{{route('web.contact.contact')}}">Contact</a></ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="slicknav-mobile"></div>
        </nav>

    </header>