@extends('front.master')

@section('content')
  <!-- Fullscreen Slider Start -->
  <div class="slider bg-navy-blue home">
    <section class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{asset('theme/assets/images/banner_slider_4.jpg')}}" data-text="How We Work<span>For Your Pickup</span>">
                        <div class="container">
                            <h6 data-swiper-parallax="100">From Pickup to Destination</h6>
                            <h2 data-swiper-parallax="200" class="hero-h1">We Are BZ Logistics</h2>
                            <p data-swiper-parallax="300" class="hero-paragraph">
                                Streamline your entire shipping process from any port to your porch with BZ Logistics' dedicated experts and innovative, cutting-edge industry technology solutions
                            </p>
                            <div class="clearfix"></div>
                            <a href="#" class="btn-theme bg-orange blue-outline" data-swiper-parallax="200">Learn More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{asset('theme/assets/images/banner_slider_3.jpg')}}" data-text="Large Mass<span>Of Transportation</span>">
                        <div class="container">
                            <h6 data-swiper-parallax="100">From Pickup to Destination</h6>
                            <h2 data-swiper-parallax="200" class="hero-h1">Ship with confidence.</h2>
                            <p data-swiper-parallax="300" class="hero-paragraph">
                                Streamline your entire shipping process from any port to your porch with BZ Logistics' dedicated experts and innovative, cutting-edge industry technology solutions
                            </p>
                            <div class="clearfix"></div>
                            <a href="#" class="btn-theme bg-orange blue-outline" data-swiper-parallax="200">Learn More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{asset('theme/assets/images/banner_slider_2.jpg')}}" data-text="Always On<span>Time Delivery</span>">
                        <div class="container">
                            <h6 data-swiper-parallax="100">From Pickup to Destination</h6>
                            <h2 data-swiper-parallax="200" class="hero-h1">Deliver with assurance.</h2>
                            <p data-swiper-parallax="300" class="hero-paragraph">
                                Optimize your full shipping experience from any port to your porch with BZ Logistics' skilled professionals and groundbreaking, high-tech industry technology solutions.
                            </p>
                            <div class="clearfix"></div>
                            <a href="#" class="btn-theme bg-orange blue-outline" data-swiper-parallax="200">Learn More</a>
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-custom-pagination"></div>
            <!-- end swiper-custom-pagination -->
        </div>
        <!-- end swiper-container -->
    </section>
    <!-- end slider -->
</div>
<!-- Fullscreen Slider End -->

