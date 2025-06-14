@extends('front.master-contact')

@section('content')


    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Google Map Start -->
        <section class="map-bg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
        </section>
        <!-- Google Map Start -->

        <!-- Contact Details Start -->
        <section class="wide-tb-100 pos-rel">
            <div class="container">
                <div class="contact-map-bg option">
                    <img src="assets/images/map-bg.png" alt="">
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h2 class="h2-md mb-4 fw-7 txt-blue">Our Address</h2>
                        <!-- Contact Detail Left -->
                        <div class="contact-detail-shadow no-shadow mb-5 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                            {{-- <h4>US</h4> --}}
                            <div class="d-flex align-items-start items">
                                <i class="icofont-google-map"></i> <span>
                                    Address:
                                    3810 North Cherry Street
                                    Kansas City, MO 64116
                                </span>
                            </div>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-phone"></i> <span>+1 (816) 219-1494</span>
                            </div>
                            <div class="text-nowrap d-flex align-items-start items">
                                <i class="icofont-email"></i> <a href="#"><span>contact@bzlogistics.us</span></a>
                            </div>
                            <div class="text-nowrap d-flex align-items-start items">
                                <i class="icofont-email"></i> <a href="#"><span>hello@bzlogistics.us</span></a>
                            </div>
                        </div>
                        <!-- Contact Detail Left -->



                    </div>


                    <div class="col-md-8 col-sm-12">
                        <h2 class="h2-md mb-4 fw-7 txt-blue">Say Hello! Its Free</h2>
                        <div class="">

                            <div class="free-quote-form contact-page-option wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                                <form action="contact_process.php" method="post" id="contactoption" novalidate="novalidate" class="rounded-field">
                                    <div class="g-4 row mb-4">
                                        <div class="col-md mb-0">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="col-md mb-0">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="g-4 row mb-4">
                                        <div class="col-md mb-0">
                                            <textarea name="cment" rows="7" placeholder="Message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row text-center">

                                        <button name="contactoption" id="contactoption" type="submit" class="form-btn mx-auto btn-theme bg-orange">Submit Now <i class="icofont-rounded-right"></i></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Details End -->
    </main>

    <!-- Email Subscribe Start -->
    <section class="wide-tb-50 pb-0 bg-light-theme footer-subscribe">
        <div class="container wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <div class="row">
                <div class="col-sm-12 d-flex col-md-12 col-lg-6 offset-lg-3">
                    <div class="d- align-items-center d-sm-inline-flex  w-100">
                        <div class="head">
                            <span class="d-block">SUBSCRIBE For</span> NEWSLETTER
                        </div>
                        <form class="flex-nowrap col ms-3">
                            <input type="text" class="form-control" placeholder="Enter order number">
                                <button type="submit" class="btn-theme bg-navy-blue">Check Now <i class="icofont-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Email Subscribe End -->

@endsection
