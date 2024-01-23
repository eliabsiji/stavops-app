
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dapafue/assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dapafue/assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dapafue/assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{ asset('dapafue/assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="" />

    <!-- fonts -->
    <link
        href="../../external.html?link=https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/flaticon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('dapafue/assets/css/ontech.css')}}" />
    <link rel="stylesheet" href="{{ asset('dapafue/assets/css/ontech-responsive.css')}}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>


    {{-- <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader --> --}}

    <div class="page-wrapper">

        <!--Start Main Header Two-->
        <header class="main-header main-header-one clearfix">
            <div class="main-header-one__top">
                <div class="container">
                    <div class="main-header-one__top-inner">
                        <div class="main-header-one__top-left">
                            <div class="main-header-one__top-left-btn">
                                <a href="contact.html">Contact us</a>
                            </div>
                        </div>

                        <div class="main-header-one__top-right">
                            <div class="main-header__contact-info">
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-call"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Call for Anything </p>
                                                <h4><a href="tel:8857002451">+088 57 00 24 51 </a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-email"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>You may send an email</p>
                                                <h4><a href="mailto:yourmail@email.com">dafeud@gmail.com</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-clock2"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Sunday - Closed</p>
                                                <h4>Mon - Sat(9.00 - 6.00) </h4>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <div class="main-header-one__bottom" style="background-color: darkgreen";>
                <nav class="main-menu clearfix" style="background-color: darkgreen";>
                    <div class="main-menu__wrapper clearfix" style="background-color: darkgreen";>
                        <div class="container">
                            <div class="main-header-one__bottom-inner" style="background-color: darkgreen";>

                                <div class="main-header-one__bottom-left" style="background-color: darkgreen";>
                                    <div class="logo-one">
                                        <a href="index.html"><img src="{{ asset('dapafue/assets/images/resources/logo-1.png')}}" alt="#"></a>
                                    </div>

                                    <div class="main-menu__main-menu-box" style="background-color: darkgreen";>
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li class="dropdown">
                                                <a href="index.html">Home </a>
                                               </li>
                                               <li>
                                                <a href="submission.html">Submission</a>
                                            </li>
                                            <li><a href="journal.html">Journal</a></li>
                                            <li class="dropdown">
                                                <a href="#">About</a>
                                                <ul>
                                                    <li><a href="mission.html">Mission and Vission</a></li>
                                                    <li><a href="Conference.html">Conference</a></li>

                                                    <li><a href="editor.html">Editorial Board</a> </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#">Join Us</a>
                                                <ul>
                                                    <li><a href="/login">Sign In</a></li>
                                                    <li><a href="#">Register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="main-header-one__bottom-right">
                                    <div class="main-header__search">
                                        <a href="#" class="main-menu__search search-toggler icon-search"></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!--End Main Header Two-->

        <div class="stricky-header stricky-header__two stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Start Main Slider Two-->
        <section class="main-slider main-slider-one style2">
            <div class="main-slider-one__inner">
                <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                    data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-right-arrow2\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                    <!--Start Main Slider One Single-->
                    <div class="main-slider-one__single">
                        <div class="image-layer" style="background-image:url(assets/images/slider/slider-v2-img1.jpg')}})">
                        </div>
                        <div class="gradient-bg"
                            style="background-image: url(assets/images/backgrounds/slider-v2-gradient-bg.png')}});"></div>
                        <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/slider-v2-shape1.png')}}" alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <h6>innovative IT Solution</h6>
                                </div>

                                <div class="title">
                                    <h2>Innovative IT <br>
                                        Solution Agency</h2>
                                </div>

                                <div class="text">
                                    <p>Evolve into your full potential with digital IT solutions Services.</p>
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
                        <div class="image-layer" style="background-image:url(assets/images/slider/slider-v2-img2.jpg')}})">
                        </div>
                        <div class="gradient-bg"
                            style="background-image: url(assets/images/backgrounds/slider-v2-gradient-bg.png')}});"></div>
                        <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/slider-v2-shape1.png')}}" alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <h6>innovative IT Solution</h6>
                                </div>

                                <div class="title">
                                    <h2>Innovative IT <br>
                                        Solution Agency</h2>
                                </div>

                                <div class="text">
                                    <p>Evolve into your full potential with digital IT solutions Services.</p>
                                </div>

                                <div class="main-slider-one__content-btn">
                                    <a class="thm-btn" href="journal.html">View Our Journals</a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--End Main Slider One Single-->

                    <!--Start Main Slider One Single-->
                    <div class="main-slider-one__single">
                        <div class="image-layer" style="background-image:url(assets/images/slider/slider-v2-img3.jpg')}})">
                        </div>
                        <div class="gradient-bg"
                            style="background-image: url(assets/images/backgrounds/slider-v2-gradient-bg.png')}});"></div>
                        <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/slider-v2-shape1.png')}}" alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <h6>innovative IT Solution</h6>
                                </div>

                                <div class="title">
                                    <h2>Innovative IT <br>
                                        Solution Agency</h2>
                                </div>

                                <div class="text">
                                    <p>Evolve into your full potential with digital IT solutions Services and Journals.</p>
                                </div>

                                <div class="main-slider-one__content-btn">
                                    <a class="thm-btn" href="conference.html">View Our Conference</a>
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
                            <img src="{{ asset('dapafue/assets/images/about/about-v2-img1.jpg')}}" alt="#">
                        </div>
                    </div>
                    <!--End About Two Img-->

                    <!--Start About Two Content-->
                    <div class="col-xl-7">
                        <div class="about-two__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <div class="inner">
                                        <div class="round-box"><img src="{{ asset('dapafue/assets/images/shapes/sec-title-shape.png')}}"
                                                alt="#">
                                        </div>
                                        <div class="text">
                                            <p>ABOUT US</p>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="sec-title__title">Just why you Selected <br>
                                    </h2>
                            </div>

                            <div class="about-two__content-text1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Here's what to know about
                                    how to start a consulting business</p>
                            </div>

                            <div class="about-two__content-text2">
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
                            </div>

                            <div class="about-two__content-text3">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                        <div class="about-two__content-text3-left">
                                            <div class="shape4"></div>
                                            <div class="img-box">
                                                <div class="shape5"><img src="{{ asset('dapafue/assets/images/shapes/about-v2-shape3.png')}}"
                                                        alt="#"></div>
                                                <div class="shape6"><img src="{{ asset('dapafue/assets/images/shapes/about-v2-shape3.png')}}"
                                                        alt="#"></div>
                                                <div class="shape7"><img src="{{ asset('dapafue/assets/images/shapes/about-v2-shape3.png')}}"
                                                        alt="#"></div>
                                                <img src="{{ asset('dapafue/assets/images/about/about-v2-img2.jpg')}}" alt="#">
                                            </div>

                                            <div class="content-box">
                                                <h2><span class="odometer" data-count="20">00</span>
                                                </h2>
                                                <h3>Years In Field</h3>
                                                <p>Lorem Ipsum passage going </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="about-two__content-text3-right">
                                            <p>Lorem ipsum dolor sit amet <br>
                                                consectetur adipiscing tech</p>
                                            <ul>
                                                <li>
                                                    <p> <span class="icon-check-circle"></span> Web Design</p>
                                                </li>

                                                <li>
                                                    <p> <span class="icon-check-circle"></span> Website Development</p>
                                                </li>

                                                <li>
                                                    <p> <span class="icon-check-circle"></span> Digital marketing</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-two__content-btn">
                                <a class="thm-btn" href="about.html">Discover more</a>
                            </div>
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
                <div class="row">
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
                                <h2><a href="#">Digital Security</a></h2>
                                <p>Lorem ipsum dolor sit amet consect <br>
                                    etur notted adipisicing</p>
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
                                <h2><a href="#">Tech Solution</a></h2>
                                <p>Lorem ipsum dolor sit amet consect <br>
                                    etur notted adipisicing</p>
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
                                <h2><a href="#">IT Outsourcing</a></h2>
                                <p>Lorem ipsum dolor sit amet consect <br>
                                    etur notted adipisicing</p>
                            </div>
                        </div>
                    </div>
                    <!--End Intro One Single-->
                </div>
            </div>
        </section>
        <!--End Intro One-->

        <!--Start Projects One-->
        <section class="projects-one projects-one--two">
            <div class="shape5"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape5.png')}}" alt="#"></div>
            <div class="shape6"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape6.png')}}" alt="#"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box"><img src="{{ asset('dapafue/assets/images/shapes/sec-title-shape.png')}}" alt="#">
                            </div>
                            <div class="text">
                                <p>Our Completed Projects</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title">Technology Solutions Recent <br>
                        Our Tech Projects</h2>
                </div>
                <div class="row">

                    <!--Start Projects One Single-->
                    <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="projects-one__single">
                            <div class="projects-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('dapafue/assets/images/project/projects-v2-img1.jpg')}}" alt="#">
                                </div>
                            </div>

                            <div class="projects-one--two__content">
                                <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape1.png')}}" alt="#">
                                </div>
                                <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape2.png')}}" alt="#">
                                </div>
                                <div class="shape3"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape3.png')}}" alt="#">
                                </div>
                                <div class="shape4"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape4.png')}}" alt="#">
                                </div>
                                <div class="content-box">
                                    <p class="text1">Tech</p>
                                    <h3><a href="projects-details.html">Tech cover industry</a></h3>
                                    <p class="text2">There are many variations of passages </p>
                                </div>

                                <div class="btn-box">
                                    <a href="projects-details.html"><span class="text">Explore</span> <span
                                            class="icon icon-right-arrow3"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Projects One Single-->

                    <!--Start Projects One Single-->
                    <div class="col-xl-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="projects-one__single">
                            <div class="projects-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('dapafue/assets/images/project/projects-v2-img2.jpg')}}" alt="#">
                                </div>
                            </div>

                            <div class="projects-one--two__content">
                                <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape1.png')}}" alt="#">
                                </div>
                                <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape2.png')}}" alt="#">
                                </div>
                                <div class="shape3"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape3.png')}}" alt="#">
                                </div>
                                <div class="shape4"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape4.png')}}" alt="#">
                                </div>
                                <div class="content-box">
                                    <p class="text1">Development</p>
                                    <h3><a href="projects-details.html">Web Development</a></h3>
                                    <p class="text2">There are many variations of passages </p>
                                </div>

                                <div class="btn-box">
                                    <a href="projects-details.html"><span class="text">Explore</span> <span
                                            class="icon icon-right-arrow3"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Projects One Single-->

                    <!--Start Projects One Single-->
                    <div class="col-xl-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="projects-one__single">
                            <div class="projects-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('dapafue/assets/images/project/projects-v2-img3.jpg')}}" alt="#">
                                </div>
                            </div>

                            <div class="projects-one--two__content">
                                <div class="shape1"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape1.png')}}" alt="#">
                                </div>
                                <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape2.png')}}" alt="#">
                                </div>
                                <div class="shape3"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape3.png')}}" alt="#">
                                </div>
                                <div class="shape4"><img src="{{ asset('dapafue/assets/images/shapes/projects-v1-shape4.png')}}" alt="#">
                                </div>
                                <div class="content-box">
                                    <p class="text1">Design</p>
                                    <h3><a href="projects-details.html">Programming</a></h3>
                                    <p class="text2">There are many variations of passages </p>
                                </div>

                                <div class="btn-box">
                                    <a href="projects-details.html"><span class="text">Explore</span> <span
                                            class="icon icon-right-arrow3"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Projects One Single-->
                </div>
            </div>
        </section>
        <!--End Projects One-->

        <!--Start Cta One-->
        <section class="cta-one cta-one--two">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg')}});">
                    </div>
                    <div class="cta-one__text">
                        <h2>IT Services Customized for Your Agency</h2>
                    </div>

                    <div class="cta-one__btn">
                        <a href="#">View All Protfolio</a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta One-->

        <!--Start Services One-->
        <section class="services-one services-one--two">
            <div class="container">
                <div class="services-one__top">
                    <div class="sec-title">
                        <div class="sec-title__tagline">
                            <div class="inner">
                                <div class="round-box"><img src="{{ asset('dapafue/assets/images/shapes/sec-title-shape.png')}}" alt="#">
                                </div>
                                <div class="text">
                                    <p>Our Services</p>
                                </div>
                            </div>
                        </div>
                        <h2 class="sec-title__title">Providing complete <br>
                            Professional IT Services</h2>
                    </div>

                    <div class="services-one__top-text">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit asper
                            natur aut odit aut fugit, sed quia consequuntur magni dolor
                            qui ratione business</p>
                    </div>
                </div>

                <div class="row">
                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/services-v1-shape12.png')}}" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-server-data"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html">Tech Analysis</a></h2>
                                <p>There are many variations of passages of lorem Ipsum not simply random </p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/services-v1-shape12.png')}}" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-laptop"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html">IT Consultancy</a></h2>
                                <p>There are many variations of passages of lorem Ipsum not simply random </p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/services-v1-shape12.png')}}" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-hard-drive"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html">Data Structuring</a></h2>
                                <p>There are many variations of passages of lorem Ipsum not simply random </p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/services-v1-shape12.png')}}" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-marketing-analysis"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html">Market Analysis</a></h2>
                                <p>There are many variations of passages of lorem Ipsum not simply random </p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->
                </div>
            </div>
        </section>
        <!--End Services One-->



        <!--Start Support One-->
        <section class="support-one">
            <div class="shape4"><img src="{{ asset('dapafue/assets/images/shapes/support-v1-shape4.png')}}" alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Start Support One Img-->
                    <div class="col-xl-6">
                        <div class="support-one__img">
                            <div class="shape1 rotate-me"><img src="{{ asset('dapafue/assets/images/shapes/support-v1-shape1.png')}}" alt="#">
                            </div>
                            <div class="inner">
                                <img src="{{ asset('dapafue/assets/images/resources/support-v1-img1.jpg')}}" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--End Support One Img-->

                    <!--Start Support One Content-->
                    <div class="col-xl-6">
                        <div class="support-one__content">
                            <div class="shape2"><img src="{{ asset('dapafue/assets/images/shapes/support-v1-shape2.png')}}" alt="#"></div>
                            <div class="shape3"><img src="{{ asset('dapafue/assets/images/shapes/support-v1-shape3.png')}}" alt="#"></div>
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <div class="inner">
                                        <div class="round-box"><img src="{{ asset('dapafue/assets/images/shapes/sec-title-shape.png')}}"
                                                alt="#">
                                        </div>
                                        <div class="text">
                                            <p>Quality IT Support</p>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="sec-title__title">Improve Quality <br>
                                    with Technology</h2>
                            </div>

                            <div class="support-one__content-text1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Here's what to know about
                                    how to start a consulting business</p>
                            </div>

                            <div class="support-one__content-text2">
                                <div class="support-one__content-text2-single">
                                    <div class="icon-box">
                                        <span class="icon-buoy-help"></span>
                                    </div>
                                    <div class="text-box">
                                        <h3>Tech Solution</h3>
                                        <p>There are many variations <br>
                                            of passages of Lorem</p>
                                    </div>
                                </div>

                                <div class="support-one__content-text2-single mb0">
                                    <div class="icon-box">
                                        <span class="icon-buoy-help"></span>
                                    </div>
                                    <div class="text-box">
                                        <h3>IT Support</h3>
                                        <p>There are many variations <br>
                                            of passages of Lorem</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Support One Content-->
                </div>
            </div>
        </section>
        <!--End Support One-->


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
                    <h2 class="sec-title__title">Our Professional Team</h2>
                </div>
                <div class="row">
                    <!--Start Team One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('dapafue/assets/images/team/team-v1-img1.jpg')}}" alt="#">
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
                                <h2><a href="team-details.html">Adam Andeson</a></h2>
                                <p>Senior technician</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team One Single-->

                    <!--Start Team One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('dapafue/assets/images/team/team-v1-img2.jpg')}}" alt="#">
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
                                <h2><a href="team-details.html">Karim Malek</a></h2>
                                <p>Senior technician</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team One Single-->

                    <!--Start Team One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('dapafue/assets/images/team/team-v1-img3.jpg')}}" alt="#">
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
                                <h2><a href="team-details.html">Jafor Khalefa</a></h2>
                                <p>Senior technician</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team One Single-->

                    <!--Start Team One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('dapafue/assets/images/team/team-v1-img4.jpg')}}" alt="#">
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
                                <h2><a href="team-details.html">Wiliam Adam</a></h2>
                                <p>Senior technician</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team One Single-->

                </div>
            </div>
        </section>
        <!--End Team One-->






        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__bg" style="background-color: darkblue")>
            </div>
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">

                        <!--Start Footer One Single-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-one__single footer-one__about">
                                <div class="footer-one__about-logo">
                                    <a href="index.html"><img src="{{ asset('dapafue/assets/images/resources/footer-logo.png')}}" alt=""></a>
                                </div>

                                <div class="footer-one__about-text">
                                    <p>Over 20 years of experience we’ll ensure you get the best guidance.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Footer One Single-->



                        <!--Start Footer One Single-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-one__single footer-one__links">
                                <div class="title-box">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="footer-one__links-box">
                                    <ul class="footer-one__links-list">
                                        <li><a href="#">Join Us</a></li>
                                         <li><a href="about.html">About us</a> </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="editor.html">Editorial Board</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Footer One Single-->

                        <!--Start Footer One Single-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                            <div class="footer-one__single footer-one__newsletter">
                                <div class="title-box">
                                    <h3>Newsletter</h3>
                                </div>
                                <div class="footer-one__newsletter-box">
                                    <div class="footer-one__newsletter-text1">
                                        <p>Get the latest news other tips </p>
                                    </div>
                                    <form class="footer-one__newsletter-form">
                                        <div class="footer-one__newsletter-form-input-box">
                                            <div class="icon"><span class="icon-email2"></span></div>
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>

                                        <div class="footer-one__newsletter-btn">
                                            <button class="thm-btn" type="submit">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End Footer One Single-->
                    </div>
                </div>
            </div>

            <div class="footer-one__bottom" style="background-color:darkgreen">
                <div class="container">
                    <div class="row" >
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-left">
                                    <div class="title-box">
                                        <p>Social </p>
                                    </div>

                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer-one__bottom-right">
                                    <p>©2023 <a href="index.html"></a> All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!--End Footer One-->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('dapafue/assets/images/resources/footer-logo.png')}}"
                        width="143" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@ontech.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('dapafue/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/wow/wow.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/circleType/jquery.circleType.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{ asset('dapafue/assets/vendors/progress-bar/knob.js')}}"></script>

    <!-- template js -->
    <script src="{{ asset('dapafue/assets/js/ontech.js')}}"></script>
</body>


</html>
