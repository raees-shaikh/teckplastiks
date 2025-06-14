@extends('frontend.layouts.app')
@section('title', ucfirst($offer->title . ' - ' . $category->title . ' - Latest Offers - '))
@section('content')


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg offer-show">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>{{ ucfirst($offer->title) }}</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ url('/latest-offers') }}">latest Offers</a></li>
                        <li><span>/</span></li>
                        <li ><a href="{{ route('all-offers', $category->slug) }}"  class="bread-active">{{ $category->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details pb-5 pt-md-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__content">
                            <h3 class="news-details__title">{{ ucfirst($offer->title) }}</h3>
                            <div class="news-details__img my-1">
                                @if ($offer->image)
                                    <img src="{{ asset('storage/images/offers/' . $offer->image) }}" alt=""
                                        style="height: 450px;object-fit: contain;object-position: left;">
                                @endif
                            </div>
                            <p class="news-details__text-1">{!! $offer->body !!}</p>


                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Related Offers</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                @forelse ($relatedOffers as $ro)
                                    <li><a
                                            href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $ro->slug]) }}">{{ $ro->title }}<span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                @empty
                                    <li class="text-lg-start text-center list-unstyled-li">No Related Offers Found</li>
                                @endforelse
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->
@endsection
