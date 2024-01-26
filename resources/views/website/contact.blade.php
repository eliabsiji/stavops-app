  @extends('website.inc.master')
  @section('content')
    <!--Start Contact Page-->
    <section class="contact-page">
        <div class="container">
            <div class="contact-page__top">
                <div class="title text-center">
                    <h3>Please don't hesitate to contact us <br> with any inquiries or messages.</h3>
                    <p>You can also reach out to us by phone or email are many variations</p>
                </div>

                <ul class="list-unstyled">
                    <!--Start Contact Page Top single-->
                    <li class="contact-page__top-single">
                        <div class="icon">
                            <span class="icon-location-filled"></span>
                        </div>
                        <div class="content">
                            <h2>Address</h2>
                            <p>Adeyemi College of Education Ondo, Ondo State Nigeria.
                                </p>
                        </div>
                    </li>
                    <!--End Contact Page Top single-->

                    <!--Start Contact Page Top single-->
                    <li class="contact-page__top-single">
                        <div class="icon">
                            <span class="icon-phone-auricular"></span>
                        </div>
                        <div class="content">
                            <h2>Get In Touch</h2>
                            <p>
                                <a href="tel:8801682648101">+234083673572656</a>
                                <a href="tel:00881745651">+234758947649843</a>
                            </p>
                        </div>
                    </li>
                    <!--End Contact Page Top single-->

                    <!--Start Contact Page Top single-->
                    <li class="contact-page__top-single">
                        <div class="icon">
                            <span class="icon-email2"></span>
                        </div>
                        <div class="content">
                            <h2>Email Address</h2>
                            <p>
                                <a href="mailto:info@da.com">Info24@gmail.com</a>
                                <a href="mailto:support24@gmail.com">Support24@gmail.com</a>
                            </p>
                        </div>
                    </li>
                    <!--End Contact Page Top single-->
                </ul>
            </div>

            <div class="contact-page__bottom">
                <div class="contact-page__bottom-pattern"
                    style="background-image: url(assets/images/pattern/contact-page-pattern.jpg);"> </div>
                <div class="contact-page__bottom-inner">
                    <form action="../../external.html?link=https://bracketweb.com/ontech-html/assets/inc/sendemail.php" class="contact-page__form contact-form-validated">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Mahfuz Riad" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="contact-page__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-page__input-box">
                                    <textarea name="message" placeholder="Your Message here "></textarea>
                                </div>
                                <div class="contact-page__btn">
                                    <button type="submit" class="thm-btn">
                                        Send A Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page-->
@endsection
