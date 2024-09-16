@extends('Frontend.layouts.master')

@section('front_title', 'Policy Page')


<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->
@section('content')
    <div class="container my-5">
        <div class="text-center">
            <h2 class="text-dark"> *سياسات الاسترجاع والاتفاق المالي*
            </h2>
        </div>

        <div class="row">
            <div class="col-lg-12 bg-white rounded-3">
                <div class="text my-5">
                    <h5 class="head">*1. الخدمات التسويقية:*
                    </h5>
                    <p class="desc text-dark">
                        - يتم دفع 70% من قيمة العقد قبل بدء العمل.
                        - في حال إلغاء الاتفاق بعد الدفع، لن يتم استرداد المبلغ المدفوع.
                    </p>
                </div>
                <div class="text my-5">
                    <h5 class="head">
                        *2. الكورسات المسجلة:*
                    </h5>
                    <p class="desc text-dark">
                        - لا يمكن استرداد قيمة الكورسات بعد الشراء، حيث أن الكورس يعتبر منتجًا نهائيًا وغير قابل للاسترجاع
                    </p>
                </div>
                <div class="text my-5">
                    <h5 class="head">
                        *3. المنتجات الرقمية:*
                    </h5>
                    <p class="desc text-dark">
                        لاسترداد قيمة المنتجات الرقمية، يجب توفر الشروط التالية:
                    </p>
                    <ul class="text-dark">
                        <li>- تطبيق 50% على الأقل من المحتوى الذي حصل عليه العميل في المنتج.</li>
                        <li>- ألا يكون قد مضى أكثر من 30 يومًا على الاشتراك.</li>
                    </ul>
                </div>
                <div class="text my-5">
                    <h5 class="head">

                        *خطوات الاسترجاع للمنتجات الرقمية:* </h5>
                    <p class="desc text-dark">
                        - لتقديم طلب الاسترجاع، يرجى تعبئة النموذج التالي: <a class="text-primary"
                            href="{{ route('contact') }}">تعبئة
                            الحقل</a> </p>

                </div>
            </div>
        </div>
    </div>
@endsection