<!-- Main Body Content Start -->
<main id="body-content">

     <!-- What We Offer Start -->
     <section class="wide-tb-80 bg-fixed what-we-offer">
        <div class="container pos-rel">
            <div class="row align-items-center">

                <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <h2 class="mb-4 fw-7 txt-blue">
                        About <span class="fw-6 txt-orange ">BZ Logistics</span>
                    </h2>

                    <p class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
                        At BZ Logistics, we are a leading shipping brokerage connecting customers with trusted shippers worldwide. With extensive industry experience, we simplify both international and domestic shipping, providing efficient, reliable, and cost-effective solutions tailored to our clients' needs.
                    </p>
                    <p class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.4s">
                        Our expert team offers personalized service, guiding customers through every stage of their shipping journey. Whether you're shipping small parcels or large freight, we use innovative technology and industry insights to find the best solutions for you.
                    </p>
                    <p class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.6s">
                        We are dedicated to building lasting relationships with both customers and shippers. Through transparent communication and expert advice, we foster trust and ensure that your shipments always reach their destination safely and on time.
                    </p>
                </div>


                <div class="col-md-6">

                </div>

            </div>

        </div>
    </section>
    <!-- What We Offer End -->
     <!-- What Makes Us Special Start -->
     <section class="bg-light-theme wide-tb-100 pb-0">
        <div class="container pos-rel">
            <div class="row">
                <!-- Heading Main -->
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main ">
                        <span>Our Core Values</span>
                        Why Choose Us
                    </h1>
                </div>
                <!-- Heading Main -->

                <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                    <!-- Icon Box 2 -->
                    <a href="service-details.html">
                        <div class="icon-box-4 h-100">
                            <i class="icofont-airplane-alt"></i>
                            <h4 class="h4-md mb-3">Reliability</h4>
                            <p>
                                At BZ Logistics, we prioritize dependability in every aspect of our service. We are committed to ensuring that every shipment reaches its destination on time and in perfect condition, giving our clients the confidence they need to trust us with their logistics needs.
                            </p>
                        </div>
                    </a>
                    <!-- Icon Box -->
                </div>


                <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                    <!-- Icon Box 2 -->
                    <a href="service-details.html">
                        <div class="icon-box-4 h-100">
                            <i class="icofont-fire-truck"></i>
                            <h4 class="h4-md mb-3">Customer-Centricity</h4>
                            <p>
                                Our clients are at the heart of everything we do. We listen to their needs, provide tailored solutions, and offer personalized support throughout the shipping process. Our goal is to build long-term relationships by delivering exceptional service and exceeding expectations.
                            </p>
                        </div>
                    </a>
                    <!-- Icon Box -->
                </div>


                <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s">
                    <!-- Icon Box 2 -->
                    <a href="service-details.html">
                        <div class="icon-box-4 h-100">
                            <i class="icofont-ship"></i>
                            <h4 class="h4-md mb-3">Innovation</h4>
                            <p>
                                We embrace the latest technology and industry advancements to continuously improve our processes and offer cutting-edge solutions. By staying ahead of the curve, BZ Logistics is able to provide efficient, cost-effective shipping options that meet the evolving needs of our clients and the global marketplace.
                            </p>
                        </div>
                    </a>
                    <!-- Icon Box -->
                </div>

                <div class="text-center btn-center mx-auto">
                    <a href="#" class="btn-theme bg-navy-blue">Request Quote <i class="icofont-rounded-right"></i></a>
                </div>

            </div>

        </div>
    </section>
    <!-- What Makes Us Special End -->
    <!-- Clients Start -->
    <section class="wide-tb-100">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 wow slideInDown" data-wow-duration="0" data-wow-delay="0.1s">
                    <div class="owl-carousel owl-theme" id="home-clients">

                        <!-- Client Logo -->
                        <div class="item bg-light-theme">
                            <img src="{{asset('theme/assets/images/clients/client1.png')}}" alt="">
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item bg-light-theme">
                            <img src="{{asset('theme/assets/images/clients/client2.png')}}" alt="">
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item bg-light-theme">
                            <img src="{{asset('theme/assets/images/clients/client3.png')}}" alt="">
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item bg-light-theme">
                            <img src="{{asset('theme/assets/images/clients/client4.png')}}" alt="">
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item bg-light-theme">
                            <img src="{{asset('theme/assets/images/clients/client5.png')}}" alt="">
                        </div>
                        <!-- Client Logo -->

                        <!-- Client Logo -->
                        <div class="item bg-light-theme">
                            <img src="{{asset('theme/assets/images/clients/client6.png')}}" alt="">
                        </div>
                        <!-- Client Logo -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients End -->

      <!-- Tracking Your Freight Start -->
      <section class="wide-tb-100 bg-fixed pos-rel tracking parallax">
        <div class="bg-overlay black opacity-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 mx-auto">

                    <!-- Heading Main -->
                    <h1 class="heading-main parallax-head wow fadeInDown" data-wow-duration="0" data-wow-delay="0">
                        <span>get updates</span>
                        Tracking Your Freight
                    </h1>
                    <!-- Heading Main -->

                    <!-- Tracking Form -->
                    <form class="form-inline wow fadeInUp mt-4 mt-lg-0" data-wow-duration="0" data-wow-delay="0.2">
                        <input type="text" class="form-control mb-2 me-sm-2 col" placeholder="Enter order number">
                        <button type="submit" class="btn btn-theme bg-white mb-2 ml-3 bordered">Check Now <i class="icofont-rounded-right"></i></button>
                    </form>
                    <!-- Tracking Form -->

                </div>
            </div>
        </div>
    </section>
    <!-- Tracking Your Freight End -->



    <!-- Google Map Start -->
    {{-- <section class="map-bg-with-contact ">
        <div class="container pos-rel">
            <div class="contact-details-on-map">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Germany</h4>
                        <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
                        <div class="text-nowrap"><i class="icofont-email"></i> <a href="#"><span class="__cf_email__" data-cfemail="482f2d3a252926310824272f322d2d662b2725">[email&#160;protected]</span></a></div>
                    </div>
                    <div class="col-md-6">
                        <h4>Spain</h4>
                        <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
                        <div class="text-nowrap"><i class="icofont-email"></i> <a href="#"><span class="__cf_email__" data-cfemail="ff8c8f9e9691bf939098859a9ad19c9092">[email&#160;protected]</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map-holder" class="pos-rel">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
        </div>
    </section> --}}
    <!-- Google Map Start -->

</main>
@endsection
