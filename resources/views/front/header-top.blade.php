    <header class="header-two header-logo-top">
        <div class="top-bar d-flex align-items-center text-md-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 d-flex col-6">
                        <a class="navbar-brand rounded-bottom light-bg" href="{{url('/')}}">
                            <img src="{{asset('uploads/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-auto ms-auto">

                        <div class="d-inline-flex align-items-center">
                            <div class="top-text">
                                <small class="txt-ligt-gray">Address</small>
                                <span class="fw-7 txt-blue">
                                    {{-- 3601 North 110 Service Road West, <br>
                            Kansas City, MO 64116 --}}
                            3810 North Cherry Street <br>Kansas City, MO 64116
                                </span>
                            </div>
                            <div class="top-text">
                                <small class="txt-ligt-gray">Emaii Us</small>
                                <span class="fw-6 txt-blue"><a href="mailto:contact@cptrucking.us" class="txt-blue"><span class="__cf_email__" data-cfemail="32414742425d4046725e5d554857571c515d5f">contact@cptrucking.us</span></a></span>
                            </div>
                            <div class="top-text">
                                <small class="txt-ligt-gray">Phone Number</small>
                                <span class="fw-7 txt-blue">+1 (816) 219-1494</span>
                            </div>

                            <!-- Topbar Language Dropdown Start -->
                            <div class="dropdown d-inline-flex lang-toggle order-lg-last ms-3">
                                <a href="#" class="dropdown-toggle btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/us.svg" alt="" class="dropdown-item-icon">
                                    <span class="d-inline-block d-lg-none">US</span>
                                    <span class="d-none d-lg-inline-block">United States</span> <i class="icofont-rounded-down"></i>
                                </a>
                                <div class="dropdown-menu dropdownhover-bottom dropdown-menu-end" role="menu">
                                    <a class="dropdown-item active" href="#">English</a>
                                    <a class="dropdown-item" href="#">Deutsch</a>
                                    <a class="dropdown-item" href="#">Español&lrm;</a>
                                </div>
                            </div>
                            <!-- Topbar Language Dropdown End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation Start -->
        <!-- Main Navigation Start -->
        <nav class="navbar navbar-expand-lg header-fullpage nav-light">
            <div class="container text-nowrap bdr-nav">
                <span class="order-lg-last d-inline-flex request-btn">
                    <a class="nav-link" href="#" id="search_home"><i class="icofont-search"></i></a>
                </span>


                <div class="d-inline-flex request-btn order-lg-last">
                    <a class="btn-theme icon-left bg-orange no-shadow d-none d-lg-inline-block align-self-center blue-outline" href="#" role="button" data-bs-toggle="modal" data-bs-target="#request_popup"><i class="icofont-page"></i>Get a Freight Quote</a>
                </div>
                <!-- Topbar Request Quote Start -->

                <!-- Toggle Button Start -->
                <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Toggle Button End -->

                <!-- Topbar Request Quote End -->

                <div class="navbar-collapse offcanvas offcanvas-start offcanvas-collapse" id="navbarCollapse">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_footer.svg" alt=""></a>
                        <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="icofont-close-line"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body w-100" data-lenis-prevent="">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{url('/')}}" >Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">Services <i class="icofont-rounded-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Drayage & Intermodal</a></li>
                                    <li><a class="dropdown-item" href="#">Over the Road</a></li>
                                    <li><a class="dropdown-item" href="#">Transload & Warehousing</a></li>
                                    <li><a class="dropdown-item" href="#">Specialized </a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">Shipper <i class="icofont-rounded-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Full Truckload</a></li>
                                    <li><a class="dropdown-item" href="#">Less than Truckload</a></li>
                                    <li><a class="dropdown-item" href="#">Expedited</a></li>
                                    <li><a class="dropdown-item" href="#">Drayage </a></li>
                                    <li><a class="dropdown-item" href="#">Final Mile</a></li>
                                    <li><a class="dropdown-item" href="#">Heavy Haul Trucking</a></li>
                                    <li><a class="dropdown-item" href="#">Warehousing & Storage</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" >Carriers</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">The Company <i class="icofont-rounded-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/')}}/about-us">About Us</a></li>
                                    <li><a class="dropdown-item" href="#">Careers</a></li>
                                    <li><a class="dropdown-item" href="#">Resources</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">Contact Us <i class="icofont-rounded-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/')}}/contact-us">Contact Us</a></li>
                                    <li><a class="dropdown-item" href="#">Locations</a></li>
                                    <li><a class="dropdown-item" href="#">Global Networks</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>


            </div>
        </nav>
        <!-- Main Navigation End -->
        <!-- Main Navigation End -->
    </header>
