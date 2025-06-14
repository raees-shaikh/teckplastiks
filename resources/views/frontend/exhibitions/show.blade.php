@extends('frontend.layouts.app')
@section('title', ucfirst($exhibition->title . ' - Exhibitions -'))
@section('content')


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg exhi-show">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>{{ ucfirst($exhibition->title) }}</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li ><a href="{{ route('exhibitions') }}" >Exhibitions</a></li>

                        <li><span>/</span></li>
                        <li class="bread-active">{{$exhibition->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Details Start-->
    <section class="project-details pt-md-2 pt-3 pb-0">
        <div class="container">
            <div class="project-details__content">
                <div class="row">
                    <div class=" col-xl-7 col-lg-6 pb-lg-5">
                        <div class="project-details__content-left">
                            <h3 class="project-details__title-1 mb-4 text-capitalize">{{ ucfirst($exhibition->title) }}</h3>
                            <div class="project-details__img my-1">
                                <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt=""
                                    style="max-height: 450px;object-fit: contain;object-position: left;">
                            </div>
                            {{-- <div class="project-details__text-1">{!! $exhibition->descriptions !!}</div> --}}

                        </div>
                    </div>
                    <div class=" col-xl-5 col-lg-6">
                        <div class="project-details__content-right">
                            <div class="project-details__info">
                                <ul class="list-unstyled project-details__info-list">
                                    <li>
                                        <p>Date</p>
                                        <h4>{{ dd_format($exhibition->start_date, 'jS M Y') }} to
                                            {{ dd_format($exhibition->end_date, 'jS M Y') }}</h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="project-details__text-1">{!! $exhibition->descriptions !!}</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Project Details End-->

    @if ($medias->count())
        <section class="pt-md-2 pt-3 pb-3">
            <div class="row align-items-center section-head style-1 text-center   mb-0">
                <div class=" aos-item">
                    {{-- <h5 class="text-primary sub-title text-capitalize">INDUSTRIAL EXHIBITIONS</h5> --}}
                    <h2 class="section-title__title mb-xl-5 mb-4">Gallery</h2>
                </div>
            </div>

            <!-- subheader close -->
            <div class="container bg-white">
                <div class="row gallery pw-gallery pw-collage ">
                    @forelse ($medias as $media)
                        <div class=" col-lg-4 col-md-6  mb-3">
                            <figure>
                                <a data-src="{{ asset('storage/images/exhibition/' . $media->filename) }}"
                                    class="open-galley w-100"
                                    data-width="{{ getimagesize(asset('storage/images/exhibition/' . $media->filename))[0] }}"
                                    data-height="{{ getimagesize(asset('storage/images/exhibition/' . $media->filename))[1] }}">
                                    <img src="{{ asset('storage/images/exhibition/' . $media->filename) }}" alt=""
                                        class="w-100 custom-gallery-img" style="height: 250px;object-fit: cover;">
                                </a>
                            </figure>
                        </div>
                    @empty
                        <div class="text-center pb-4">
                            No Gallery Found
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="clearfix"></div>
            <!-- Root element of PhotoSwipe. Must have class pswp. -->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <!-- Background of PhotoSwipe.                                                      It's a separate element as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>
                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">
                    <!-- Container that holds slides.
                                                                                                 PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                                                                                Don't modify these 3 pswp__item elements, data is added later on. -->
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <!--  Controls are self-explanatory. Order can be changed. -->
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            {{-- <button class="pswp__button pswp__button--share" title="Share"></button> --}}
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                            <!-- element will get class pswp__preloader--active when preloader is running -->
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                        </button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                        </button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center text-center"></div>
                        </div>
                    </div>
                </div>
            </div>



        </section>
    @endif


    {{-- <div class="justify-content-center mx-auto d-flex mt-3 mb-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div> --}}
@endsection
