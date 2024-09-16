@extends('Frontend.layouts.master')

@section('front_title', 'Team Page')

<!-- Start Navbar Area -->
@include('Frontend.layouts.header')
<!-- End Navbar Area -->


<!-- Start Team Area -->
<div style="background-color: var(--primaryColor)" class="team-area pages-style pt-100 pb-75">
    <div class="container">
        <div class="section-title text-center" data-cue="slideInUp">
            <h2 class="text-white">فريق العمل</h2>
        </div>
        <div class="row" data-cues="fadeIn">
            @foreach($team as $person)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card team-style">
                        <div class="image">
                            <img style="height: 300px!important" src="{{asset($person->image)}}" alt="team-image">

                        </div>
                        <h3>
                            <a class="text-decoration-none text-white" href="">{{$person->name}}</a>
                        </h3>
                        <p>{{$person->description}}</p>
                        <div class="social-list">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li>
                                    <a class="text-decoration-none" target="_blank" href="{{$person->facebook_link}}">
                                        <i class="ri-facebook-circle-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none" target="_blank" href="{{$person->x_link}}">
                                        <i class="ri-twitter-x-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none" target="_blank" href="{{$person->instagram_link}}">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="pagination d-flex align-items-center justify-content-center" style="margin: 10px auto">
                {{ $team->links() }}
            </div>
        </div>
    </div>
    <div class="bg-ellipse"></div>
</div>
<!-- End Team Area -->


