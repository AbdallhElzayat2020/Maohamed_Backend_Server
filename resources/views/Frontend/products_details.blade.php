@extends('Frontend.layouts.master')

@section('front_title', 'Product-Details Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

<!-- Start Banner Area -->
<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <div class="title">
                        <h3 class="text-white">{{$product->name}}</h3>
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="banner-button d-flex align-items-center">
                        <a class="demo text-decoration-none" href="{{ route("payment.create.product" , ["id"=>$product->id]) }}"> <span
                                    class="mx-1">سعر المنتج $</span> {{$product->price}} </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-image">
                    <img src="{{asset('storage/'.$product->image)}}" alt="banner-image">
                    {{-- @dd($product->image) --}}
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <div class="shape-2">
            <img src="{{asset('assets/frontend/assets/images/shape/shape-2.png')}}" alt="shape">
        </div>
    </div>
</div>
<!-- End Banner Area -->

{{--<div style="background-color: var(--primaryColor)" class="overview">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <h3 class="text-white mb-3">{{$course->title}}</h3>--}}
{{--                <p>--}}
{{--                    {{$course->content_text}}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
