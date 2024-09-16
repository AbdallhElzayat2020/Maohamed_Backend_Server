@extends('Frontend.layouts.master')
@section('front_title', 'Contact Page')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

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
                    <textarea class="form-control textarea" value="{{ old('message') }}" name="message" placeholder="Enter Your Comments"
                        rows="3"></textarea>
                </div>
                <button class="btn-primary" type="submit">Send A Message</button>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Form Area -->
