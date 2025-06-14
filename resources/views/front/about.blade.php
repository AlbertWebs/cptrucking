@extends('front.master-about')

@section('content')


    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- What Makes Us Special Start -->
        <section class="wide-tb-80">
            <div class="container pos-rel">
                <div class="row align-items-center">

                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                        <h2 class="mb-4 fw-7 txt-blue">
                            About <span class="fw-6 txt-orange">BZ Logistics</span>
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


                    <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
                        <img src="{{asset('theme/assets/images/map-bg-orange.jpg')}}" alt="">
                    </div>

                </div>

            </div>
        </section>
        <!-- What Makes Us Special End -->

        <!-- What Makes Us Special Start -->
        <section class="bg-light-gray wide-tb-100 pb-5 why-choose">
            <div class="container pos-rel">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main">
                            <span>Our Goodness</span>
                            What Makes Us Special
                        </h1>
                    </div>
                    <!-- Heading Main -->

                    <!-- Icon Box 2 -->
                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="icon-box-2">
                            <div class="media">
                                <div class="service-icon">
                                    <i class="icofont-id"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Reliable, On-Time Delivery</h4>
                                    <p>
                                        We understand that timing is everything. Our team works around the clock to ensure your freight arrives safely and on schedule—every time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->

                    <!-- Icon Box 2 -->
                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="icon-box-2">
                            <div class="media">
                                <div class="service-icon">
                                    <i class="icofont-live-support"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Customized Logistics Solutions</h4>
                                    <p>
                                        No two businesses are the same. That’s why we tailor our services to fit your unique transportation needs, optimizing routes, costs, and efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->

                    <!-- Icon Box 2 -->
                    <div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                        <div class="icon-box-2">
                            <div class="media">
                                <div class="service-icon">
                                    <i class="icofont-history"></i>
                                </div>
                                <div class="service-inner-content media-body">
                                    <h4 class="h4-md">Advanced Technology & Real-Time Tracking</h4>
                                    <p>
                                        Stay in the loop with our cutting-edge tracking systems and logistics tools that provide full visibility from pickup to delivery.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Icon Box -->
                </div>

            </div>
        </section>
        <!-- What Makes Us Special End -->

        <!-- Client Testimonials Start -->
        <section class="wide-tb-60 p-0 bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 wow pulse animated" data-wow-duration="0" data-wow-delay="0.7s">
                        <div class="bg-fixed pos-rel video-popup">
                            <div class="bg-overlay black opacity-50"></div>
                            <div class="zindex-fixed pos-rel">
                                {{-- <a href="#" class="play-video"><i class="icofont-play icofont-4x"></i></a> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Client Testimonials End -->

        <!-- Counter Start -->
        <section class="wide-tb-100 mb-spacer-md">
            <div class="container wide-tb-100 pb-0">
                <div class="row d-flex align-items-center">
                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-google-map"></i></p>
                            <span class="counter">15</span>
                            <div>
                                Our Locations
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-globe"></i></p>
                            <span class="counter">110</span>
                            <span>+</span>
                            <div>
                                Clients Worldwide
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-30"></div>
                    <!-- Spacer For Medium -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.6s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-vehicle-delivery-van"></i></p>
                            <span class="counter">24</span>
                            <span>+</span>
                            <div>
                                Owned Vehicles
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.9s">
                        <div class="counter-style-1 light-bg">
                            <p class="mb-1"><i class="icofont-umbrella-alt"></i></p>
                            <span class="counter">2340</span>
                            <div>
                                Tonnes Transported
                            </div>
                        </div>
                    </div>
                    <!-- Counter Col End -->
                </div>
            </div>
        </section>
        <!-- Counter End -->

        <!-- Tracking Your Freight Start -->
        <section class="pos-rel bg-light-theme">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 p-0">
                        <img src="{{asset('theme/assets/images/why-choose-us.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-6 col-12">

                        <div class="p-5 about-whoose">
                            <!-- Heading Main -->
                            <h1 class="heading-main text-start mb-4">
                                <span>Why Choose</span>
                                BZ Logistics
                            </h1>
                            <!-- Heading Main -->

                            <!-- Tracking Form -->
                            <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0s"><i class="icofont-check"></i>Deliver Environmentally Responsible Client Services
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s"><i class="icofont-check"></i>Be an Active Community Partner</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s"><i class="icofont-check"></i>Drive Continuous Improvement</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.3s"><i class="icofont-check"></i>Clearance and compliance service</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s"><i class="icofont-check"></i>Clearance and compliance service</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.5s"><i class="icofont-check"></i>Maintain High Ethical Standards</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s"><i class="icofont-check"></i>Air & Ocean Cargo Insurance</li>
                                <li class="wow fadeInUp" data-wow-duration="0" data-wow-delay="0.7s"><i class="icofont-check"></i>We ensure complete security</li>
                            </ul>
                            <!-- Tracking Form -->
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Tracking Your Freight End -->



        <!-- Free Quote Start -->
        <section class="bg-white wide-tb-100 mb-spacer-md">
            <div class="container">
                <!-- Heading Main -->
                <div class="col-sm-12">
                    <h1 class="heading-main">
                        <span>Request a </span>
                        Free Quote
                    </h1>
                </div>
                <!-- Heading Main -->

                <div class="row">
                    <!-- Right Text Start -->
                    <div class="col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="align-self-stretch h-100 align-items-center d-flex bg-with-text">
                            Whether you require distribution or fulfillment, defined freight forwarding, or a complete
                            supply chain solution, we are here for you.
                        </div>
                    </div>
                    <!-- Right Text Start -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-30"></div>
                    <!-- Spacer For Medium -->

                    <div class="col-lg-8 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
                        <!-- Free Quote From -->
                        <form action="#" method="post" novalidate="novalidate" class="rounded-field gray-field">
                            <div class="row g-4 mb-4">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col">
                                    <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                                        <option value="">Transport Type</option>
                                        <option value="Type 1">Type 1</option>
                                        <option value="Type 2">Type 2</option>
                                        <option value="Type 3">Type 3</option>
                                        <option value="Type 4">Type 4</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                                        <option value="">Type of freight</option>
                                        <option value="Type 1">Type 1</option>
                                        <option value="Type 2">Type 2</option>
                                        <option value="Type 3">Type 3</option>
                                        <option value="Type 4">Type 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-4 mb-4">
                                <div class="col">
                                    <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-row text-center">
                                <button type="submit" class="form-btn mx-auto btn-theme bg-orange">Request Quote <i class="icofont-rounded-right"></i></button>
                            </div>
                        </form>
                        <!-- Free Quote From -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Free Quote End -->

        <!-- Clients Start -->
        <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <!-- Heading Main -->
                <div class="wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span>SOME OF OUR</span>
                        Clients
                    </h1>
                </div>
                <!-- Heading Main -->

                <div class="row">
                    <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{asset('theme/assets/images/clients/client1.png')}}" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{asset('theme/assets/images/clients/client2.png')}}" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{asset('theme/assets/images/clients/client3.png')}}" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{asset('theme/assets/images/clients/client4.png')}}" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{asset('theme/assets/images/clients/client5.png')}}" alt="">
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <img src="{{asset('theme/assets/images/clients/client6.png')}}" alt="">
                            </div>
                            <!-- Client Logo -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients End -->

       <!-- Frequently Asked Questions Start -->
        <section class="wide-tb-100 faqs">
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <h1 class="heading-main">
                            <span>Frequently Asked</span>
                            Questions
                        </h1>
                    </div>
                    <!-- Heading Main -->

                    <!-- FAQ Item -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <h4 class="h4-md mb-3">What services does BZ Logistics offer?</h4>
                        <p>We offer a full range of logistics services including freight transportation, supply chain management, route optimization, and real-time shipment tracking.</p>
                    </div>

                    <!-- FAQ Item -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <h4 class="h4-md mb-3">Can I track my shipment in real time?</h4>
                        <p>Yes! Our advanced tracking system allows you to monitor your shipment every step of the way, ensuring complete transparency and peace of mind.</p>
                    </div>

                    <!-- FAQ Item -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
                        <h4 class="h4-md mb-3">What industries do you serve?</h4>
                        <p>We serve a wide range of industries including retail, manufacturing, automotive, food and beverage, healthcare, and more.</p>
                    </div>

                    <!-- FAQ Item -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s">
                        <h4 class="h4-md mb-3">How do I get a quote for my shipment?</h4>
                        <p>You can request a quote by contacting us through our website, giving us a call, or emailing our team with your shipment details.</p>
                    </div>

                    <!-- FAQ Item -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.8s">
                        <h4 class="h4-md mb-3">Do you offer same-day or expedited shipping?</h4>
                        <p>Yes, we offer expedited and same-day delivery options depending on your location and shipment requirements. Contact us to learn more about availability.</p>
                    </div>

                    <!-- FAQ Item -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="1s">
                        <h4 class="h4-md mb-3">Is BZ Logistics licensed and insured?</h4>
                        <p>Absolutely. We are fully licensed, bonded, and insured to handle your freight with the highest standards of safety and compliance.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Frequently Asked Questions End -->


        <!-- Callout Start -->
        <section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
            <div class="bg-overlay blue opacity-60"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 mb-0 wow slideInUp" data-wow-duration="0" data-wow-delay="0.1s">
                        <h4 class="h4-xl">Interested in working with BZ Logistics?</h4>
                    </div>
                    <div class="col wow slideInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="center-text">
                            We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized
                            approach
                        </div>
                    </div>
                    <div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
                        <a href="#" class="btn btn-theme bg-white bordered">Get In Touch <i class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout End -->
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
