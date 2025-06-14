@extends('frontend.layouts.app')
@section('title', ucfirst($category->title . ' - Latest Offers -'))
@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg offer-show">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $category->title }}</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ url('/latest-offers') }}">Latest Offers</a></li>
                        <li><span>/</span></li>
                        <li class="bread-active">{{ $category->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">

                        <div class="news-details__content mt-0">
                            <div class="row">
                                @forelse($offers as $offer)
                                    <div class="col-md-6">

                                        <div class="services-six__single">

                                            <h3 class="services-six__title "><a
                                                    href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">{{ ucfirst($offer->title) }}</a>
                                            </h3>
                                            {{-- <p class="services-six__text">Aliq is notm hendr erit a augue insu image pellen tes.</p> --}}
                                            <div class="services-six__btn mt-5">
                                                <a
                                                    href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">read
                                                    more <span class="icon-right-arrow"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <li class="list-unstyled-li text-center pt-3 text-lg-start">No Offers Found</li>
                                @endforelse
                            </div>

                            <!--Services Six Single End-->

                        </div>
                    </div>

                    <div class="justify-content-center mx-auto d-flex mt-3">
                        <nav aria-label="Page navigation example">

                            <ul class="pagination justify-content-center">
                                <li>
                                    {{ $offers->onEachSide(1)->links('pagination::bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        {{-- <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div> --}}
                        <div class="sidebar__single sidebar__post">


                            <div class="sidebar__single sidebar__category index-cat">
                                <h3 class="sidebar__title p-0">Other Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    @forelse ($relatedCategories as $rCategory)
                                        <li><a href="{{ route('all-offers', $rCategory->slug) }}">{{ $rCategory->title }}<span
                                                    class="icon-right-arrow"></span></a>
                                        </li>
                                    @empty
                                        <li class="text-center text-lg-start">No Category Found</li>
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
