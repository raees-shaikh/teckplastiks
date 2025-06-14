@extends('frontend.layouts.app')
@section('title', 'Exhibitions - ')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/exhibition.jpg)">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>Exhibitions</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="bread-active">Exhibitions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Services Page Five Start-->
    <section class="services-page-five py-5">
        <div class="container">
            <div class="row">

                @forelse($exhibitions as $exhibition)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-five__single">
                            <div class="services-five__img">
                                <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt=""
                                    style="width:100%; height:250px; object-fit: cover;">
                            </div>
                            <div class="services-five__content-box">
                                <div class="services-five__content">
                                    <p><i class="far fa-calendar text-primary " aria-hidden="true"></i> &nbsp;<span
                                            class="text-primary mt-0 pt-0 fs15">{{ dd_format($exhibition->start_date, 'jS M Y') }}
                                            to
                                            {{ dd_format($exhibition->end_date, 'jS M Y') }}</span></p>
                                    <h3 class="services-five__title mb-3  mt-2"><a
                                            href="{{ route('exhibition', $exhibition->slug) }}">{{ $exhibition->title }}</a>
                                    </h3>

                                    <a href="{{ route('exhibition', $exhibition->slug) }}" class="services-five__btn">read
                                        more <span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                        <p class="text-center">No Exhibitions Found</p>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="justify-content-center mx-auto d-flex mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li>
                        {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!--Services Page Five End-->




@endsection
