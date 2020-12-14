@extends('web.templete.website-master')

@section('seo')
<meta name="description" content="Jigyas">
@endsection

@section('content')

    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Log in</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>

    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('web.index')}}">Home</a></li>
                <li class="active">Log In</li>
            </ul>
        </div>
    </div>

    <section id="account" class="account section-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-md-offset-3">
                    <div class="account-inner">
                        <div class="inner-heading">
                            <h3>Sign In</h3>
                        </div>
                        <form>
                            <div class="form-group">
                                <label>Mobile number:</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="Password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <button class="mt_btn_yellow">Login</button>
                            </div>
                            <p class="lost_password">
                                <a href="register.php">If not registered, click here</a>
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