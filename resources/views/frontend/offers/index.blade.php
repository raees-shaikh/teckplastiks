@extends('frontend.layouts.app')
@section('title', 'Latest Offers - ')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/offer.jpg)">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>Latest Offers</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="bread-active">Latest Offers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->


    <!--Services Page Six Start-->
    <section class="services-page-six py-5">

        <div class="container">
            <div class="row pt-md-3">
                @forelse ($categories as $cat)
                    <!--Services Six Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-one__single pb-3">
                            <div class="services-one__img-box">
                                {{-- <div class="services-one__img">
                                    <img src="{{ $cat['img'] }}" alt="">
                                </div> --}}
                                <a href="{{ route('all-offers', $cat->slug) }}" class="services-one__arrow"><i
                                        class="icon-right-arrow"></i></a>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a
                                        href="{{ route('all-offers', $cat->slug) }}">{{ $cat['title'] }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--Services Six Single End-->
                @empty
                @endforelse
            </div>
        </div>


        <div class="justify-content-center mx-auto d-flex mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{ $categories->onEachSide(1)->links('pagination::bootstrap-4') }}
                </ul>
            </nav>
        </div>
    </section>
    <!--Services Page Six End-->


@endsection
