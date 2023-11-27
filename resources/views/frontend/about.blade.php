@extends('frontend.layout')
@section('title','About Us')
@section('content')
<!--start hero area-->
<section class="page-banner-area">
    <div class="container">
        <div class="row">
            <!--start heading-->
            <div class="col-lg-10 offset-lg-1">
                <div class="banner-content text-center">
                    <h1>About Us</h1>
                    <p><a href="{{ url('') }}">Home</a> <span> > </span>About Us</p>
                </div>
            </div>
            <!--end heading-->
        </div>
    </div>
</section>
<!--end hero area-->
<!--start about area-->
<section class="about-area four" style="padding: 0px;">
    <div class="container">
        <div class="row">
            <!--start sec-heading-->
            <div class="col-lg-12">
                <div class="sec-heading text-center">
                    <h4>Who we are</h4>
                    <h2>We Are Providing The Best Quality Online Courses. Our All Instructors Are High Expert</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
                </div>
            </div>
            <!--end sec-heading-->
        </div>
    </div>
</section>
<!--end about us-->
<!--start why choose area-->
<section class="why-choose-area three bg-gray">
    <div class="container">
        <div class="row">
            <!--start why choose heading-->
            <div class="col-lg-8 offset-lg-2">
                <div class="sec-heading  text-center">
                    <h4>Best learning platform </h4>
                    <h2>Why We Are The Best</h2>
                </div>
            </div>
            <!--end why choose heading-->
        </div>
        <div class="row text-center">
            <!--start choose single-->
            <div class="col-md-4">
                <div class="choose-single three">
                    <div class="why-choose-icon three">
                        <img src="{{ url('public/frontend/images/icons/ribbon.svg') }}" alt="image">
                    </div>
                    <div class="why-choose-cont three">
                        <h3>High Quality Courses</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                    </div>
                </div>
            </div>
            <!--end choose single-->
            <!--start choose single-->
            <div class="col-md-4">
                <div class="choose-single three">
                    <div class="why-choose-icon three">
                        <img src="assets/images/icons/teacher.svg" alt="image">
                    </div>
                    <div class="why-choose-cont three">
                        <h3>Expert Instructors</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                    </div>
                </div>
            </div>
            <!--end choose single-->
            <!--start choose single-->
            <div class="col-md-4">
                <div class="choose-single three">
                    <div class="why-choose-icon three">
                        <img src="assets/images/icons/folder.svg" alt="image">
                    </div>
                    <div class="why-choose-cont three">
                        <h3>Life Time Access</h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                    </div>
                </div>
            </div>
            <!--end choose single-->
        </div>
    </div>
</section>
<!--end why choose area-->
<!--start testimonial area-->
<section class="testimonial-area two">
    <div class="container">
        <div class="row">
            <!--start sec-heading-->
            <div class="col-lg-8 offset-lg-2">
                <div class="sec-heading text-center">
                    <h2>Testimonials</h2>
                </div>
            </div>
            <!--end sec-heading-->
        </div>
        <div>
            <blockquote class="font_4 wixui-rich-text__text" style="line-height:1.3em; text-align:center; font-size:35px;">“Good Thinkers are always in demand. They solve problems, never lack ideas, and always have hope for a better future Datasphere and Genai-training is the best example of the above.”</blockquote>
        </div>
        <div id="comp-j7ghhy8y" class="KcpHeO tz5f0K comp-j7ghhy8y wixui-rich-text" data-testid="richTextElement" data-angle="0" data-angle-style-location="style" data-screen-in-hide="done" style="visibility: inherit;">
            <p class="font_8 wixui-rich-text__text" style="line-height:1.7em; text-align:center; font-size:16px;">
                <span style="letter-spacing:0.04em;" class="wixui-rich-text__text">
                    <span class="color_18 wixui-rich-text__text">
                        <span style="font-weight:bold; color:red;" class="wixui-rich-text__text">Waseem Akram<br class="wixui-rich-text__text">
            CEO of EpicSoft</span></span></span></p>
        </div>
    </div>
</section>
<!--end testimonial area-->
@endsection
