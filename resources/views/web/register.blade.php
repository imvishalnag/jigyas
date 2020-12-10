@extends('web.templete.website-master')

@section('seo')
<meta name="description" content="Jigyas">
@endsection

@section('content')

    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Register</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>

    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('web.index')}}">Home</a></li>
                <li class="active">Register</li>
            </ul>
        </div>
    </div>

    <section id="account" class="account section-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-md-offset-3">
                    <div class="account-inner">
                        <div class="inner-heading">
                            <h3>Register</h3>
                        </div>
                        <form>
                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">           
                                    <label>Mobile Number :</label>
                                    <input type="text" class="form-control" name="email">
                                    <button class="btn btn-primary btn-otp">Verify</button>   
                                </div>
                                <div class="col-md-4">   
                                    <label>OTP</label>    
                                    <input type="text" class="form-control" name="email">               
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="Password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input type="Password" class="form-control" name="confirm-password">
                            </div>
                            <div class="form-group">
                                <button class="mt_btn_yellow">Login</button>
                                <input class="checkbox" type="checkbox"> <span>Remember me</span>
                            </div>
                            <p class="lost_password">
                                <a href="lost_password.html">Lost your password?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection