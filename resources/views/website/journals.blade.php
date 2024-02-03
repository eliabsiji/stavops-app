@extends('website.inc.master')
@section('content')
<section class="shop-page">
    <div class="container">
        <div class="shop-page__top">
            <div class="shop-page__top-inner">
                <div class="shop-page__top-left">
                    <p>Showing 12 of 120 results</p>
                </div>

            </div>
        </div>

        <div class="row">

            <!--Start Shop Page Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                <div class="shop-page__single">
                    <div class="shop-page__single-img">
                        <img src=" {{ asset('dapafue/assets/images/shop/shop-v1-img1.jpg') }}" alt="#">

                    </div>
                    <div class="shop-page__single-content">

                        <div class="bottom-text">
                            <div class="text-box text-center">
                                <h4><a href="shop-details.html">Mike and honey</a></h4>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--End Shop Page Single-->



        </div>
        {{-- <ul class="styled-pagination text-center clearfix">
            <li class="prev"><a href="#">prev</a>
            </li>
            <li><a href="#" class="active">01</a></li>
            <li><a href="#">02</a></li>
            <li><a href="#">03</a></li>;
            <li class="next"><a href="#">next</a>
            </li>
        </ul> --}}
    </div>
</section>

@endsection
