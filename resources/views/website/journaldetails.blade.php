@extends('website.inc.master')
@section('content')
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="page-header__gradient"
            style="background-image: url(assets/images/backgrounds/page-header-gradient-bg.png);"></div>
        <div class="shape1 float-bob-x"><img src="assets/images/shapes/page-header-shape1.png" alt="#"></div>

        <div class="container">
            <div class="page-header__inner text-center">
                <h2>Shop Details</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Shop Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Shop Details-->
    <section class="shop-details">
        <div class="container">
            <div class="row">
                <!--Start Shop Details Img Box-->
                <div class="col-xl-6">
                    <div class="shop-details__img-box">
                        <div class="shop-details__img-box-inner">
                            <div class="shop-details__img-box-thumb">
                                <div class="swiper-container" id="shop-details-one__thumb">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="shop-details__img-box-thumb-img">
                                                <img src="assets/images/shop/shop-details-img1.jpg" alt="#">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="shop-details__img-box-thumb-img">
                                                <img src="assets/images/shop/shop-details-img2.jpg" alt="#">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="shop-details__img-box-thumb-img">
                                                <img src="assets/images/shop/shop-details-img3.jpg" alt="#">
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                </div>

                            </div>

                            <div class="shop-details__img-box-img">
                                <div class="swiper-container" id="shop-details-one__carousel">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <img src="assets/images/shop/shop-details-img4.jpg" alt="#">
                                            </div>
                                        </div><!-- /.swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <img src="assets/images/shop/shop-details-img5.jpg" alt="#">
                                            </div>
                                        </div><!-- /.swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <img src="assets/images/shop/shop-details-img6.jpg" alt="#">
                                            </div>
                                        </div><!-- /.swiper-slide -->

                                    </div>
                                </div>

                                <div class="shop-details-top__nav">
                                    <div class="swiper-button-prev" id="shop-details-top__swiper-button-next">
                                        <i class="icon-down-arrow angle-left"></i>
                                    </div>
                                    <div class="swiper-button-next" id="shop-details-top__swiper-button-prev">
                                        <i class="icon-down-arrow angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Shop Details Img Box-->

                <!--Start Shop Details Content-->
                <div class="col-xl-6 ">
                    <div class="shop-details__content">
                        <div class="title">
                            <h2>Cereal Book</h2>
                        </div>

                        <div class="shop-details__content-text1">
                            <h3>$250.00 <del>$400.00</del> <span class="text">-30%</span> <span class="text2">(In
                                    stock)</span>
                            </h3>
                        </div>

                        <div class="shop-details__review">
                            <ul>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="icon-star2"></span></li>
                                <li>
                                    <p>(5 Customer Review)</p>
                                </li>
                            </ul>
                        </div>

                        <div class="shop-details__content-text2">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which
                                don't look even slightly believable. </p>

                            <ul>
                                <li>
                                    <p> <span class="icon-tick"></span> Excellent audio performance</p>
                                </li>

                                <li>
                                    <p> <span class="icon-tick"></span>Lorem ipsum available, but the majority have
                                        suffered.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="shop-details__content-text3">
                            <div class="title">
                                <p>Quantity</p>
                            </div>
                            <div class="inner">
                                <div class="product-quantity">
                                    <div class="product-quantity-box">
                                        <div class="input-box">
                                            <input class="quantity-spinner" type="text" value="1" name="quantity">
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-box">
                                    <a href="#">Add to Cart</a>
                                </div>

                                <div class="icon-box">
                                    <span class="fa fa-heart"></span>
                                </div>
                            </div>
                        </div>


                        <div class="shop-details__content-text4">
                            <ul>
                                <li>
                                    <div class="text">
                                        <p> <i class="icon-tick"></i> <span>Estimated Delivery:</span> 60-60 days
                                            Ships to Bangladesh</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="text">
                                        <p> <i class="icon-tick"></i> <span>Free Shipping :</span> From China to
                                            Bangladesh via Super Economy
                                            Global</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="shop-details__content-social-links">
                            <div class="title">
                                <h4>Share:</h4>
                            </div>

                            <ul>
                                <li>
                                    <a href="#"><span class="fab fa-facebook"></span></a>
                                </li>

                                <li>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>

                                <li>
                                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                </li>

                                <li>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Shop Details Content-->
            </div>

            <!--Start Shop Details Tab-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-details__tab tabs-box">
                        <div class="shop-details__tab-button">
                            <ul class="tab-buttons clearfix">
                                <li data-tab="#description" class="tab-btn active-btn">
                                    <h4>Description</h4>
                                </li>
                                <li data-tab="#specifications " class="tab-btn">
                                    <h4>Specifications</h4>
                                </li>
                                <li data-tab="#reviews" class="tab-btn">
                                    <h4>Reviews (1)</h4>
                                </li>
                            </ul>
                        </div>


                        <div class="tabs-content">
                            <!--Start Tab-->
                            <div class="tab active-tab" id="description">
                                <div class="shop-details__tab-content-item">
                                    <div class="shop-details__tab-description text-center">
                                        <div class="text-box1">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                                numquam eius modi tempora incidunt ut labore et dolore magnam
                                                aliquam quaerat voluptatem.</p>
                                        </div>
                                        <div class="text-box2">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                dicta sunt explicabo. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab-->

                            <!--Start Tab-->
                            <div class="tab" id="specifications">
                                <div class="shop-details__tab-content-item">
                                    <div class="shop-details__tab-specifications text-center">
                                        <div class="text-box1">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution
                                                of letters, as opposed to using 'Content here, content here', making
                                                it look like readable English. Many desktop publishing packages and
                                                web page editors now use Lorem Ipsum as their default model text,
                                            </p>
                                        </div>
                                        <div class="text-box2">
                                            <p>There are many variations of passages of Lorem Ipsum available, but
                                                the majority have suffered alteration in some form, by injected
                                                humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you
                                                need to be sure there isn't anything embarrassing hidden in the
                                                middle of text. All the Lorem Ipsum generators on the Internet tend
                                                to repeat predefined chunks as necessary, making this the first true
                                                generator on the Internet. It uses a dictionary of over 200 Latin
                                                words, combined with a handful of model sentence structures, to
                                                generate Lorem Ipsum which looks reasonable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab-->


                            <!--Start Tab-->
                            <div class="tab" id="reviews">
                                <div class="shop-details__tab-content-item style2">
                                    <div class="shop-details__tab-reviews">
                                        <!--Start Review Box Outer-->
                                        <div class="review-box-outer">
                                            <div class="row">
                                                <!--Start Single Review Box Outer-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-review-box-outer">
                                                        <div class="single-review-box">
                                                            <div class="img-box">
                                                                <img src="assets/images/resources/review-img1.jpg"
                                                                    alt="#">
                                                            </div>
                                                            <div class="text-box">
                                                                <div class="review-box">
                                                                    <ul>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h3>sourav ahamed, <span>21 Jul 2023</span></h3>
                                                                <p>Indignation and dislike men who are so
                                                                    beguiled
                                                                    and demoralized by the charms of pleasure.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Review Box Outer-->

                                                <!--Start Single Review Box Outer-->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="single-review-box-outer">
                                                        <div class="single-review-box">
                                                            <div class="img-box">
                                                                <img src="assets/images/resources/review-img2.jpg"
                                                                    alt="#">
                                                            </div>
                                                            <div class="text-box">
                                                                <div class="review-box">
                                                                    <ul>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                        <li><i class="icon-star1"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h3>Steven Rich, <span>22 Jul 2023</span></h3>
                                                                <p>Indignation and dislike men who are so
                                                                    beguiled
                                                                    and demoralized by the charms of pleasure.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Single Review Box Outer-->

                                            </div>
                                        </div>
                                        <!--End Review Box Outer-->


                                        <!--Start Review Form-->
                                        <div class="review-form text-right-rtl">
                                            <div class="title-box">
                                                <h2>Add Your Comments</h2>
                                            </div>
                                            <form id="review-form" action="#">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-box">
                                                            <div class="field-label">Comments</div>
                                                            <textarea name="fcomments" placeholder=""
                                                                required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="input-box">
                                                            <div class="field-label">Name*</div>
                                                            <input type="text" name="fname" placeholder=""
                                                                required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="input-box">
                                                            <div class="field-label">Email*</div>
                                                            <input type="email" name="femail" placeholder=""
                                                                required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="input-box">
                                                            <div class="field-label">Website</div>
                                                            <input type="text" name="fwebsite" placeholder=""
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="add-rating-box">
                                                            <div class="add-rating-title">
                                                                <p>Your Rating</p>
                                                            </div>
                                                            <div class="review-box">
                                                                <ul>
                                                                    <li><i class="icon-star1"></i></li>
                                                                    <li><i class="icon-star1"></i></li>
                                                                    <li><i class="icon-star1"></i></li>
                                                                    <li><i class="icon-star1"></i></li>
                                                                    <li><i class="icon-star1"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="button-box">
                                                            <div class="left">
                                                                <button class="thm-btn" type="submit">
                                                                    Submit
                                                                </button>
                                                            </div>

                                                            <div class="right">
                                                                <div class="checked-box2">
                                                                    <input type="checkbox" name="skipper1"
                                                                        id="skipper" checked="">
                                                                    <label for="skipper"><span></span>
                                                                        Save my name, email, and website in this
                                                                        browser
                                                                        for the next time I comment.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <!--End Review Form-->
                                    </div>
                                </div>
                            </div>
                            <!--End Tab-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Shop Details Tab-->
        </div>
    </section>
    <!--End Shop Details-->

@endsection
