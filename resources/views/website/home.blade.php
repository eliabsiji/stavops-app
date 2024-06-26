  @extends('website.inc.master')
  @section('content')
  <!--Start Main Slider Two-->
  <section class="main-slider main-slider-one style2">
    <div class="main-slider-one__inner">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
            data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-right-arrow2\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

              <!--Start Main Slider One Single-->
              <div class="main-slider-one__single">
                <div class="image-layer" style="background-image:url({{ asset('dapafue/assets/images/slider/slider-v2-img1.jpg') }})">
                </div>
                <div class="gradient-bg"
                    style="background-image: url({{ asset('dapafue/assets/images/backgrounds/slider-v2-gradient-bg.png') }});"></div>
                <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/slider-v2-shape1.png') }}" alt="#"></div>

                <div class="container">
                    <div class="main-slider-one__content">
                        {{-- <div class="tagline">
                            <h6>innovative IT Solution</h6>
                        </div> --}}

                        <div class="title">
                            <h2>ACE <br>
                                JOURNAL</h2>
                        </div>

                        <div class="text">
                            <p>Academic Research Repository for the Institution</p>
                        </div>

                        <div class="main-slider-one__content-btn">
                            <a class="thm-btn" href="mission.html">About us</a>
                        </div>

                    </div>

                </div>
            </div>
            <!--End Main Slider One Single-->

                  <!--Start Main Slider One Single-->
                  <div class="main-slider-one__single">
                    <div class="image-layer" style="background-image:url({{ asset('dapafue/assets/images/slider/slider-v2-img1.jpg') }})">
                    </div>
                    <div class="gradient-bg"
                        style="background-image: url({{ asset('dapafue/assets/images/backgrounds/slider-v2-gradient-bg.png') }});"></div>
                    <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/slider-v2-shape1.png') }}" alt="#"></div>

                    <div class="container">
                        <div class="main-slider-one__content">
                            {{-- <div class="tagline">
                                <h6>innovative IT Solution</h6>
                            </div> --}}

                            <div class="title">
                                <h2>ACE <br>
                                    JOURNAL</h2>
                            </div>

                            <div class="text">
                                <p>Academic Research Repository for the Institution</p>
                            </div>

                            <div class="main-slider-one__content-btn">
                                <a class="thm-btn" href="mission.html">About us</a>
                            </div>

                        </div>

                    </div>
                </div>
                <!--End Main Slider One Single-->


        </div>
    </div>
</section>
<!--End Main Slider Two-->

