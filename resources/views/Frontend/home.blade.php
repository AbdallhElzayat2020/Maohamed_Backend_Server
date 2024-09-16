@extends('Frontend.layouts.master')

@section('front_title', 'HomePage')


<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

<!-- Start Banner Area -->
<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    @foreach ($banners as $banner)
                        <div class="title">
                            <h5 class="text-white">شريكك نحو التطور</h5>
                            <h1>{{ $banner->title }}</h1>
                            <p>{{ $banner->description }}</p>
                        </div>
                    @endforeach
                    <div class="banner-button d-flex align-items-center">
                        <a class="demo text-decoration-none" href="{{ route('contact') }}">اعمالي</a>
                        <div style="border: 1px solid var(--whiteColor); border-radius: 6px; padding: 5px 10px "
                             class="play-btn d-flex align-items-center">
                            <a href="{{ route('courses') }}" class="text-decoration-none popup-youtube icon">
                                <i class="ri-play-mini-fill"></i>
                            </a>
                            <a class="text-decoration-none land-btn popup-youtube" href="{{ route('courses') }}">
                                مشاهدة كورساتي
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-image">
                    <img  src="{{ asset('assets/frontend/assets/images/mohamed.png') }}" alt="about-image">
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Banner Area -->

<!-- Start Partner Area -->
<div class="partner-area style-2 pb-75">
    <div class="container">
        <h1 class="text-center pb-4 text-white">شركاء النجاح</h1>
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

<!-- Start About Area -->
<div class="about-area pt-100 pb-75">
    <div class="container">
        <div class="row align-items-center" data-cue="slideInUp">
            <div class="col-lg-6">
                <div class="about-image">
                    <img  src="{{ asset('assets/frontend/assets/images/mohamed.png') }}" alt="about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content about-style">
                    <div class="title">
                        <span class="d-block">نبذة عني</span>
                        @foreach ($banners as $banner)
                            <h2 class="text-white">{{ $banner->title }}</h2>
                            <p class="text-white">{{ $banner->description }}</p>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="about-item">
                                <div class="point text-white">
                                    4.7+
                                </div>
                                <h3 class="text-white">اراء العملاء</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="about-item">
                                <div class="point text-white">
                                    4K+
                                </div>
                                <h3 class="text-white">المشاريع المكتملة</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="about-item">
                                <div class="point text-white">
                                    4K+
                                </div>
                                <h3 class="text-white">عملاء من مختلف العالم</h3>
                                <p class="text-white">نبذة بسيطة هنا من كلامك</p>
                            </div>
                        </div>
                    </div>
                    <a class="demo text-decoration-none" href="{{ route('contact') }}">تواصل معي</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->


<!-- Start Counter Area -->
<div class="counter-area  style-2">
    <div class="container">
        <h1 class="text-center text-white">ارقامنا تتحدث</h1>
        <div class="row" data-cues="fadeIn">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">36</span>+
                    </h2>
                    <p>سنين الخبرة</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">645</span>+
                    </h2>
                    <p>العملاء المرضيين</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">100</span>%
                    </h2>
                    <p>نسبة رضا العملاء</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-card style-2">
                    <h2>
                        <span class="counter">35</span>

                    </h2>
                    <p>الدول التي عملت بها</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter Area -->


<!-- Start Testimonial Area -->
<div class="testimonial-area pt-100 pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">اراء عملاءنا</h2>
        </div>
        <div class="testimonial-slider-info" data-cue="slideInUp">
            <div class="testimonial-slider owl-carousel owl-theme">
                @foreach ($testimonials as $testimonial)
                    <div class="single-testimonial-card">
                        <div class="testimonial-user d-flex align-items-center justify-content-between">
                            <div class="user d-flex align-items-center">
                                <div class="image">
                                    <img src="{{ asset($testimonial->image) }}" alt="testimonial-image">
                                </div>
                                <div class="content">
                                    <h3>{{ $testimonial->name }}</h3>
                                    <span>{{ $testimonial->nickname }}</span>
                                </div>
                            </div>
                            <div class="star-icon">
                                <ul class="list-unstyled ps-0 mb-0">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p style="color: var(--primaryColor)">
                            “{{ $testimonial->description }}“
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Area -->


<!-- Start Courses Area -->
<div class="blog-area pb-75 style-2">
    <div class="container">
        <div class="section-title text-center style-2" data-cue="slideInUp">
            <h2>الكورسات</h2>
        </div>
        <div class="row justify-content-center" data-cues="fadeIn">
            @foreach($courses as $key =>$course)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-card style-2">
                        <div class="image">
                            <a href="{{ route('courses-details',$course->id) }}">
                                <img style="height: 300px; width: 100%" class="img-fluid" src="{{ asset($course->image) }}"
                                     alt="blog-image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a class="text-decoration-none" href="{{route('courses-details',$course->id)}}">
                                    {{$course->title}}
                                </a>
                            </h3>
                            <a class="read-more text-decoration-none" href="{{route('courses-details',$course->id)}}">
                                ReadMore
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Courses Area -->

<!-- Start Contact Area -->
<div style="background-color: var(--primaryColor)" class="contact-area pages-style pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center" data-cues="fadeIn">
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-card text-center">
                    <div class="icon">
                        <i class="ri-map-pin-line text-white"></i>
                    </div>
                    <h3 class="text-white">Our Address:</h3>
                    <p class="text-white">521684 Majadra Street Victoria Road, New York.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-card text-center">
                    <div class="icon">
                        <i class="ri-phone-line text-white"></i>
                    </div>
                    <h3 class="text-white">Contact Info:</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a class="text-decoration-none text-white" href="tel:52367388264">+523 6738 8264</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white" href="tel:52234527986">+522 3452 7986</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-contact-card text-center">
                    <div class="icon">
                        <i class="ri-mail-open-line text-white"></i>
                    </div>
                    <h3 class="text-white">Email:</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a class="text-decoration-none text-white"
                               href="mailto:support@gmail.com">support@gmail.com</a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white" href="mailto:info@email.com">info@email.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: var(--primaryColor)" class="contact-form-area pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">تواصل معنا</h2>
        </div>
        <div class="contact-form-info" data-cue="slideInUp">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form action="{{ route('orders') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                   placeholder="Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                   placeholder="Email">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" value="{{ old('phone') }}" name="phone" class="form-control"
                                   placeholder="phone">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" value="{{ old('subject') }}" name="subject" class="form-control"
                                   placeholder="subject">
                            @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control textarea" value="{{ old('message') }}" name="message"
                              placeholder="Enter Your Comments" rows="3"></textarea>
                </div>
                <button class="btn-primary" type="submit">Send A Message</button>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Form Area -->
