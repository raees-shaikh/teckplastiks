@extends('frontend.layouts.app')
@section('title', 'Sitemap - ')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/sitemap.jpg)">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>Sitemap</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="bread-active">Sitemap</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <section class="pb-md-5 pb-4 pt-md-2 pt-3">

        @php

            $links = [
                [
                    'name' => 'Home',
                    'link' => '/',
                ],
                [
                    'name' => 'Company Profile',
                    'link' => '/company-profile',
                ],
                [
                    'name' => 'Latest Offers',
                    'link' => '/latest-offers',
                ],
                [
                    'name' => 'Business Process',
                    'link' => '/business-process',
                ],
                [
                    'name' => 'Exhibitions',
                    'link' => '/exhibitions',
                ],
                [
                    'name' => 'Contact Us',
                    'link' => '/contact-us',
                ],
            ];
        @endphp
        <div class="container">
            <div class="section-title text-center mb-3 ">
                <span class="section-title__tagline">Company Sitemap</span>
                <h2 class="section-title__title ">Sitemap </h2>
            </div>
            <div class="row">
                @foreach ($links as $link)
                    <div class="col-lg-4 col-6 app-btn">
                        <div class="about-one__btn-box my-3 text-center">
                            <a href="{{ $link['link'] }}"
                                class="about-one__btn font-small-14 thm-btn text-capitalize w-100 rounded">{{ $link['name'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>



@endsection
