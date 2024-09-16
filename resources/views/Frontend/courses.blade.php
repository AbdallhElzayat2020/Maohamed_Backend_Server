@extends('Frontend.layouts.master')

@section('front_title', 'HomePage')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->
<!-- Start Blog Area -->
<div style="background-color: var(--primaryColor)" class="blog-area pt-100 pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">اهم الكورسات</h2>
        </div>
        <div class="row justify-content-center" data-cues="fadeIn">
            @foreach($courses as $course)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-card style-3 blog-style">
                        <div class="image">
                            <a href="{{route('courses-details',$course->id)}}">
                                <img src="{{asset($course->image)}}" alt="{{$course->title}}">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a class="text-decoration-none" href="{{route('courses-details',$course->id)}}">
                                 {{$course->title}}
                                </a>
                            </h3>
                            <a class="read-more text-white text-decoration-none" href="{{route('courses-details',$course->id)}}">
                                Read More
                                <i class="ri-arrow-right-line text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
<!-- End Blog Area -->
