@extends('Frontend.layouts.master')

@section('front_title', 'blog Details', $blog->name)


<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->


<!-- Start Blog Area -->
<div style="background-color: var(--primaryColor)" class="blog-details-area pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-right-sidebar" data-cue="slideInUp">
                    <div class="blog-info" data-cue="slideInUp">
                        <h1 class="text-white">{{$blog->title}}</h1>
                        <p>{{$blog->description}}</p>
                        <div class="image" data-cue="slideInUp">
                            <img src="{{asset($blog->image)}}" alt="blog-image">
                        </div>
                        <p style="word-wrap: break-word; white-space: pre-line;">
                            {{$blog->content}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->
