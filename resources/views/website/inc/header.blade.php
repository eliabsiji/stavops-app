
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home </title>
    <!-- favicons Icons -->
    <link rel="shortcut icon" href="{{ asset('html/assets/assets/media/logos/favicon.png')}}"/>
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
                                                <a href="{{ route('home') }}">Home </a>
                                               </li>
                                               <li class="dropdown">
                                                <a href="#">Who We Are</a>
                                                <ul>
                                                    <li><a href="{{ route('mission') }}">Mission and Vission</a></li>
                                                    <li><a href="{{ route('conference') }}">Conference</a></li>
                                                    <li><a href="{{ route('editors') }}">Editorial Board</a> </li>
                                                </ul>
                                            </li>
                                               <li>
                                                <a href="{{ route('submission') }}">Paper Submission</a>
                                            </li>
                                            <li><a href="{{ route('journals') }}">Journals</a></li>

                                            <li class="dropdown">
                                                <a href="#">Join Us</a>
                                                <ul>
                                                    <li><a href="/login">Sign In</a></li>
                                                    <li><a href="#">Register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
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

