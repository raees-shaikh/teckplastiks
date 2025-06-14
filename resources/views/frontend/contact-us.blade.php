@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(frontend/assets/images/backgrounds/contact.jpg)">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="bread-active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->


    <!--Contact Info Start-->
    <section class="contact-info pt-5 pb-0">
        <div class="container">
            <div class="row">
                <!--Contact Info Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="contact-info__single first-card">
                        <h4 class="contact-info__title">About</h4>
                        <p class="contact-info__text">Geotechnical & tech-plastics industry plant & machinerys brand new, unused from overseas
                            projects worldwide.</p>
                        <div class="contact-info__btn-box">
                            <div class="contact-info__btn">
                                <a href="javscript:void(0)">Contact</a>
                            </div>
                        </div>
                        <div class="contact-info__icon">
                            <span class="icon-entrepreneur"></span>
                        </div>
                    </div>
                </div>
                <!--Contact Info Single End-->
                <!--Contact Info Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="contact-info__single">
                        <h4 class="contact-info__title">Contact</h4>
                        <p class="contact-info__text">Mon-Sat 8:00 - 6:30 Sunday Closed <br> <a
                                href="mailto:sales@techplastiks.com">sales@techplastiks.com</a></p>
                        <div class="contact-info__btn-box">
                            <div class="contact-info__btn">
                                <a href="javscript:void(0)">Contact</a>
                            </div>
                        </div>
                        <div class="contact-info__icon">
                            <span class="icon-contact"></span>
                        </div>
                    </div>
                </div>
                <!--Contact Info Single End-->
                <!--Contact Info Single Start-->
                <div class="col-xl-4 col-lg-4  wow fadeInUp" data-wow-delay="300ms">
                    <div class="contact-info__single">
                        <h4 class="contact-info__title">Address</h4>
                        <p class="contact-info__text info-add">India, European Union, Turkey, China, UAE, USA.</p>
                        <div class="contact-info__btn-box">
                            <div class="contact-info__btn">
                                <a href="javscript:void(0)">Contact</a>
                            </div>
                        </div>
                        <div class="contact-info__icon">
                            <span class="icon-location"></span>
                        </div>
                    </div>
                </div>
                <!--Contact Info Single End-->
            </div>
        </div>
    </section>
    <!--Contact Info End-->

    <!--Contact Page Form Start-->
    <section class="contact-page-form mt-3">
        <div class="contact-page-form__shape-1 float-bob-x">
            <img src="{{ asset('frontend/assets/images/shapes/contact-page-form-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Contact With Us</span>
                <h2 class="section-title__title text-capitalize mb-0">Feel free to write our <br> team anytime</h2>
            </div>
            <form action="{{ route('frontend.contact.submit') }}" class="contact-page-form__form-box"
                method="POST">
                @csrf
                <input type="hidden" class="form-control" name="page_name" value="Contact">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-page-form__input-box">
                            <input type="text" placeholder="Your full name" name="name" minlength="3" maxlength="30"
                                value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <div id="name-error " class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-page-form__input-box">
                            <input type="email" placeholder="Email address" name="email" maxlength="40" minlength="5"
                                value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <div id="email-error " class="text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-page-form__input-box">
                            <input type="text" placeholder="Phone no" name="phone" minlength="10" maxlength="10"
                                value="{{ old('phone') }}" required>
                            @if ($errors->has('phone'))
                                <div id="phone-error " class="text-danger">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-page-form__input-box">
                            <input type="text" placeholder="Subject" name="subject" minlength="3" maxlength="100"
                                value="{{ old('subject') }}" required>
                            @if ($errors->has('subject'))
                                <div id="subject-error " class="text-danger">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page-form__input-box text-message-box">
                            <textarea name="message" placeholder="Write message" minlength="5" maxlength="250" required>{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <div id="message-error" class="text-danger">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="contact-page-form__btn-box pt-3">
                            <button type="submit" class="thm-btn contact-page-form__btn">Send message</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </section>
    <!--Contact Page Form End-->

    <!--Google Map Start-->
    {{-- <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.14571337597!2d72.71637411447857!3d19.082177513371683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1711798451766!5m2!1sen!2sin"
            class="google-map__two" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


    </section> --}}
    <!--Google Map End-->



@endsection
