        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__img">
                <img src="frontend/assets/images/resources/site-footer-img-1.jpg" alt="">
            </div>
            <div class="container">
                <div class="site-footer__top  pt-4 pb-sm-5 pb-0">
                    <div class="row pt-sm-4 pt-1">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{asset('frontend/assets/images/backgrounds/logo.png')}}" alt="" class=" nav-img">
                                    </a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Geotechnical & tech-plastics industry plant &
                                        machinerys

                                        brand new,  from cancelled orders of overseas clients &  imported only

                                        related to all polymers & reinforced materials.</p>
                                </div>
                                <div class="footer-widget__about-btn-box d-md-block d-none">
                                    <a href="{{ url('/contact-us') }}" class="footer-widget__about-btn thm-btn">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links mt-0">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Useful Links</h4>
                                </div>
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/company-profile') }}">Company Profile</a></li>
                                    <li><a href="{{ url('/latest-offers') }}">Latest Offers</a></li>
                                    <li><a href="{{ url('/business-process') }}">Business Process</a></li>
                                    <li><a href="{{ url('/exhibitions') }}">Exhibitions</a></li>
                                    <li class="d-md-none d-block"><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                    <li><a href="{{ url('/sitemap') }}">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Contact Info</h4>
                                </div>
                                {{-- <p class="footer-widget__contact-text">30 Road Broklyn Street, 600 <br> New York, USA
                                </p> --}}
                                <ul class="footer-widget__Contact-list list-unstyled">

                                    <li class="mb-2">
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="text">
                                            <p>India, European Union, Turkey, China, UAE, USA.</p>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:sales@techplastiks.com">sales@techplastiks.com</a></p>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>

                                        </div>
                                        <div class="text">
                                            <p><a href="tel:91922460088">+91-922460088</a></p>
                                        </div>
                                    </li> --}}
                                </ul>

                                {{-- <div class="site-footer__social d-inline-flex mt-3">
                                    <a href="javscript:void(0)"><i class="fab fa-twitter"></i></a>
                                    <a href="javscript:void(0)"><i class="fab fa-facebook"></i></a>
                                    <a href="javscript:void(0)"><i class="fab fa-youtube"></i></a>
                                    <a href="javscript:void(0)"><i class="fab fa-instagram"></i></a>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="site-footer__bottom text-center justify-content-center">
                    <p class="site-footer__bottom-text text-center"> © Copyright {{ date('Y') }} All Rights Reserved
                        Techplastiks | Designed & Developed By <a href="https://www.acetrot.com/"
                            target="_blank">Acetrot.com</a></p>
                    {{-- <ul class="list-unstyled site-footer__bottom-menu">
                        <li><a href="about.html">Help</a></li>
                        <li><a href="about.html">Privacy Policy</a></li>
                    </ul> --}}
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


        </div><!-- /.page-wrapper -->


        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                {{-- <div class="logo-box"> --}}
                    <div class="pb-4">
                    <a href="{{ url('/') }}" aria-label="logo image">
                        <img src="{{asset('frontend/assets/images/backgrounds/logo.png')}}" alt="" class=" nav-img">
                    </a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                {{-- <ul class="mobile-nav__contact list-unstyled">

                <li>
                    <i class="fa fa-map-marker"></i>
                       <span class="text-white">Mumbai, Maharashtra, 400069</span>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:techplastiks@gmail.com">techplastiks@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top --> --}}



            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here...">
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


        <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/odometer/odometer.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/swiper/swiper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/wow/wow.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/isotope/isotope.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/countdown/countdown.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/vegas/vegas.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/timepicker/timePicker.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/circleType/jquery.circleType.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendors/sidebar-content/jquery-sidebar-content.js') }}"></script>




        <!-- template js -->
        <script src="{{ asset('frontend/assets/js/austry.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>




        <script>
            (function($) {
                // Init empty gallery array
                let galleryArray = [];
                // Loop over gallery items and push it to the array
                $('.gallery').find('figure').each(function() {
                    var $link = $(this).find('a'),
                        item = {
                            src: $link.attr('data-src'),
                            w: $link.data('width'),
                            h: $link.data('height'),
                            title: $link.attr('title')
                        };
                    console.log(item.src);
                    galleryArray.push(item);
                });

                // Define click event on gallery item
                $('.open-galley').click(function(event) {
                    // Prevent location change

                    event.preventDefault();
                    // Define object and gallery options
                    var $pswp = $('.pswp')[0],
                        options = {
                            index: $(this).parent('figure').index(),
                            bgOpacity: 0.85,
                            showHideOpacity: true
                        };
                    // Initialize PhotoSwipe
                    var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, galleryArray, options);
                    gallery.init();
                });
            }(jQuery));
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>

        <script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
        <script>
            @if (Session::get('alert-type') == 'success')
                @if (Session::has('message'))
                    Snackbar.show({
                        text: "{{ Session::get('message') }}",
                        pos: 'top-right',
                        actionTextColor: '#fff',
                        backgroundColor: '#1abc9c'
                    });
                @endif
            @elseif (Session::get('alert-type') == 'info')
                @if (Session::has('message'))
                    Snackbar.show({
                        text: "{{ Session::get('message') }}",
                        pos: 'top-right',
                        actionTextColor: '#fff',
                        backgroundColor: '#2196f3'
                    });
                @endif
            @elseif (Session::get('alert-type') == 'error')
                @if (Session::has('message'))
                    Snackbar.show({
                        text: "{{ Session::get('message') }}",
                        pos: 'top-right',
                        actionTextColor: '#fff',
                        backgroundColor: '#e7515a'
                    });
                @endif
            @else
                @if (Session::has('message'))
                    Snackbar.show({
                        text: "{{ Session::get('message') }}",
                        pos: 'top-right',
                        actionTextColor: '#fff',
                        backgroundColor: '#3b3f5c'
                    });
                @endif
            @endif
        </script>
