<!doctype html>
<html lang="ar" dir="rtl">

<head>
    @include('Frontend.layouts.head')


    @section('front_title', 'LandPage_1')
</head>

<body style="background-color: var(--primaryColor); margin-top: 20px">
    <div class="text-top mt-5">
        <h2 class="text-white  text-center">
            هل ترغب في النجاح في مواقع التواصل الاجتماعي ؟
        </h2>
        <h2 class="text-white mt-5 text-center">
            تعلم ذلك بطريقة احترافية ومدروسة في كورس صناعة المحتوى
        </h2>
    </div>
    <div class="iframe mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="content d-flex align-items-center justify-content-center">
                        <iframe class="d-flex align-items-center justify-content-center" width="100%" height="700"
                            src="https://www.youtube.com/embed/b2q5yBL4XYI?si=RLHs2LCXE8_e77It"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="info d-flex align-items-center justify-content-center">
                        <div class="text text-center mt-3">
                            <p class="text-center" style="font-size: 18px">شاهد الفيديو بالكامل لكي تتعرف على تفاصيل
                                الكورس</p>
                            <a href="{{ route('courses') }}" class="btn btn-primary px-5">احجز مقعد الان معنا</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="problems mt-5">
        <div class="container">
            <div class="heading">
                <h2 class="text-center text-white mb-3">هل تعاني من المشاكل </h2>
            </div>
            <div class="row ">
                <div class="col-lg-6 mt-3">
                    <div class="image">
                        <img src="{{ asset('assets/frontend/assets/images/Me_1.jpg') }}"
                            style="width: 100%; max-width: 100%; height: 400px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-3 d-flex align-items-center">
                    <ul
                        style="background-color: #ddd;width: 100%; padding: 20px; text-align: right; list-style: none; border-radius: 8px;">
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-circle-xmark text-danger" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-center text-white mt-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, repellat, unde? A, esse eum eveniet
                fugit
                molestiae placeat praesentium repellendus? Beatae consectetur dolor eaque molestias nihil porro quidem
                vel
                voluptatem!
            </p>
        </div>
    </div>
    <div class="features mt-5">
        <div class="container">
            <div class="heading">
                <h2 class="text-center text-white mb-3">عندما اشتراكك في الكورس ستستفيد التالي :</h2>
            </div>
            <div class="row ">
                <div class="col-lg-6 mt-3 d-flex align-items-center">
                    <ul
                        style="background-color: #ddd;width: 100%; padding: 20px; text-align: right; list-style: none; border-radius: 8px;">
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                        <li class="d-flex align-items-center mt-5 justify-content-between">
                            <a href="javascript:void(0)"
                                class="text-decoration-none text-dark  d-flex align-items-center"
                                style="list-style: none; font-size: 18px;">
                                المشكلة المشكلة المشكلة المشكلةالمشكلة المشكلةالمشكلة المشكلة 1
                            </a>
                            <i class="fa-solid fa-check text-success" style="font-size: 18px; margin-left: 10px;">
                            </i>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="image">
                        <img src="{{ asset('assets/frontend/assets/images/Me_1.jpg') }}"
                            style="width: 100%; max-width: 100%; height: 400px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Testimonial Area -->
    <div class="testimonial-area pt-100 pb-75">
        <div class="container">
            <div class="section-title text-center" data-cue="slideInUp">
                <h2 class="text-white">اراء المشتركين بالكورس</h2>
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

    <div class="features mt-5">
        <div class="container">
            <div class="heading">
                <h2 class="text-center text-white mb-3">عندما اشتراكك في الكورس ستستفيد التالي :</h2>
            </div>
            <div class="row ">
                <div class="col-lg-6 mt-3 d-flex align-items-center">
                    <div class="text">
                        <h2 class="text-white mb-3">نزل الملف التعريفي الخاص بالكورس</h2>
                        <p>تفاثيل عن الكورس تفاثيل عن الكورس تفاثيل عن الكورس تفاثيل عن الكورس تفاثيل عن الكورس </p>
                        {{--   المسار هنا بتاع الملف --}}
                        <a href="path/to/your/file.pdf" download="filename.pdf" class="btn btn-primary px-5">
                            تنزيل
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="image">
                        <img src="{{ asset('assets/frontend/assets/images/Me_1.jpg') }}"
                            style="width: 100%; max-width: 100%; height: 400px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature_course my-5">
        <div class="container">
            <h2 class="text-center text-white">ماذا الذي ستحصل عليه من الكورس</h2>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-12 d-flex align-items-center justify-content-center">
                    <div class="text">
                        <p class="text-center text-white mt-4">
                            1- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus alias asperiores
                            et
                            excepturi
                            hic id, impedit iste itaque maxime molestias numquam, obcaecati officia qui quod rem totam
                            ullam.
                            Animi.
                        </p>
                        <p class="text-center text-white mt-4">
                            2- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus alias asperiores
                            et
                            excepturi
                            hic id, impedit iste itaque maxime molestias numquam, obcaecati officia qui quod rem totam
                            ullam.
                            Animi.
                        </p>
                        <p class="text-center text-white mt-4">
                            3- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus alias asperiores
                            et
                            excepturi
                            hic id, impedit iste itaque maxime molestias numquam, obcaecati officia qui quod rem totam
                            ullam.
                            Animi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact Form --}}
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
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control" placeholder="Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control" placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" value="{{ old('phone') }}" name="phone"
                                    class="form-control" placeholder="phone">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" value="{{ old('subject') }}" name="subject"
                                    class="form-control" placeholder="subject">
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

    <!-- Js Files -->
    @include('Frontend.layouts.scripts')
</body>

</html>
