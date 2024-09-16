{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}


@extends('Frontend.layouts.master')

@section('front_title', 'HomePage')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->

<!-- Start Login Area -->
<div style="background-color: var(--primaryColor)" class="login-area ptb-100">
    <div class="container">
        <div class="login-info" data-cue="slideInUp">
            <h1 class="text-white">Register Now</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Username">
                    @error('name')
                    <p @class(['text-white'])>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" value="{{old('phone')}}" name="phone" class="form-control" placeholder="phone">
                    @error('phone')
                    <p @class(['text-white'])>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" value="{{old('email')}}" name="email" class="form-control" placeholder="email">
                    @error('email')
                    <p @class(['text-white'])>{{$message}}</p>
                    @enderror
                </div>
{{--                <div class="form-group">--}}
{{--                    <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Your email">--}}
{{--                    @error('email')--}}
{{--                    <p @class(['text-white'])>{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Your password">
                    @error('password')
                    <p @class(['text-white'])>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Your password_confirmation">
                    @error('password_confirmation')
                    <p @class(['text-white'])>{{$message}}</p>
                    @enderror
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button class="default-btn border-0" type="submit">
                    <i class="ri-arrow-right-line"></i>
                    Log In Now
                </button>
                <p>Already have an account? Please <a class="text-decoration-none" href="login.html">Login Here</a></p>
            </form>
        </div>
    </div>
</div>
<!-- End Login Area -->

