<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login Page</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/assets/modules/bootstrap-social/bootstrap-social.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/assets/css/components.css')}}">
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{asset('assets/dashboard/assets/img/stisla-fill.svg')}}" alt="logo" width="100"
                             class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header"><h4>Login Page</h4></div>
                        <div class="card-body">
                            @if(session()->has('success'))
                                <i>
                                    <b style="color: green">{{ session()->get('success') }}</b>
                                </i>
                            @endif
                            <form method="POST" action="{{route('admin.handle-login')}}" class="needs-validation"
                                  novalidate="">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input id="email" value="{{ old('email') }}" type="email" class="form-control"
                                           name="email" tabindex="1"
                                           required autofocus>
                                    @error('email')
                                    <code class="text-danger">{{ $message }}</code>
                                    @enderror
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" value="{{ old('password') }}" type="password"
                                           class="form-control" name="password"
                                           tabindex="2" required>
                                    @error('password')
                                    <code class="text-danger">{{ $message }}</code>
                                    @enderror
                                    <div class="invalid-feedback">
                                        Please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="simple-footer">
                        Copyright &copy; <a href="https://wa.me/201212384233" class="text-primary">Abdallh Elzayat</a>
                        2024
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{asset('assets/dashboard/assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/modules/popper.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/modules/tooltip.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/modules/moment.min.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{asset('assets/dashboard/assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/dashboard/assets/js/custom.js')}}"></script>
</body>
</html>
