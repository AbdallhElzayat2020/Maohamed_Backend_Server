@extends('Frontend.layouts.master')

@section('front_title', 'Services Details Page')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

<!-- Start Services Details Area -->
<div style="background-color: var(--primaryColor)" class="services-details-area pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="services-details-left-sidebar">
                    <div class="single-pages-widget services" data-cue="slideInUp">
                        <h3>خدمات اخري</h3>
                        <ul class="list-unstyled ps-0 mb-0">
                            @foreach ($services as $key => $serviceItem)
                                <li>
                                    <a class="text-decoration-none"
                                       href="{{route('services-details', $serviceItem->id)}}">
                                        {{$serviceItem->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="single-pages-widget text-center questions" data-cue="slideInUp">
                        <h6>ان كان لديك اي اسالة تواصل معنا للاستفسارات</h6>
                        <a style="color: var(--primaryColor)" href="{{route('contact')}}">لطلب الخدمة</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="services-details-right-sidebar" data-cue="slideInUp">
                    <h1 class="text-white">{{$service->name}}</h1>
                    <div class="image" data-cue="slideInUp">
                        <img src="{{asset($service->image)}}" alt="services-image">
                    </div>
                    <p>{{$service->description}}</p>
                </div>
                <div class="row mt-5">
                    @foreach($services as $key => $service)
                        <div class="col-lg-6 col-sm-6 mt-5">
                            <div class="single-security-info">
                                <div class="date">
                                    {{$key+1}}
                                </div>
                                <h3>
                                    <a class="text-decoration-none"
                                       href="{{route('services-details',$service->id)}}">
                                        {{ \Illuminate\Support\Str::limit($service->name, 20, '.......') }}
                                    </a>
                                </h3>
                                <p>
                                    {{ \Illuminate\Support\Str::limit($service->description, 50, '......') }}
                                </p>
                                <a class="read-more text-decoration-none"
                                   href="{{route('services-details',$service->id)}}">
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
    </div>
</div>
<!-- End Services Details Area -->
