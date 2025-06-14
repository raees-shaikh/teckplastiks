

<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->




<div class="page-wrapper">
    <header class="main-header">
        {{-- <div class="main-header__top">
            <div class="main-header__top-wrapper">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <p class="main-header__top-text">80 Broklyn Golden Street, New York. USA</p>
                        <div class="main-header__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="main-header__top-right">
                        <ul class="list-unstyled main-header__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-email"></i>
                                </div>
                                <div class="text">
                                    <p><a href="needhelp@company.com">needhelp@company.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-clock"></i>
                                </div>
                                <div class="text">
                                    <p>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}

        <nav class="main-menu">
            {{-- <div class="main-menu__wrapper">
                <div class="main-menu__btn">
                    <a href="{{url('/contact-us')}}">Get a free quote</a>
                </div>
                <div class="main-menu__call">
                    <div class="main-menu__call-icon">
                        <span class="icon-phone-ringing"></span>
                    </div>
                    <div class="main-menu__call-content">
                        <p class="main-menu__call-sub-title">Call Anytime</p>
                        <h5 class="main-menu__call-number"><a href="tel:922460088">+ 92 (246) 0088</a></h5>
                    </div>
                </div> --}}
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__wrapper-inner-content">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="{{url('/')}}" ><img src="{{asset('frontend/assets/images/backgrounds/logo.png')}}" alt="" class=" nav-img"></a>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="{{URL::current()==url('/')? 'current' : ''}}">
                                        <a href="{{url('/')}}" >Home </a>
                                        {{-- <ul>
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="index2.html">Home Two</a></li>
                                            <li><a href="index3.html">Home Three</a></li>
                                            <li><a href="index4.html">Home Four</a></li>
                                            <li><a href="index5.html">Home Five</a></li>
                                            <li><a href="index6.html">Home Six</a></li>
                                            <li class="dropdown">
                                                <a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header One</a></li>
                                                    <li><a href="index2.html">Header Two</a></li>
                                                    <li><a href="index3.html">Header Three</a></li>
                                                    <li><a href="index4.html">Home Four</a></li>
                                                    <li><a href="index5.html">Home Five</a></li>
                                                    <li><a href="index6.html">Home Six</a></li>
                                                </ul>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li class="{{URL::current()==url('/company-profile')? 'current' : ''}}">
                                        <a href="{{url('/company-profile')}}">Company Profile</a>
                                    </li>

                                    <li class="{{URL::current()==url('/latest-offers')? 'current' : ''}}">
                                        <a href="{{url('/latest-offers')}}">Latest Offers</a>
                                    </li>

                                    <li class="{{URL::current()==url('/business-process')? 'current' : ''}}">
                                        <a href="{{url('/business-process')}}">Business Process</a>
                                    </li>

                                    <li class="{{URL::current()==url('/exhibitions')? 'current' : ''}}">
                                        <a href="{{url('/exhibitions')}}">Exhibitions</a>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="our-clients.html">Our Clients</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="services-1.html">Services 01</a></li>
                                            <li><a href="services-2.html">Services 02</a></li>
                                            <li><a href="services-3.html">Services 03</a></li>
                                            <li><a href="services-4.html">Services 04</a></li>
                                            <li><a href="services-5.html">Services 05</a></li>
                                            <li><a href="services-6.html">Services 06</a></li>
                                            <li><a href="mechanical-expert.html">Mechanical Expert</a></li>
                                            <li><a href="repair-welding.html">Repair & Welding</a></li>
                                            <li><a href="appartment-design.html">Appartment Design</a></li>
                                            <li><a href="design-build.html">Design & Build</a></li>
                                            <li><a href="house-renovation.html">House Renovation</a></li>
                                            <li><a href="building-material.html">Building Material</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Projects</a>
                                        <ul>
                                            <li><a href="projects-1.html">Projects 01</a></li>
                                            <li><a href="projects-2.html">Projects 02</a></li>
                                            <li><a href="projects-3.html">Projects 03</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">News</a>
                                        <ul>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="news-details.html">News Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="{{URL::current()==url('/contact-us')? 'current' : ''}}">
                                        <a href="{{url('/contact-us')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="main-menu__search-cart-box">
                                <div class="main-menu__search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu__cart-box">
                                    <a href="#" class="main-menu__cart icon-shopping-cart"></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
