<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Padhai is a creative education html template">
    <title>Jigyas - Education HTML Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/default.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/plugin.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/dashboard.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('web/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
</head>

<body>

    <div id="container-wrapper">
        <div id="dashboard">
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
            <div class="dashboard-sticky-nav">
                <div class="content-left pull-left">
                    <h2><a href="index.html" class="white">Jigyas</a></h2>
                </div>
                <div class="content-right pull-right">
                    <div class="search-bar">
                        <h2 class="mb-0">Student Panel</h2>
                    </div>
                    <div class="dropdown">
                        <a href="logout">
                            <div class="dropdown-item logout">
                                <i class="sl sl-icon-power"></i>
                                <small style="font-size:11px">Logout</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul>
                        <li><a href="{{route('user.index')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                        <li>
                            <a><i class="sl sl-icon-layers"></i> Mock Test</a>
                            <ul>
                                <li><a href="{{route('user.mocktest.mocktest')}}"><span>-&nbsp;&nbsp;</span>Apply Now </a></li>
                            </ul>
                        </li>
                        <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Logout</a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </div>
            </div>