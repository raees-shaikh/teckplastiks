@extends('frontend.layouts.app')
@section('title', 'Company Profile - ')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/about.jpg)">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>Company Profile</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="bread-active">Company Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Seven Start-->
    <section class="about-seven pt-lg-3 pt-5 pb-5">
        <div class="container">
            <div class="row pb-xl-3">
                <div class="col-lg-6">
                    <div class="about-seven__left about-index">
                        <div class="about-seven__img-box">
                            <div class="about-seven__img">
                                <img src="{{ asset('frontend/assets/images/resources/almunium-1.png') }}" alt="">
                            </div>
                            <div class="about-seven__img-2 d-xl-block d-none">
                                <img src="{{ asset('frontend/assets/images/resources/almunium-2.png') }}" alt=""
                                    class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-seven__right mx-auto mx-0 about-index">
                        <div class="section-title text-xl-start text-center">
                            <span class="section-title__tagline">Get To Know Techplastiks</span>
                            <h2 class="section-title__title">One Of The Oldest & Trusted Indian Company</h2>
                        </div>
                        <p class="about-seven__text-1  pb-3 text-xl-start text-center">committed to providing our customers
                            with exceptional
                            service.</p>
                        <p class="about-seven__text-2">Techplastiks is the oldest & trusted Indian company, a part of HR
                            group of companies, Geotechnical & tech-plastics industry plant & machinerys brand new, unsed
                            from cancelled orders of overseas clients & imported only related to all
                            polymers &
                            reinforced materials.</p>
                        <p class="about-seven__text-2 pt-2">THERMOPLASTICS | THERMOSETS | ELASTOMERS | LLDPE | LDPE | HDPE |
                            POLYPROPYLENE | PETROCHEMICAL | POLYESTER | NYLON | NYLON66 | POLYCARBONATE | PVA | UPVC | PVC |
                            RUBBER | SYNTHETIC RUBBER | CARBON | GLASS | ABS | ACRYCLIC | EPOXY | RESINS | NATURAL FIBERS |
                            VISCOSE | COTTON | JUTE | BAMBOO FIBER | MANY MANY MORE</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Seven End-->


@endsection
