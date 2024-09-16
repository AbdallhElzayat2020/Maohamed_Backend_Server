<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('Frontend.layouts.head')
    @yield('head')
</head>

<body>
    @yield('content')

    @include('Frontend.layouts.footer')
    <!-- Back to Top -->
    <div class="go-top">
        <i class="ri-arrow-up-line"></i>
    </div>

    <!-- Js Files -->
    @include('Frontend.layouts.scripts')

</body>

</html>
