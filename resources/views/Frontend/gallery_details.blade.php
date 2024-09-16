@extends('Frontend.layouts.master')

@section('front_title', 'Gallery Details Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->


<!-- Start Blog Area -->
<div style="background-color: var(--primaryColor)" class="blog-details-area pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-details-left-sidebar">
                    <div class="single-pages-widget latest-posts" data-cue="slideInUp">
                        <h3>خدمات اخري</h3>
                        @foreach($galleries as $galleryItem)
                            <div class="post-card d-flex align-items-center">
                                <div class="image">
                                    <a href="{{route('gallery-details',$galleryItem->id)}}"><img
                                            src="{{asset($galleryItem->image)}}"
                                            alt="blog-image"></a>
                                </div>
                                <div class="content">
                                    <h4>
                                        <a class="text-decoration-none"
                                           href="{{route('gallery-details',$galleryItem->id)}}">
                                            {{ \Illuminate\Support\Str::limit($galleryItem->name, 25, '.......') }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-details-right-sidebar" data-cue="slideInUp">
                    <div class="blog-info" data-cue="slideInUp">
                        <h1 class="text-white">{{$gallery->name}}</h1>
                        <div class="image" data-cue="slideInUp">
                            <img src="{{asset($gallery->image)}}" alt="blog-image">
                        </div>
                        <p>
                            {{$gallery->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->
