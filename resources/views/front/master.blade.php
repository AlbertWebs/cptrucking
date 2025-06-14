<!doctype html>
<html lang="en">

<head>
    <!-- xxx Basics xxx -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- xxx Favicon xxx -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>BZ Logistics LLC - Logistics & Supply Chain Solutions</title>

    <!-- Meta Tags for SEO -->
    <meta name="author" content="BZ Logistics LLC">
    <meta name="description" content="BZ Logistics LLC provides top-notch logistics, supply chain management, and transportation services for businesses. Get reliable and efficient shipping and logistics solutions.">
    <meta name="keywords" content="BZ LOGISTICS, logistics, supply chain, transportation, shipping, freight, warehousing, trucking, cargo, logistics solutions, corporate services, expedition, freight services, transport, packaging, warehousing solutions">

    <!-- Open Graph (OG) Meta Tags -->
    <meta property="og:title" content="BZ Logistics LLC - Logistics & Supply Chain Solutions">
    <meta property="og:description" content="BZ Logistics LLC offers reliable logistics and supply chain management services tailored to your business needs. Contact us for efficient freight and transportation solutions.">
    <meta property="og:url" content="https://www.bzlogistics.us">
    <meta property="og:image" content="https://www.bzlogistics.us/path/to/your/logo-or-image.jpg')}}"> <!-- Replace with your image URL -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="BZ Logistics LLC">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bzlogistics">
    <meta name="twitter:title" content="BZ Logistics LLC - Logistics & Supply Chain Solutions">
    <meta name="twitter:description" content="BZ Logistics LLC specializes in logistics, freight, transportation, and supply chain management. Efficient, reliable, and cost-effective services tailored for your business needs.">
    <meta name="twitter:image" content="https://www.bzlogistics.us/path/to/your/logo-or-image.jpg')}}"> <!-- Replace with your image URL -->
    <meta name="twitter:creator" content="@bzlogistics">

    <!-- Contact Information -->
    <meta name="contact:email" content="contact@bzlogistics.us">
    <meta name="contact:phone" content="+1 (816) 219-1494">

    <!-- xxx Favicon xxx -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/favicon.png')}}">

    <!-- Main Style CSSS -->
    <link href="{{asset('theme/assets/css/theme-plugins.min.css')}}" rel="stylesheet">
    <!-- Main Theme CSS -->
    <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive Theme CSS -->
    <link href="{{asset('theme/assets/css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

    <!-- Page loader Start -->
    <div id="pageloader">
        <div class="loader-item">
            <div class="loader">
                <div class="spin"></div>
                <div class="bounce"></div>
            </div>
        </div>
    </div>
    <!-- Page loader End -->

  @include('front.header-top')


    @yield('content')



      <!-- Main Footer Start -->
      <footer class="wide-tb-70 bg-light-theme pb-0">
        <div class="container">
            <div class="row">

                <!-- Column First -->
                <div class="col-lg-3 col-md-6">
                    <div class="logo-footer">
                        <img src="{{asset('uploads/logo.png')}}" alt="">
                    </div>
                    <p>At BZ Logistics, we are a leading shipping brokerage connecting customers with trusted shippers worldwide.</p>

                    <h3 class="footer-heading">We're Social</h3>
                    <div class="social-icons">
                        <a href="#"><i class="icofont-facebook"></i></a>
                        <a href="#"><i class="icofont-twitter"></i></a>
                        <a href="#"><i class="icofont-whatsapp"></i></a>
                        <a href="#"><i class="icofont-youtube-play"></i></a>
                    </div>
                </div>
                <!-- Column First -->

                <!-- Column Second -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-heading">Quick Navigation</h3>
                    <div class="footer-widget-menu">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Home</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>About us</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Services</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Support</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Column Second -->

                 <!-- Column Second -->
                 <div class="col-lg-3 col-md-6">
                    <h3 class="footer-heading">Legal Links</h3>
                    <div class="footer-widget-menu">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Terms and Conditions</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Privacy Policy</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Cookies</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Copyright</span></a></li>

                        </ul>
                    </div>
                </div>
                <!-- Column Second -->

                <!-- Column Third -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-heading">Get In Touch</h3>
                    <div class="footer-widget-contact">
                        <div class="media mb-3">
                            <i class="icofont-google-map me-3"></i>
                            <div class="media-body">
                                {{-- 3601 North 110 Service Road West, <br>Kansas City, MO 64116 --}}
                                3810 North Cherry Street <br>Kansas City, MO 64116

                            </div>
                        </div>
                        <div class="media mb-3">
                            <i class="icofont-smart-phone me-3"></i>
                            <div class="media-body">
                                <div>+1 (816) 219-1494 </div>

                            </div>
                        </div>
                        <div class="media mb-3">
                            <i class="icofont-ui-email me-3"></i>
                            <div class="media-body">
                                <div><a href="mailto:contact@bzlogistics.us"><span class="__cf_email__" data-cfemail="9ef7f0f8f1def2f1f9e4fbfbb0fdf1f3">contact@bzlogistics.us</span></a></div>
                                {{-- <div><a href="mailto:contact@bzlogistics.us"><span class="__cf_email__" data-cfemail="80f3f5f0f0eff2f4c0ecefe7fae5e5adf4e5e1edaee3efed">contact@bzlogistics.us</span></a></div> --}}
                            </div>
                        </div>
                        <div class="media mb-3">
                            <i class="icofont-clock-time me-3"></i>
                            <div class="media-body">
                                <div><strong>Mon - Fri</strong></div>
                                <div>10:00 Am - 6:00 PM EST</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column Third -->





            </div>
        </div>

        <div class="copyright-wrap bg-navy-blue wide-tb-30">
            <div class="container">
                <div class="row text-md-start text-center">
                    <div class="col-sm-12 col-md-6 copyright-links">
                        <a href="#">Privacy Policy</a> <span>|</span> <a href="#">Terms and Conditions</a> <span>|</span> <a href="#">Shipping Policies</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-md-end text-center">
                        Copyright © <span id="yearText"></span> BZ Logistics | All Rights Reserved Powered by <a href="#" rel="nofollow">Designekta Studios</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer End -->


    <div class="video-box">
        <!-- close-video -->
        <div class="close-video">
            <i class="icofont-close-line"></i>
        </div><!-- /close-video -->
    </div><!-- /video-box -->

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                    <div class="col-auto">
                        <i class="icofont-search"></i>
                    </div>
                    <div class="col">
                        <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-auto">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Popup End -->

    <!-- Request Modal -->
    <div class="modal fade" id="request_popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered request_popup modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body p-0" data-lenis-prevent="">
                    <!-- Contact Details Start -->
                    <section class="pos-rel bg-light-gray">
                        <div class="container-fluid p-0">
                            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="icofont-close-line"></i>
                            </a>
                            <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md">
                                <div class="col bg-fixed bg-img-7 request_pag_img">
                                    &nbsp;
                                </div>


                                <div class="col-lg-7 col-12">
                                    <div class="form-content">
                                        <h2 class="h2-xl mb-4 fw-6 txt-orange">Request A Quote</h2>
                                        <form action="#" method="post" novalidate="novalidate" class="rounded-field">

                                            <div class="row g-3 mb-4">
                                                <div class="col-md">
                                                    <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                                                        <option value="">Freight Type</option>
                                                        <option value="Type 1">Type 1</option>
                                                        <option value="Type 2">Type 2</option>
                                                        <option value="Type 3">Type 3</option>
                                                        <option value="Type 4">Type 4</option>
                                                    </select>
                                                </div>
                                                <div class="col-md">
                                                    <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                                                        <option value="">Incoterms</option>
                                                        <option value="Type 1">Type 1</option>
                                                        <option value="Type 2">Type 2</option>
                                                        <option value="Type 3">Type 3</option>
                                                        <option value="Type 4">Type 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-4">
                                                <div class="col-md">
                                                    <input type="text" name="name" class="form-control" placeholder="City of departure">
                                                </div>
                                                <div class="col-md">
                                                    <input type="text" name="email" class="form-control" placeholder="Delivery city">
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-4">
                                                <div class="col-md">
                                                    <input type="text" name="name" class="form-control" placeholder="Total gross weight (KG)">
                                                </div>
                                                <div class="col-md">
                                                    <input type="text" name="email" class="form-control" placeholder="Dimension">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md">
                                                    <div class="center-head"><span class="bg-light-gray txt-orange">Your
                                                            Personal Details</span></div>
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-4">
                                                <div class="col-md">
                                                    <input type="text" name="name" class="form-control mb-3" placeholder="Your Name">
                                                    <input type="text" name="name" class="form-control mb-3" placeholder="Email">
                                                    <input type="text" name="name" class="form-control" placeholder="Phone Number">
                                                </div>
                                                <div class="col-md">
                                                    <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col pt-3">
                                                    <button type="submit" class="form-btn btn-theme bg-orange">Send
                                                        Message <i class="icofont-rounded-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Contact Details End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Request Modal -->

    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
    <!-- Back To Top End -->



    <!-- Jquery Library JS -->
    <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/theme-plugins.min.js')}}"></script>
    <script src="{{asset('theme/assets/twitter/jquery.tweet.js')}}"></script>

    <script src="{{asset('theme/assets/js/site-custom.js')}}"></script>

    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                "use strict";

                // DATA BACKGROUND IMAGE
                var pageSection = $(".bg-image");
                pageSection.each(function (indx) {
                    if ($(this).attr("data-background")) {
                        $(this).css("background-image", "url(" + $(this).data("background") + ")");
                    }
                });
            });

            // SLIDER
            var menu = [];
            jQuery('.swiper-slide').each(function (index) {
                menu.push(jQuery(this).find('.slide-inner').attr("data-text"));
            });
            var interleaveOffset = 0.5;
            var swiperOptions = {
                loop: true,
                speed: 1000,
                parallax: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                grabCursor: true,
                watchSlidesProgress: true,
                pagination: {
                    el: '.swiper-custom-pagination',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (menu[index]) + '</span>';
                    },
                },
                on: {
                    progress: function () {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            var slideProgress = swiper.slides[i].progress;
                            var innerOffset = swiper.width * interleaveOffset;
                            var innerTranslate = slideProgress * innerOffset;
                            swiper.slides[i].querySelector(".slide-inner").style.transform =
                                "translate3d(" + innerTranslate + "px, 0, 0)";
                        }
                    },
                    touchStart: function () {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.slides[i].style.transition = "";
                        }
                    },
                    setTransition: function (speed) {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.slides[i].style.transition = speed + "ms";
                            swiper.slides[i].querySelector(".slide-inner").style.transition =
                                speed + "ms";
                        }
                    }
                }
            };
            var swiper = new Swiper(".swiper-container", swiperOptions);
        })(jQuery);
    </script>
</body>

</html>
