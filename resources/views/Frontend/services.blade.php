@extends('Frontend.layouts.master')

@section('front_title', 'Services Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

<!-- Start Page Title Area -->
<div class="page-title-area" style="background-color: var(--primaryColor)">
    <div class="container">
        <div class="page-title-content text-center">
            <h1 class="text-white">خدماتنا بين يديكم</h1>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start services Area -->
<div class="security-area services-style" style="background-color: var(--primaryColor)">
    <div class="container-fluid">
        <div class="row" data-cue="slideInUp">
            @foreach ($services as $key => $service)
                <div class="col-lg-3 col-sm-6 mt-5">
                    <div class="single-security-info">
                        <div class="date">
                            {{ $key + 1 }}
                        </div>
                        <h3>
                            <a class="text-decoration-none" href="{{ route('services-details', $service->id) }}">
                                {{ \Illuminate\Support\Str::limit($service->name, 20, '.......') }}
                            </a>
                        </h3>
                        <p>
                            {{ \Illuminate\Support\Str::limit($service->description, 50, '......') }}
                        </p>
                        <a class="read-more text-decoration-none" href="{{ route('services-details', $service->id) }}">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="pagination d-flex align-items-center justify-content-center" style="margin: 10px auto">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
<!-- End Services Area -->


<!-- Start Partner Area -->
<div class="partner-area style-2 pb-75">
    <div class="container">
        <h1 class="text-center py-2 text-white">شرركاء النجاح</h1>
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

<!-- Start Testimonial Area -->
<div class="testimonial-area ">
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
                            <a class="text-decoration-none text-white"
                                href="abdallhelzayata194@gmail.com">abdallhelzayata194@gmail.com</a>
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
