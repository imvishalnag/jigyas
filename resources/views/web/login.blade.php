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

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-md-offset-3">
                    <div class="account-inner">
                        <div class="inner-heading">
                            <h3>Sign In</h3>
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" >{{ Session::get('message') }}</div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger" >{{ Session::get('error') }}</div>
                        @endif
                        <form method="post" action="{{ route('web.student_login_submit') }}">
                            @csrf
                            <div class="form-group">
                                <label>Mobile number:</label>
                                <input type="number" class="form-control" name="mobile">
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;font-weight:500">{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if ($message = Session::get('login_error'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;font-weight:500">{{ $message }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password">
                                @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red;font-weight:500">{{ $errors->first('password') }}</strong>
                                    </span> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="mt_btn_yellow" type="submit">Login</button>
                            </div>
                            <p class="lost_password">
                                <a href="{{route('web.register')}}">If not registered, click here</a>
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