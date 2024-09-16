@extends('Frontend.layouts.master')

@section('front_title', 'My Courses')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->
<div class="profile-area my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h2>كورساتي</h2>
                </div>
                <div class="row mt-4">
                    @isset($courses)
                        @foreach ($courses as $course)
<<<<<<< HEAD
                            <div class="col-lg-3 d-flex align-items-center justify-content-center mt-4">
=======
                            <div class="col-lg-3 d-flex align-items-center justify-content-center mt-3">
>>>>>>> 396c67c4b87d15dc7d3bc66732c82d82c31507f2
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset($course->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $course->title }}</h5>
                                        <p class="text-black">{{ $course->description }}</p>
                                        <a href="{{ route('course_show', ['id' => $course->id]) }}"
                                            class="btn btn-primary">مشاهده الكورس</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="title">
                    <h2>ملفاتي</h2>
                </div>
                <div class="row mt-4">
                    @isset($products)
                        @foreach ($products as $product)
<<<<<<< HEAD
                            <div class="col-lg-3 d-flex align-items-center justify-content-center mt-4">
=======
                            <div class="col-lg-3 d-flex align-items-center justify-content-center mt-3">
>>>>>>> 396c67c4b87d15dc7d3bc66732c82d82c31507f2
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="text-black">{{ $product->description }}</p>

                                        <a href="{{ asset('storage/'.$product->file_path) }}" download class="btn btn-primary">
                                            تنزيل الملف
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>
    </div>
</div>
