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
                            @if (Session::has('message'))
                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                            @endif @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                        <form method="post" action="{{ route('web.student_register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">           
                                    <label>Mobile Number :</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile">
                                    <span id="verify_btn"> 
                                       <button type="button" class="btn btn-primary btn-otp" onclick="sendOtp()" id="verify_btn_btn">Verify</button>   
                                    </span>
                                    <span id="otp_error"></span>
                                </div>
                                <div class="col-md-4">   
                                    <label>OTP</label>    
                                    <input type="text" class="form-control" name="otp">               
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="Password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input type="Password" class="form-control" name="confirm_password">
                            </div>
                            <div class="form-group">
                                <button class="mt_btn_yellow">Register</button>
                                {{-- <input class="checkbox" type="checkbox"> <span>Remember me</span> --}}
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
<script>
    function sendOtp(){
        var mobile = $("#mobile").val();
        console.log(mobile.length);
        if (mobile.length > 9) {
            $("#otp_error").html('');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"GET",
                url:"{{ url('web/user/otp/send/')}}"+"/"+mobile+"",
                beforeSend: function(){
                    $("#verify_btn_btn").html(`<i class="fa fa-spinner fa-spin" aria-hidden="true" style="color:white"></i>`);
                },
                success:function(data){
                    if (data == '1') {
                        timerStart();
                        $("#otp_error").html('<b class=\"btn btn-success\">Otp Send To Your Mobile Number</b>');
                    } else if(data == '3'){
                        $("#otp_error").html('<b class=\"btn btn-danger\">Sorry Number Already Registered With Us</b>');
                        $('#verify_btn_btn').html('Verify');
                    }else{
                        $("#otp_error").html('<b class=\"btn btn-danger\">Something Went Wrong Please try Again</b>');
                        $('#verify_btn_btn').html('Verify');

                    }
                }
            });
        }else{
            $("#otp_error").html("<b class=\"btn btn-danger\">Please Enter Valid Mobile Number</b>");
        }
    }


    $(document).ready(function(){
        $("#category").change(function(){
            var category = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"GET",
                url:"{{ url('/admin/sub/category/list/with/category/')}}"+"/"+category+"",
                success:function(data){
                    console.log(data);
                    $("#sub_category").html("<option value=''>Please Select First Category</option>");

                    $.each( data, function( key, value ) {
                        $("#sub_category").append("<option value='"+value.id+"'>"+value.name+"</option>");
                    });

                }
            });
        });
    });


        function timerStart(){
            var time = 30;
            var intervalId = setInterval(function(){
                // console.log(time++);
                $('#verify_btn_btn').attr('disabled',true);
                var time_data = time--;
                if (time_data == '0') {
                    $('#verify_btn_btn').attr('disabled',false);
                    $('#verify_btn_btn').html('Resend OTP');
                    clearInterval(intervalId);
                }else{
                    // console.log(time_data.toString().length);
                    if (time_data.toString().length == '1') {
                        time_data = "0"+time_data;
                    }
                    $('#verify_btn_btn').html(time_data);
                }
            }, 1000);
        };
</script>
@endsection