@extends('Frontend.layouts.master')

@section('front_title', 'About Page')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

<!-- Start About Area -->
<div class="about-area pt-100  ">
    <div class="container">
        <div class="row align-items-center" data-cue="slideInUp">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('assets/frontend/assets/images/mohamed.png') }}" alt="about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content about-style">
                    @foreach ($banners as $banner)
                        <div class="title text-center text-lg-start">
                            <!-- النص في المنتصف على الشاشات الصغيرة وفي اليسار على الشاشات الكبيرة -->
                            <h5 class="text-white text-center text-lg-start">شريكك نحو التطور</h5>
                            <h1 class="text-center text-lg-start">{{ $banner->title }}</h1>
                            <p class="text-center text-lg-start">{{ $banner->description }}</p>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-lg-4 col-sm-6 d-flex align-items-center justify-content-center">
                            <div class="about-item">
                                <div class="point text-white">4.7+</div>
                                <h3 class="text-white">اراء العملاء</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 d-flex align-items-center justify-content-center">
                            <div class="about-item">
                                <div class="point text-white">4K+</div>
                                <h3 class="text-white">المشاريع المكتملة</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 d-flex align-items-center justify-content-center">
                            <div class="about-item">
                                <div class="point text-white">4K+</div>
                                <h3 class="text-white">عملاء من مختلف العالم</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                    </div>

                    <!-- الزر يأخذ عرض الشاشة بالكامل على الشاشات الكبيرة -->
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <a style="width: 100%; margin: 10px auto;" class="demo text-decoration-none d-flex align-items-center justify-content-center" href="#">تواصل معي</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Start Team Area -->
<div class="team-area ">
    <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
            <span class="d-block">فريق العمل</span>
            <h2>فريق عمل متميز وخبير</h2>
        </div>
        <div class="row" data-cues="fadeIn">
            @foreach ($team as $person)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card team-style">
                        <div class="image">
                            <img style="height: 300px!important" src="{{ asset($person->image) }}" alt="team-image">
                        </div>
                        <h3>
                            <a class="text-decoration-none text-white" href="">{{ $person->name }}</a>
                        </h3>
                        <p>{{ $person->description }}</p>
                        <div class="social-list">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li>
                                    <a class="text-decoration-none" target="_blank" href="{{ $person->facebook_link }}">
                                        <i class="ri-facebook-circle-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none" target="_blank" href="{{ $person->x_link }}">
                                        <i class="ri-twitter-x-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none" target="_blank"
                                        href="{{ $person->instagram_link }}">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="pagination d-flex align-items-center justify-content-center" style="margin: 10px auto">
                {{ $team->links() }}
            </div>

        </div>
    </div>
    <div class="bg-ellipse"></div>
</div>
<!-- End Team Area -->

<!-- Start Partner Area -->
<div class="partner-area style-2 pb-75">
    <div class="container">
        <h1 class="text-center py-4 text-white">شركاء النجاح</h1>
        <div class="partner-slider-info" data-cue="slideInUp">
            <div class="partner-slider owl-carousel owl-theme">
                @foreach ($companies as $company)
                    <div class="single-partner-logo">
                        <img src="{{ asset($company->image) }}" alt="partner-2">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->
