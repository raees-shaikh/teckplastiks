@extends('frontend.layouts.app')
@section('title', '')
@section('content')

    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 8000
        }}'>
            <div class="swiper-wrapper">


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/second.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Industry Plant &<br> Machinerys</h2>
                                    <p class="main-slider__text">Related to all polymers & reinforced materials many more
                                    </p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(frontend/assets/images/backgrounds/pva-machine.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title text-capitalize">PVA Films &<br>Rubber Synth </h2>
                                    <p class="main-slider__text"> Brand new from cancelled projects worldwide |
                                         imported only & many more</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/company-profile') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/bopp.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">BOPP &<br> BOPET</h2>
                                    <p class="main-slider__text">Common materials for flexible packaging film & many more
                                    </p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(frontend/assets/images/backgrounds/geomembrane.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Geomembrane &<br> Geocell</h2>
                                    <p class="main-slider__text">Geomembrane waterproof sheet extrusion line for
                                        architecture & many more.</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/p-1.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Monofilament, Carbon Fibers, <br>HVAC Components,
                                        Material Handling </h2>
                                    <p class="main-slider__text">Many more industries products available</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/p-2.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Automotive, Commercial Vehicles, <br> Mass Transit,
                                        Military Defense </h2>
                                    <p class="main-slider__text">Many more industries products available</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/p-3.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Water Management, Bioplastics, <br> Biodegradable
                                        Compostable Mulch Films </h2>
                                    <p class="main-slider__text">Many more industries products available</p>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/p-4.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Wind Turbine Components, Infrastructure, <br> Ceramic
                                        Fiber Blanket, Solar And Electric Vehicle Products </h2>

                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/contact-us') }}" class="thm-btn main-slider__btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-1.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Packtech, Agrotech, Aquaculture, <br>
                                        Almunium Wire, Conveyor Belts, Compressed Biogas </h2>

                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-2.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">BOPET, BOPP, Cast <br> Cement, Tanks,
                                        <br>Chemical Bonded
                                    </h2>

                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-3.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Coating, Construction, Cosmatics & Oil
                                        Packaging <br> Blown, Boards, BOPA </h2>

                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-4.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Defence, Dry Filtration, Embossing
                                        <br>Engineering Plastics, Extruded,<br> Extrusion
                                    </h2>

                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-5.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Reinforced By Carbon, Geocell,
                                        <br>Geogrid, Geomembrane, Glass,<br> Geostrap
                                    </h2>

                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-6.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Pharma, Meditech, Industrial Packaging
                                        <br> Chemical Industry, Aerospace,<br>Consumer & Food Packaging,
                                    </h2>

                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-7.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Methane Gas Storage, Railways, Roads,
                                        <br>Reinforcement, Wet Filtration,<br> Fisheries
                                    </h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-8.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Spunlace, Sportech, Sheets,
                                        <br>Tarpaulins, Thermobonded,<br> Spunbonded
                                    </h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(frontend/assets/images/backgrounds/ind-9.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Ventilator, Water Tanks, Flat Woven,
                                        <br>Warp Knitted Weft Insertion, <br>PVA, Plastics Recycling
                                    </h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(frontend/assets/images/backgrounds/ind-10.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Rubber Synth, Tyrecord, Tunnels,
                                        <br>Indutech, Mon Ferrous,<br>Large Diameter Pipes To Small
                                    </h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(frontend/assets/images/backgrounds/ind-11.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title custom-f-size">Textile, Steel, Needle Punch, <br>Films,
                                        Steel Wire, Ponds,<br> Man Made Fiber </h2>
                                    <div class="main-slider__btn-box">
                                        <a href="{{ url('/latest-offers') }}" class="thm-btn main-slider__btn">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-prev">
                <i class="icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
        </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one pt-md-5 pb-5 pt-3">
        <div class="about-one__shape-1 float-bob-y">
            <img src="{{ asset('frontend/assets/images/shapes/about-one-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row pt-3 mb-xl-5">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{ asset('frontend/assets/images/resources/almunium-1.png') }}" alt="">
                            </div>
                            <div class="about-one__img-2">
                                <img src="{{ asset('frontend/assets/images/resources/almunium-3.png') }}" alt="">
                            </div>
                            <div class="about-one__experience">
                                <div class="about-one__experience-count-box">
                                    <h3 class="odometer" data-count="35">00</h3>
                                </div>
                                <p class="about-one__experience-text">Years
                                    <br> Experience
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-xl-start text-center">
                            <span class="section-title__tagline">Get To Know Techplastiks</span>
                            <h2 class="section-title__title">One Of The Oldest & Trusted Indian Company</h2>
                        </div>

                        <p class="about-one__text">Techplastiks is the oldest & trusted Indian company, a part of HR group
                            of companies, Geotechnical & tech-plastics industry plant & machinerys brand new, unsed from
                            cancelled orders of overseas clients & imported only related to all polymers &
                            reinforced materials.</p>
                        <ul class="about-one__points-box list-unstyled">
                            <li>
                                <div class="about-one__points-title">
                                    <p>Worldwide Manufacture</p>
                                </div>
                                <div class="about-one__points-content">
                                    <div class="about-one__points-icon">
                                        <span class="icon-planet-earth"></span>
                                    </div>
                                    <div class="about-one__points-text">
                                        <p>Geocell | Geomembrane | Geostraps | Geogrids | Flat Woven | Warp Knitted Weft
                                            Insertions | Extruded & Many More.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="about-one__points-title">
                                    <p>Quality Productions</p>
                                </div>
                                <div class="about-one__points-content">
                                    <div class="about-one__points-icon">
                                        <span class="icon-quality"></span>
                                    </div>
                                    <div class="about-one__points-text">
                                        <p>Thermoplastics | Thermosets | Elastomers | LLDPE | LDPE | HDPE | Polypropyelene |
                                            Polyester & Many More.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="about-one__btn-box text-xl-start text-center">
                            <a href="{{ url('/company-profile') }}" class="about-one__btn thm-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Counter One Start-->
    {{-- <section class="counter-one py-5">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Company Fun Facts</span>
                <h2 class="section-title__title">Industry Achivements</h2>
            </div>
            <div class="row justify-content-center">
                <!--Counter One Single Start-->
                <div class="col-xl-4 col-md-6">
                    <div class="counter-one__single">
                        <div class="counter-one__icon-box">
                            <div class="counter-one__shape">
                                <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="counter-one__shape-2">
                                <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-2.png') }}"
                                    alt="">
                            </div>
                            <div class="counter-one__icon">
                                <span class="icon-factory"></span>
                            </div>
                        </div>
                        <div class="counter-one__content-box">
                            <div class="counter-one__count-box count-box">
                                <h3 class="count-text" data-stop="900" data-speed="1500">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                            <p class="counter-one__text">Plants & Machinery Sold</p>
                        </div>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-4 col-md-6">
                    <div class="counter-one__single">
                        <div class="counter-one__icon-box">
                            <div class="counter-one__shape">
                                <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="counter-one__shape-2">
                                <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-2.png') }}"
                                    alt="">
                            </div>
                            <div class="counter-one__icon">
                                <span class="icon-office"></span>
                            </div>
                        </div>
                        <div class="counter-one__content-box">
                            <div class="counter-one__count-box count-box">
                                <h3 class="count-text" data-stop="33" data-speed="1500">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                            <p class="counter-one__text">Exhibitions Participated</p>
                        </div>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-4 col-md-6">
                    <div class="counter-one__single">
                        <div class="counter-one__icon-box">
                            <div class="counter-one__shape">
                                <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-1.png') }}"
                                    alt="">
                            </div>
                            <div class="counter-one__shape-2">
                                <img src="{{ asset('frontend/assets/images/shapes/counter-one-shape-2.png') }}"
                                    alt="">
                            </div>
                            <div class="counter-one__icon">
                                <span class="icon-workers"></span>
                            </div>
                        </div>
                        <div class="counter-one__content-box">
                            <div class="counter-one__count-box count-box">
                                <h3 class="count-text" data-stop="7000" data-speed="1500">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                            <p class="counter-one__text">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!--Counter One Single End-->
            </div>
        </div>
    </section> --}}
    <!--Counter One End-->

    {{-- @php
        $industry = [
            [
                'name' => 'Geocell',
                'img' => ' frontend/assets/images/industry/geocell.jpg',
            ],

            [
                'name' => 'Infraprojects Like Roads',
                'img' => 'frontend/assets/images/applications/road.jpg',
            ],

            [
                'name' => ' Railways',
                'img' => 'frontend/assets/images/applications/railways.jpg',
            ],

            [
                'name' => 'Tunnels',
                'img' => 'frontend/assets/images/applications/tunnel.png',
            ],

            [
                'name' => 'Geomembrane',
                'img' => ' frontend/assets/images/industry/geomembrane.jpg',
            ],

            [
                'name' => 'Aerospace',
                'img' => 'frontend/assets/images/applications/aerospace.jpg',
            ],
            [
                'name' => 'Defence',
                'img' => 'frontend/assets/images/applications/defence.jpg',
            ],
            [
                'name' => 'Plastics Recycling',
                'img' => 'frontend/assets/images/applications/plastic.png',
            ],

            [
                'name' => 'Geostraps',
                'img' => ' frontend/assets/images/industry/geostrap.jpg',
            ],

            [
                'name' => 'Extrusions',
                'img' => 'frontend/assets/images/applications/extrusion.png',
            ],
            [
                'name' => 'Engineering Plastics',
                'img' => 'frontend/assets/images/applications/eng-plastic.jpg',
            ],
            [
                'name' => 'Packtech',
                'img' => 'frontend/assets/images/applications/packtech.jpg',
            ],

            [
                'name' => 'Geogrids',
                'img' => ' frontend/assets/images/industry/geogrid.jpg',
            ],

            [
                'name' => 'Sportech',
                'img' => 'frontend/assets/images/applications/sportech.jpg',
            ],
            [
                'name' => 'Indutech',
                'img' => 'frontend/assets/images/applications/indutech.jpg',
            ],

            [
                'name' => 'Meditech',
                'img' => 'frontend/assets/images/applications/meditech.jpg',
            ],
            [
                'name' => 'Flat Woven',
                'img' => ' frontend/assets/images/industry/flat-woven.jpg',
            ],

            [
                'name' => ' Agrotech',
                'img' => 'frontend/assets/images/applications/agrotech.jpg',
            ],

            [
                'name' => 'Compressed Biogas',
                'img' => 'frontend/assets/images/applications/bio-gas.jpg',
            ],
            [
                'name' => 'Aquaculture',
                'img' => 'frontend/assets/images/applications/arua-culture.jpg',
            ],
            [
                'name' => 'Warp Knitted Weft Insertions',
                'img' => ' frontend/assets/images/industry/weft-insertion.jpg',
            ],

            [
                'name' => 'Ponds',
                'img' => 'frontend/assets/images/applications/ponds.jpg',
            ],
            [
                'name' => 'Fisheries',
                'img' => 'frontend/assets/images/applications/fish-net.jpg',
            ],
            [
                'name' => 'Water Storages',
                'img' => 'frontend/assets/images/applications/water-tank.jpg',
            ],
            [
                'name' => 'Extruded',
                'img' => ' frontend/assets/images/industry/extruded.jpg',
            ],

            [
                'name' => ' Methane Gas Storage',
                'img' => 'frontend/assets/images/applications/methane.jpg',
            ],
            [
                'name' => ' Films ',
                'img' => 'frontend/assets/images/applications/film.png',
            ],
            [
                'name' => 'Coating ',
                'img' => 'frontend/assets/images/applications/coating.jpg',
            ],
            [
                'name' => 'Blown',
                'img' => ' frontend/assets/images/industry/blown.jpg',
            ],
            [
                'name' => ' Embossing',
                'img' => 'frontend/assets/images/applications/embossing.jpg',
            ],
            [
                'name' => 'Reinforcements',
                'img' => 'frontend/assets/images/applications/reinforcement.jpg',
            ],

            [
                'name' => 'Tarpaulins',
                'img' => 'frontend/assets/images/applications/tar.jpg',
            ],

            [
                'name' => 'Cast',
                'img' => ' frontend/assets/images/industry/cast.jpg',
            ],

            [
                'name' => ' Ventilator',
                'img' => 'frontend/assets/images/applications/ventilator.jpg',
            ],

            [
                'name' => 'Dry Filtration',
                'img' => 'frontend/assets/images/applications/dry-filter.jpg',
            ],
            [
                'name' => 'Wet Filtration',
                'img' => 'frontend/assets/images/applications/wet-filter.jpg',
            ],

            [
                'name' => 'BOPP',
                'img' => ' frontend/assets/images/industry/bopp.jpg',
            ],

            [
                'name' => 'Nonwovens Needle Punched ',
                'img' => 'frontend/assets/images/applications/needle-punch.jpg',
            ],
            [
                'name' => 'Spunbonded',
                'img' => 'frontend/assets/images/applications/spunbonded.jpg',
            ],
            [
                'name' => 'Thermobonded',
                'img' => 'frontend/assets/images/applications/thermo.jpg',
            ],

            [
                'name' => 'BOPET',
                'img' => ' frontend/assets/images/industry/bopet.jpg',
            ],

            [
                'name' => ' Chemical Bonded',
                'img' => 'frontend/assets/images/applications/chemical-bonded.jpg',
            ],
            [
                'name' => 'Spunlace',
                'img' => 'frontend/assets/images/applications/spunlace.jpg',
            ],
            [
                'name' => 'Man Made Fiber & Yarns',
                'img' => 'frontend/assets/images/applications/mmf.jpg',
            ],

            [
                'name' => 'BOPA',
                'img' => ' frontend/assets/images/industry/bopa.jpg',
            ],

            [
                'name' => 'Tyrecord',
                'img' => 'frontend/assets/images/applications/tyre-cord.jpg',
            ],
            [
                'name' => ' Conveyor Belts',
                'img' => 'frontend/assets/images/applications/belt.jpg',
            ],

            [
                'name' => 'PVA Films',
                'img' => ' frontend/assets/images/industry/pva.jpg',
            ],

            [
                'name' => 'Textiles',
                'img' => 'frontend/assets/images/applications/textile.jpg',
            ],
            [
                'name' => 'Cement',
                'img' => 'frontend/assets/images/applications/cement.jpg',
            ],

            [
                'name' => 'Rubber Synth',
                'img' => ' frontend/assets/images/industry/rubber-synth.jpg',
            ],

            [
                'name' => 'Construction',
                'img' => 'frontend/assets/images/applications/construction.jpg',
            ],
            [
                'name' => 'Process Chemical Industry',
                'img' => 'frontend/assets/images/applications/chemical.jpg',
            ],

            [
                'name' => 'Reinforced By Carbon',
                'img' => ' frontend/assets/images/industry/reinforced.jpg',
            ],

            [
                'name' => 'Consumer & Food Packaging',
                'img' => 'frontend/assets/images/applications/food-packing.jpg',
            ],

            [
                'name' => 'Industrial Packaging',
                'img' => 'frontend/assets/images/applications/industrial-packing.jpg',
            ],

            [
                'name' => 'Glass',
                'img' => ' frontend/assets/images/industry/glass.jpg',
            ],

            [
                'name' => 'Cosmetics & Oil Packaging',
                'img' => 'frontend/assets/images/applications/cosmatic.jpg',
            ],
            [
                'name' => 'Large Diameter Pipes To Small',
                'img' => 'frontend/assets/images/applications/large-diameter.jpg',
            ],

            [
                'name' => 'Steel Wire',
                'img' => ' frontend/assets/images/industry/steel-wire.jpg',
            ],

            [
                'name' => 'Tanks ',
                'img' => 'frontend/assets/images/applications/tanks.jpg',
            ],
            [
                'name' => ' Boards',
                'img' => 'frontend/assets/images/applications/boards.jpg',
            ],

            [
                'name' => 'Aluminium Wire',
                'img' => ' frontend/assets/images/industry/almunium.jpg',
            ],

            [
                'name' => ' Sheets',
                'img' => 'frontend/assets/images/applications/sheets.jpg',
            ],

            [
                'name' => ' Steel ',
                'img' => 'frontend/assets/images/applications/steel.jpg',
            ],
            [
                'name' => 'Non Ferrous',
                'img' => ' frontend/assets/images/industry/non-ferrous.jpg',
            ],
            [
                'name' => 'Pharma',
                'img' => 'frontend/assets/images/applications/pharma.jpg',
            ],
        ];
    @endphp --}}
    <!--Services One Start-->
    {{-- <section class="services-one pt-2 pb-xl-4 pb-2">
        <div class="services-one__bg-shape-1 float-bob-y">
            <img src="{{ asset('frontend/assets/images/shapes/services-one-shape-1.png') }}" alt="">
        </div>
        <div class="services-one__bg-shape-2 float-bob-x">
            <img src="{{ asset('frontend/assets/images/shapes/services-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-lg-start text-center">
                <span class="section-title__tagline">What We’re Offering</span>
                <h2 class="section-title__title">We Provide Best Services
                    <br> For All Industries
                </h2>
            </div>

            <div class="services-one__bottom">
                <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel"
                    data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 3000,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            },
                            "1200": {
                                "items": 3
                            }
                        }
                    }'>
                    <!--Services One Single Start-->

                    @foreach ($industry as $indust)
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ $indust['img'] }}" alt="">
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title industry"><a>{{ $indust['name'] }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
    <!--Services One End-->



    <!--Services Page Six Start-->


    <section class="services-page-six pb-5 pt-0">
        <div class="container">
            <div class="section-title text-center">
                {{-- <span class="section-title__tagline">Company Facts</span> --}}
                <h2 class="section-title__title pb-3">Latest Offers </h2>
            </div>
            <div class="row">

                @php
                    $categpries = App\Models\Category::latest()->limit(9)->get();
                @endphp
                @foreach ($categpries as $category)
                    <!--Project Two Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-one__single  pb-3">
                            <div class="services-one__img-box">
                                {{-- <div class="services-one__img">
                                    <img src="{{ $category['img'] }}" alt="">
                                </div> --}}
                                <a href="{{ route('all-offers', $category->slug) }}" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a
                                        href="{{ route('all-offers', $category->slug) }}">{{ $category['title'] }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single End-->
                @endforeach

            </div>
            <div class="row">


                <div class="about-one__btn-box  text-center pt-3">
                    <a href="{{ url('/latest-offers') }}" class="about-one__btn thm-btn">View All</a>
                </div>
            </div>
            <!--pdf section start -->
        </div>
    </section>

    @if ($data)
        <div class="container ">
            <div class="section-title text-center">
                <h2 class="section-title__title">Technical Data </h2>
            </div>
            <div class="row justify-content-center mb-3">
                {{-- <a target="_blank" href="{{ url('pdf/Saturn-Technical-Data.pdf') }}"
                class="btn btn-primary btn-lg open-pdf-button site-button "><i
                    class='fa fa-file-pdf-o text-white'></i>&nbsp; Open PDF</a> --}}
                <div class="col-md-4 mx-auto text-center">
                    <a href="{{ asset('storage/data/' . $data->filename) }}" class="about-one__btn thm-btn"
                        target="_blank">
                        <i class="fa fa-file-pdf text-white"></i> &nbsp; Open PDF</a>
                </div>
            </div>
        </div>
    @endif

    <!--Services Page Six End-->

    {{-- <section class="pb-5">
        @php
            $applications = [
                [
                    'name' => 'Infraprojects Like Roads',
                    'img' => 'frontend/assets/images/applications/road.jpg',
                ],

                [
                    'name' => ' Railways',
                    'img' => 'frontend/assets/images/applications/railways.jpg',
                ],

                [
                    'name' => 'Tunnels',
                    'img' => 'frontend/assets/images/applications/tunnel.png',
                ],
                [
                    'name' => 'Aerospace',
                    'img' => 'frontend/assets/images/applications/aerospace.jpg',
                ],
                [
                    'name' => 'Defence',
                    'img' => 'frontend/assets/images/applications/defence.jpg',
                ],
                [
                    'name' => 'Plastics Recycling',
                    'img' => 'frontend/assets/images/applications/plastic.png',
                ],
                [
                    'name' => 'Extrusions',
                    'img' => 'frontend/assets/images/applications/extrusion.png',
                ],
                [
                    'name' => 'Engineering Plastics',
                    'img' => 'frontend/assets/images/applications/eng-plastic.jpg',
                ],
                [
                    'name' => 'Packtech',
                    'img' => 'frontend/assets/images/applications/packtech.jpg',
                ],

                [
                    'name' => 'Sportech',
                    'img' => 'frontend/assets/images/applications/sportech.jpg',
                ],
                [
                    'name' => 'Indutech',
                    'img' => 'frontend/assets/images/applications/indutech.jpg',
                ],

                [
                    'name' => 'Meditech',
                    'img' => 'frontend/assets/images/applications/meditech.jpg',
                ],

                [
                    'name' => ' Agrotech',
                    'img' => 'frontend/assets/images/applications/agrotech.jpg',
                ],

                [
                    'name' => 'Compressed Biogas',
                    'img' => 'frontend/assets/images/applications/bio-gas.jpg',
                ],
                [
                    'name' => 'Aquaculture',
                    'img' => 'frontend/assets/images/applications/arua-culture.jpg',
                ],
                [
                    'name' => 'Ponds',
                    'img' => 'frontend/assets/images/applications/ponds.jpg',
                ],
                [
                    'name' => 'Fisheries',
                    'img' => 'frontend/assets/images/applications/fish-net.jpg',
                ],
                [
                    'name' => 'Water Storages',
                    'img' => 'frontend/assets/images/applications/water-tank.jpg',
                ],

                [
                    'name' => ' Methane Gas Storage',
                    'img' => 'frontend/assets/images/applications/methane.jpg',
                ],
                [
                    'name' => ' Films ',
                    'img' => 'frontend/assets/images/applications/film.png',
                ],
                [
                    'name' => 'Coating ',
                    'img' => 'frontend/assets/images/applications/coating.jpg',
                ],
                [
                    'name' => ' Embossing',
                    'img' => 'frontend/assets/images/applications/embossing.jpg',
                ],
                [
                    'name' => 'Reinforcements',
                    'img' => 'frontend/assets/images/applications/reinforcement.jpg',
                ],

                [
                    'name' => 'Tarpaulins',
                    'img' => 'frontend/assets/images/applications/tar.jpg',
                ],

                [
                    'name' => ' Ventilator',
                    'img' => 'frontend/assets/images/applications/ventilator.jpg',
                ],

                [
                    'name' => 'Dry Filtration',
                    'img' => 'frontend/assets/images/applications/dry-filter.jpg',
                ],
                [
                    'name' => 'Wet Filtration',
                    'img' => 'frontend/assets/images/applications/wet-filter.jpg',
                ],
                [
                    'name' => 'Nonwovens Needle Punched ',
                    'img' => 'frontend/assets/images/applications/needle-punch.jpg',
                ],
                [
                    'name' => 'Spunbonded',
                    'img' => 'frontend/assets/images/applications/spunbonded.jpg',
                ],
                [
                    'name' => 'Thermobonded',
                    'img' => 'frontend/assets/images/applications/thermo.jpg',
                ],

                [
                    'name' => ' Chemical Bonded',
                    'img' => 'frontend/assets/images/applications/chemical-bonded.jpg',
                ],
                [
                    'name' => 'Spunlace',
                    'img' => 'frontend/assets/images/applications/spunlace.jpg',
                ],
                [
                    'name' => 'Man Made Fiber & Yarns',
                    'img' => 'frontend/assets/images/applications/mmf.jpg',
                ],
                [
                    'name' => 'Tyrecord',
                    'img' => 'frontend/assets/images/applications/tyre-cord.jpg',
                ],
                [
                    'name' => ' Conveyor Belts',
                    'img' => 'frontend/assets/images/applications/belt.jpg',
                ],

                [
                    'name' => 'Pharma',
                    'img' => 'frontend/assets/images/applications/pharma.jpg',
                ],

                [
                    'name' => 'Textiles',
                    'img' => 'frontend/assets/images/applications/textile.jpg',
                ],
                [
                    'name' => 'Cement',
                    'img' => 'frontend/assets/images/applications/cement.jpg',
                ],
                [
                    'name' => ' Steel ',
                    'img' => 'frontend/assets/images/applications/steel.jpg',
                ],
                [
                    'name' => 'Construction',
                    'img' => 'frontend/assets/images/applications/construction.jpg',
                ],
                [
                    'name' => 'Process Chemical Industry',
                    'img' => 'frontend/assets/images/applications/chemical.jpg',
                ],
                [
                    'name' => 'Consumer & Food Packaging',
                    'img' => 'frontend/assets/images/applications/food-packing.jpg',
                ],

                [
                    'name' => 'Industrial Packaging',
                    'img' => 'frontend/assets/images/applications/industrial-packing.jpg',
                ],
                [
                    'name' => 'Cosmetics & Oil Packaging',
                    'img' => 'frontend/assets/images/applications/cosmatic.jpg',
                ],
                [
                    'name' => 'Large Diameter Pipes To Small',
                    'img' => 'frontend/assets/images/applications/large-diameter.jpg',
                ],

                [
                    'name' => 'Tanks ',
                    'img' => 'frontend/assets/images/applications/tanks.jpg',
                ],
                [
                    'name' => ' Boards',
                    'img' => 'frontend/assets/images/applications/boards.jpg',
                ],
                [
                    'name' => ' Sheets',
                    'img' => 'frontend/assets/images/applications/sheets.jpg',
                ],
            ];
        @endphp
        <div class="container">
            <div class="section-title text-center mb-4 ">
                <span class="section-title__tagline">Company Services</span>
                <h2 class="section-title__title ">Applications </h2>
            </div>
            <div class="row">
                @foreach ($applications as $app)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="about-one__btn-box my-3 text-center">
                            <a href="{{ $app['link'] }}"
                                class="about-one__btn thm-btn text-capitalize w-100">{{ $app['name'] }}</a>
                        </div>

                        <div class="project-four__single">
                            <div class="project-four__img">
                                <img src="{{ $app['img'] }}" alt="">
                                <div class="project-four__content">

                                    <h3 class="project-four__title"><a href="javascript:void(0)">{{ $app['name'] }}</a>
                                    </h3>
                                </div>
                                <div class="project-four__arrow">
                                    <a href="javascript:void(0)"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section> --}}
    {{--
@php
    $products=[
            [
                'name' => 'Automotive',
                'img' => ' frontend/assets/images/products/automotive.jpg',
                'link' => 'https://moldedfiberglass.com/applications/automotive/',
            ],

            [
                'name' => 'Wind Turbine Components',
                'img' => ' frontend/assets/images/products/wind-turbine.jpg',
                'link' => 'https://moldedfiberglass.com/applications/renewable-energy/wind-energy-components/',
            ],

            [
                'name' => 'Solar And Electric Vehicle Products',
                'img' => ' frontend/assets/images/products/solar.jpg',
                'link' => 'https://moldedfiberglass.com/applications/renewable-energy/other-renewable-products/',
            ],

            [
                'name' => 'Infrastructure',
                'img' => ' frontend/assets/images/products/infra.jpg',
                'link' => 'https://moldedfiberglass.com/applications/construction/construction-molds/',
            ],

            [
                'name' => 'Commercial Vehicles',
                'img' => ' frontend/assets/images/products/commercial-v.jpg',
                'link' => 'https://moldedfiberglass.com/applications/commercial-vehicles/',
            ],



            [
                'name' => 'HVAC Components',
                'img' => ' frontend/assets/images/products/hvac.jpg',
                'link' => 'https://moldedfiberglass.com/applications/hvac-components/',
            ],

            [
                'name' => 'Mass Transit',
                'img' => ' frontend/assets/images/products/mass.jpg',
                'link' => 'https://moldedfiberglass.com/applications/mass-transit/',
            ],

            [
                'name' => 'Material Handling',
                'img' => ' frontend/assets/images/products/m-handling.jpg',
                'link' => 'https://moldedfiberglass.com/applications/material-handling/',
            ],

            [
                'name' => 'Military Defense',
                'img' => ' frontend/assets/images/products/defense.jpg',
                'link' => 'https://moldedfiberglass.com/applications/military-defense/',
            ],

            [
                'name' => 'Water Management',
                'img' => ' frontend/assets/images/products/water.jpg',
                'link' => 'https://moldedfiberglass.com/applications/water-management/',
            ],

            [
                'name' => 'Carbon Fibers',
                'img' => ' frontend/assets/images/products/carbon.jpg',
                'link' => 'https://www.sglcarbon.com/en/markets-solutions/markets/further-industrial-applications/#',
            ],

            [
                'name' => 'Ceramic Fiber Blanket',
                'img' => ' frontend/assets/images/products/fiber-blanket.jpg',
                'link' => 'https://nutec.com/newsroom/articles/energy-and-performance-with-ceramic-fiber-blanket',
            ],

            [
                'name' => 'Bioplastics',
                'img' => ' frontend/assets/images/products/bioplastics.jpg',
                'link' => 'https://fkur.com/en/bioplastics/',
            ],

            [
                'name' => 'Biodegradable Compostable Mulch Films',
                'img' => ' frontend/assets/images/products/biodegrade.jpg',
                'link' => 'https://www.polyexpert.com/en/market-category/biodegradable-compostable-mulch-films/',
            ],


            [
                'name' => 'Monofilament',
                'img' => ' frontend/assets/images/products/monofilament.jpg',
                'link' => 'https://www.biogeneral.com/monofilament/?ppc_keyword=synthetic%20fiber&gclid=CjwKCAjwrcKxBhBMEiwAIVF8rFAQ99mrnSsNy8MWgNM_baLOD60lsMt79PV6M5t4GLHdGS30SR5XLhoCyZEQAvD_BwE',
            ],
];
@endphp
    <section class="services-one pt-2 pb-xl-4 pb-2">
        <div class="services-one__bg-shape-1 float-bob-y">
            <img src="{{ asset('frontend/assets/images/shapes/cta-one-shape-2.png') }}" alt="">
        </div>
        <div class="services-one__bg-shape-2 float-bob-x">
            <img src="{{ asset('frontend/assets/images/shapes/cta-one-shape-1.png') }}" alt="">
        </div>
        <div class="container pt-md-3">
            <div class="section-title text-lg-start text-center product-title">
                <span class="section-title__tagline">Our Products</span>
                <h2 class="section-title__title">We Provide Best Products
                </h2>
            </div>

            <div class="services-one__bottom">
                <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel products-nav"
                    data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 3000,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            },
                            "1200": {
                                "items": 3
                            }
                        }
                    }'>
                    <!--Services One Single Start-->

                    @foreach ($products as $product)
                        <div class="services-one__single product-main">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ $product['img'] }}" alt="">
                                </div>
                            </div>
                            <div class="services-one__content products">
                                <h3 class="services-one__title"><a>{{ $product['name'] }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>


    <script>
        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');





        var _PDF_DOC,
            _CURRENT_PAGE,
            _TOTAL_PAGES,
            _PAGE_RENDERING_IN_PROGRESS = 0,
            _CANVAS = document.querySelector('#pdf-canvas');

        // initialize and load the PDF
        async function showPDF(pdf_url) {
            document.querySelector("#pdf-loader").style.display = 'block';

            // get handle of pdf document
            try {
                _PDF_DOC = await pdfjsLib.getDocument({
                    url: pdf_url
                });
            } catch (error) {
                alert(error.message);
            }

            // total pages in pdf
            _TOTAL_PAGES = _PDF_DOC.numPages;

            // Hide the pdf loader and show pdf container
            document.querySelector("#pdf-loader").style.display = 'none';
            document.querySelector("#pdf-contents").style.display = 'block';
            document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;

            // show the first page
            showPage(1);
        }

        // load and render specific page of the PDF
        async function showPage(page_no) {
            _PAGE_RENDERING_IN_PROGRESS = 1;
            _CURRENT_PAGE = page_no;

            // disable Previous & Next buttons while page is being loaded
            document.querySelector("#pdf-next").disabled = true;
            document.querySelector("#pdf-prev").disabled = true;

            // while page is being rendered hide the canvas and show a loading message
            document.querySelector("#pdf-canvas").style.display = 'none';
            document.querySelector("#page-loader").style.display = 'block';

            // update current page
            document.querySelector("#pdf-current-page").innerHTML = page_no;

            // get handle of page
            try {
                var page = await _PDF_DOC.getPage(page_no);
            } catch (error) {
                alert(error.message);
            }

            // original width of the pdf page at scale 1
            var pdf_original_width = page.getViewport(1).width;

            // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
            var scale_required = _CANVAS.width / pdf_original_width;

            // get viewport to render the page at required scale
            var viewport = page.getViewport(scale_required);

            // set canvas height same as viewport height
            _CANVAS.height = viewport.height;

            // setting page loader height for smooth experience
            document.querySelector("#page-loader").style.height = _CANVAS.height + 'px';
            document.querySelector("#page-loader").style.lineHeight = _CANVAS.height + 'px';

            var render_context = {
                canvasContext: _CANVAS.getContext('2d'),
                viewport: viewport
            };

            // render the page contents in the canvas
            try {
                await page.render(render_context);
            } catch (error) {
                alert(error.message);
            }

            _PAGE_RENDERING_IN_PROGRESS = 0;

            // re-enable Previous & Next buttons
            document.querySelector("#pdf-next").disabled = false;
            document.querySelector("#pdf-prev").disabled = false;

            // show the canvas and hide the page loader
            document.querySelector("#pdf-canvas").style.display = 'block';
            document.querySelector("#page-loader").style.display = 'none';
        }

        // click on "Show PDF" buuton
        document.querySelector("#show-pdf-button").addEventListener('click', function() {
            this.style.display = 'block';
            showPDF('pdf/Saturn-Technical-Data.pdf');
        });

        // click on the "Previous" page button
        document.querySelector("#pdf-prev").addEventListener('click', function() {
            if (_CURRENT_PAGE != 1)
                showPage(--_CURRENT_PAGE);
        });

        // click on the "Next" page button
        document.querySelector("#pdf-next").addEventListener('click', function() {
            if (_CURRENT_PAGE != _TOTAL_PAGES)
                showPage(++_CURRENT_PAGE);
        });
    </script>
@endsection