<!--Start About Two-->
<section class="about-two">
    <div class="shape8"><img src="{{ asset('dapafue/assets/images/shapes/about-v2-shape4.png')}}" alt="#"></div>
    <div class="shape9 rotate-me"><img src="{{ asset('dapafue/assets/images/shapes/about-v2-shape5.png')}}" alt="#"></div>
    <div class="container">
        <div class="row">
            <!--Start About Two Img-->
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="about-two__img clearfix">
                    <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/about-v2-shape1.png')}}" alt="#"></div>
                    <div class="shape2 rotate-me"><img src="{{ asset('dapafue/assets/images/shapes/about-v2-shape2.png')}}" alt="#">
                    </div>
                    <img src="{{ asset('dapafue/assets/images/about/school.jpg')}}" alt="#">
                </div>
            </div>
            <!--End About Two Img-->

            <!--Start About Two Content-->
            <div class="col-xl-7">
                <div class="about-two__content">
                    <div class="sec-title">
                        <div class="sec-title__tagline">
                            <div class="inner">
                                {{-- <div class="round-box"><img src="{{ asset('dapafue/assets/images/shapes/school.jpg')}}"
                                        alt="#">
                                </div> --}}
                                <div class="text">
                                    <p>WHO WE ARE</p>
                                </div>
                            </div>
                        </div>
                        <h2 class="sec-title__title">WELCOME TO ACE JOURNAL <br>
                            </h2>
                    </div>

                    <div class="about-two__content-text1">
                        <p>Welcome to Acejournals, your premier destination for insightful and engaging content on quality reseach on our journals. Whether you're a seasoned professional or a curious enthusiast, we have somwthing for you.</p>
                    </div>
                    <h2>
                        <br>
                    </h2>
                    <h2>What set Us Apart<br>
                    </h2>
                    <div class="about-two__content-text1">
                        <p>At acejournals, we pride ourselves on offering high-quality, original content that delves deep in
                            discourse on interdisciplinarity in the academic studies.  </p>
                    </div>

                    {{-- <div class="about-two__content-text2">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-two__content-text2-single">
                                    <div class="icon-box">
                                        <div class="shape3"></div>
                                        <span class="icon-buoy-help"></span>
                                    </div>

                                    <div class="content-box">
                                        <h3>Tech Solution</h3>
                                        <p>There are many variations
                                            of passages of lorem </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-two__content-text2-single">
                                    <div class="icon-box">
                                        <div class="shape3"></div>
                                        <span class="icon-answer-call"></span>
                                    </div>

                                    <div class="content-box">
                                        <h3>Quick support</h3>
                                        <p>There are many variations
                                            of passages of lorem </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    {{-- <div class="about-two__content-btn">
                        <a class="thm-btn" href="about.html">Discover more</a>
                    </div> --}}
                </div>
            </div>
            <!--End About Two Content-->
        </div>
    </div>
</section>
<!--End About Two-->


    <!--Start Intro One-->
   <section class="intro-one intro-one--two">

    <div class="shape3"><img src="{{ asset('dapafue/assets/images/shapes/intro-v1-shape3.png')}}" alt=""></div>
    <div class="shape4"><img src="{{ asset('dapafue/assets/images/shapes/intro-v1-shape4.png')}}" alt=""></div>
    <div class="container">

        {{-- <div class="row">
            <!--Start Intro One Single-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                <div class="intro-one__single">
                    <div class="intro-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/resources/intro-v1-img1.jpg')}}" alt="#">
                        </div>
                        <div class="icon-box">
                            <span class="icon-privacy"></span>
                        </div>
                    </div>

                    <div class="intro-one__single-content text-center">
                        <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/intro-v1-shape1.png')}}" alt="#"></div>
                        <h2><a href="#">School of Laguage</a></h2>
                        <p>What is today known as the School of Languages started as an <br>
                            unnamed body of three foundation Departments in May 1964.</p>
                    </div>
                </div>
            </div>
            <!--End Intro One Single-->

            <!--Start Intro One Single-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                <div class="intro-one__single">
                    <div class="intro-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/resources/intro-v1-img2.jpg')}}" alt="#">
                        </div>
                        <div class="icon-box">
                            <span class="icon-filter"></span>
                        </div>
                    </div>

                    <div class="intro-one__single-content text-center">
                        <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/intro-v1-shape1.png')}}" alt="#"></div>
                        <h2><a href="#">School of Art & Social Sciences</a></h2>
                        <p>
                            The School of Arts and Social Sciences is one of the foundation Schools in the College.
                             <br>
                             It was formerly known as the School of Arts</p>
                    </div>
                </div>
            </div>
            <!--End Intro One Single-->

            <!--Start Intro One Single-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                <div class="intro-one__single">
                    <div class="intro-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/resources/intro-v1-img3.jpg')}}" alt="#">
                        </div>
                        <div class="icon-box">
                            <span class="icon-laptop"></span>
                        </div>
                    </div>

                    <div class="intro-one__single-content text-center">
                        <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/intro-v1-shape1.png')}}" alt="#"></div>
                        <h2><a href="#">School of Vocation and Technical Education</a></h2>
                        <p>The School of Vocational and Technical Education started as School of  <br>
                            Applied Arts and Sciences in 1964</p>
                    </div>
                </div>
            </div>
            <!--End Intro One Single-->

            <!--Start Intro One Single-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                <div class="intro-one__single">
                    <div class="intro-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/resources/intro-v1-img3.jpg')}}" alt="#">
                        </div>
                        <div class="icon-box">
                            <span class="icon-laptop"></span>
                        </div>
                    </div>

                    <div class="intro-one__single-content text-center">
                        <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/intro-v1-shape1.png')}}" alt="#"></div>
                        <h2><a href="#">School of Science</a></h2>
                        <p>The School of Vocational and Technical Education started as School of  <br>
                            Applied Arts and Sciences in 1964</p>
                    </div>
                </div>
            </div>
            <!--End Intro One Single-->

            <!--Start Intro One Single-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                <div class="intro-one__single">
                    <div class="intro-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/resources/intro-v1-img3.jpg')}}" alt="#">
                        </div>
                        <div class="icon-box">
                            <span class="icon-laptop"></span>
                        </div>
                    </div>

                    <div class="intro-one__single-content text-center">
                        <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/intro-v1-shape1.png')}}" alt="#"></div>
                        <h2><a href="#">School of General Education</a></h2>
                        <p>The School of Vocational and Technical Education started as School of  <br>
                            Applied Arts and Sciences in 1964</p>
                    </div>
                </div>
            </div>
            <!--End Intro One Single-->
        </div> --}}
    </div>
</section>

<!--Start Team One-->
<section class="team-one team-one--two">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sec-title__tagline">
                <div class="inner">
                    <div class="round-box"><img src="{{ asset('dapafue/assets/images/shapes/sec-title-shape.png')}}" alt="#">
                    </div>
                    <div class="text">
                        <p>Our Team</p>
                    </div>
                </div>
            </div>
            <h2 class="sec-title__title">Our Team</h2>
        </div>
        <div class="row">
            <!--Start Team One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                <div class="team-one__single">
                    <div class="team-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/team/team1.jpg')}}" alt="#">
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                    </li>
                                    <li>
                                        <a class="in" href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="team-one__single-content text-center">
                        <h2><a href="#">Dr. S.A. Akintunde</a></h2>
                        <p>Editor in Chief</p>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                <div class="team-one__single">
                    <div class="team-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/team/team2.jpg')}}" alt="#">
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                    </li>
                                    <li>
                                        <a class="in" href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="team-one__single-content text-center">
                        <h2><a href="#">Dr. A.O Olajuyigbe </a></h2>
                        <p>Deputy Editor in Chief</p>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                <div class="team-one__single">
                    <div class="team-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/team/team3.jpg')}}"  alt="#">
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                    </li>
                                    <li>
                                        <a class="in" href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="team-one__single-content text-center">
                        <h2><a href="#">Dr. T.R Oziegbe</a></h2>
                        <p>Managing Editor</p>
                    </div>
                </div>
            </div>
            <!--End Team One Single-->

            <!--Start Team One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                <div class="team-one__single">
                    <div class="team-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/team/team4.jpg')}}" alt="#">
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                    </li>
                                    <li>
                                        <a class="in" href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="team-one__single-content text-center">
                        <h2><a href="#"> A.K  Akinmusere</a></h2>
                        <p>Business Editor</p>
                    </div>
                </div>
            </div>


            <!--End Team One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                <div class="team-one__single">
                    <div class="team-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/team/team6.jpg')}}" alt="#">
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                    </li>
                                    <li>
                                        <a class="in" href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="team-one__single-content text-center">
                        <h2><a href="#"> Dr. A.O Akinbobola </a></h2>
                        <p>Member</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                <div class="team-one__single">
                    <div class="team-one__single-img">
                        <div class="inner">
                            <img src="{{ asset('dapafue/assets/images/team/team5.jpg') }}" alt="#">
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                    </li>
                                    <li>
                                        <a class="in" href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="team-one__single-content text-center">

                        <h2><a href="#">Mr. G.O Batimehin</a></h2>
                        <p>Business Editor</p>

                </div>
            </div>
    </div>
</section>
<!--End Team One-->
@endsection
