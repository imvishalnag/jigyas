<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>JIGYAS</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}"> --}}

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
        <!-- DataTables -->
        <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css">
    
        <!-- Dropzone css -->
        <link href="{{asset('assets/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
        <!-- Summernote css -->
        <link href="{{asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet" />

    </head>

    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center" style="font-size: 30px;font-weight: 600;">
                      JIGYAS
                        {{-- <a href="index.html" class="logo"><img src="{{asset('assets/images/logo.png')}}" height="42" alt="logo"></a> --}}
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        {{-- <div class="text-center">
                            <img src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="" class="rounded-circle">
                        </div> --}}
                        <div class="user-info">
                            <h4 class="font-16">Admin</h4>
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="user.php" class="waves-effect"><i class="mdi mdi-account-multiple-outline"></i> <span> User </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Product </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="active-product.php">Active Products</a></li>
                                    <li><a href="deactive-product.php">Disabled Products</a></li>
                                    <li><a href="new-product.php">Add New Product</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cube-outline"></i><span> Order </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="new-order.php">New Order</a></li>
                                    <li><a href="accepted-order.php">Accepted Order</a></li>
                                    <li><a href="rejected-order.php">Rejected Order</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Place Order </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Master </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="catagory.php">Catagory</a></li>
                                    <li><a href="size.php">Size</a></li>
                                    <li><a href="slider.php">Slider</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="user.php" class="waves-effect"><i class="mdi mdi-account-outline"></i> <span> Contact </span> </a>
                            </li>
                            <li>
                                <a href="{{route('admin.change_password_form')}}" class="waves-effect"><i class="mdi mdi-account-outline"></i> <span> Change Password </span> </a>
                            </li>

                            <li>
                                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect"><i class="mdi mdi-lock-outline"></i><span> Logout </span></a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            {{-- <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                        <a class="dropdown-item" style="padding: 6px 10px;" href="#"><i class="mdi mdi-settings m-r-5 text-muted"></i> Change Password</a>
                                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item" style="padding: 6px 10px;" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                            </ul>
                            --}}
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Company Adminpanel</h3>
                                </li>

                                <a style="color: red;font-weight: bold;font-size: 21px;float: right;margin: 19px;" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect"><i class="mdi mdi-lock-outline" ></i><span> Logout </span></a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>    
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->