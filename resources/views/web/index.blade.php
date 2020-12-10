@extends('web.templete.website-master')

@section('seo')
<meta name="description" content="Jigyas">
@endsection

@section('content')

    <div id="preloader">
        <div id="status"></div>
    </div>

    <div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

        <div class="carousel-inner" role="listbox">

            <div class="item active">

                <img src="{{asset('web/images/education/slide-1.jpg')}}" alt="slider_01" />

                <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                    <h3>Welcome To Jigyas</h3>
                    <h1>Explore the World of Our Graduates</h1>
                    <a class="mt_btn_white-bor" href="#">Read More</a>
                    <a class="mt_btn_yellow" href="#">Contact Us</a>
                </div>
            </div>


            <div class="item">

                <img src="{{asset('web/images/education/slide-2.jpg')}}" alt="slider_02" />

                <div class="caption_slide1 caption_slide1_right wow fadeInLeft" data-animation="animated fadeInLeft">
                    <h3>Welcome To Jigyas</h3>
                    <h1>Better education for a better world</h1>
                    <a class="mt_btn_white-bor" href="#">Read More</a>
                    <a class="mt_btn_yellow" href="#">Contact Us</a>
                </div>
            </div>


            <div class="item">

                <img src="{{asset('web/images/education/slide-4.jpg')}}" alt="slider_04" />

                <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                    <h3>Welcome To Jigyas</h3>
                    <h1>Exceptional People, Exceptional Care</h1>
                    <a class="mt_btn_white-bor" href="#">Read More</a>
                    <a class="mt_btn_yellow" href="#">Contact Us</a>
                </div>
            </div>

        </div>

        <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="edu-courses">
        <div class="container">
            <div class="row panel-grid-banner">
                <div class="col-md-4 col-sm-12">
                    <div class="inner-grid text-center">
                        <div class="text-courses">
                            <i class="fa fa-laptop mar-bottom-20"></i>
                            <h3>Learn Courses Online</h3>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">
                        <div class="text-courses">
                            <i class="fa fa-users mar-bottom-20"></i>
                            <h3>Highly Qualified Teachers</h3>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">
                        <div class="text-coursesa">
                            <i class="fa fa-book mar-bottom-20"></i>
                            <h3>Book Library & Stores</h3>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow ">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="mt_about">
        <div class="container">
            <div class="about_services">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="about-items">
                            <div class="inner-heading">
                                <h3>About Jigyas</h3>
                                <h2 class="mar-0">Know more about Jigyas</h2>
                            </div>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus
                                a odio tincidunt mauris. <br><br>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-edu-bg">
                            <img src="{{asset('web/images/education/about.png')}}" alt="About">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="about-form">
                            <div class="col-sm-9">
                                <div class="about-sch-form">
                                    <div class="event-title">
                                        <h2>Apply for Mock Test</h2>
                                        <h3 class="white">Mock Test 2020 applications are now open</h3>
                                        <p>We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="smt-items mar-top-70">
                                    <a class="mt_btn_yellow" href="#">Apply Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="the-gallery" class="wide-gallery wg_ee2">
        <div class="container">
        
            <div class="inner-heading">
                <h3>Gallery</h3>
                <h2>See and feel it</h2>
            </div>
            <div class="row">
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="{{asset('web/images/gallery/gl-02.jpg')}}" title="">
                            <img src="{{asset('web/images/gallery/gl-02.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="item port-popup">
                        <a href="{{asset('web/images/gallery/gl-01.jpg')}}" title="">
                            <img src="{{asset('web/images/gallery/gl-01.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="{{asset('web/images/gallery/gl-03.jpg')}}" title="">
                            <img src="{{asset('web/images/gallery/gl-03.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="item port-popup">
                        <a href="{{asset('web/images/gallery/gl-04.jpg')}}" title="">
                            <img src="{{asset('web/images/gallery/gl-04.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="{{asset('web/images/gallery/gl-s1.jpg')}}" title="">
                            <img src="{{asset('web/images/gallery/gl-s1.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 mix">
                    <div class="last-item-g">
                        <div class="item port-popup">
                            <a href="{{asset('web/images/gallery/gl-c1.jpg')}}" title="">
                                <img src="{{asset('web/images/gallery/gl-c1.jpg')}}" alt="">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection