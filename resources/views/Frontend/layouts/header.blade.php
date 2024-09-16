<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/frontend/assets/images/black-logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ Route::is('about') ? 'active' : '' }}">فريق العمل</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services') }}"
                        class="nav-link {{ Route::is('services') ? 'active' : '' }}">الخدمات</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gallery') }}" class="nav-link {{ Route::is('gallery') ? 'active' : '' }}">معرض
                        الاعمال</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs') }}" class="nav-link {{ Route::is('blogs') ? 'active' : '' }}">
                        المدونة
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('products') }}" class="nav-link {{ Route::is('products') ? 'active' : '' }}">
                        المنتجات الرقمية
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('courses') }}"
                        class="nav-link {{ Route::is('courses') ? 'active' : '' }}">الكورسات</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link {{ Route::is('contact') ? 'active' : '' }}">تواصل
                        معنا</a>
                </li>
                <li class="nav-item dropdown">
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-user-line"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="userDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile') }}">دوراتي</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    تسجيل الخروج
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @else
                        <a class="nav-link bg-primary px-3 btn text-white" href="{{ route('login') }}">
                            سجل الان
                        </a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
