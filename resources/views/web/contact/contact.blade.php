@extends('web.templete.master')

@section('seo')
<meta name="description" content="InteriorLife">
@endsection

@section('content')

    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>

    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>

    <section id="mt_contact" class="contact-main section-inner">
        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.0943729917417!2d91.7812438!3d26.161055800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a590fd17033a5%3A0xb0bcc675781f2d5f!2zSmlneWFzIEFjYWRlbXksIOCmnOCmv-CmnOCnjeCmnuCmvuCmuCDgpo_gppXgpr7gpqHgp4fgpq7gp4A!5e0!3m2!1sen!2sin!4v1607516703314!5m2!1sen!2sin" height="300" frameborder="0" style="border:0;width:100%;margin-bottom: -7px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="contact-inner">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> RG Baruah Rd, Sunderpur Rd, Sree Nagar, Guwahati, Assam 781005</li>
                            <li><i class="fa fa-phone"></i> +91 361 2207120</li>
                            <li><i class="fa fa-envelope"></i> <a href="">info@mail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_form">
                        <form id="contact_form">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                            <textarea cols="30" rows="5" name="message" id="message" placeholder="Your message" required></textarea>
                            <button class="mt_btn_yellow" id="submit-btn">SEND MESSAGE
                                <span class="mt_load">
                                <span></span>
                                </span>
                            </button>
                            <div id="msg"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection