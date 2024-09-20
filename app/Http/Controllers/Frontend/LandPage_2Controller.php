<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Company;
use App\Models\Admin\Gallery;
use App\Models\Admin\Service;
use App\Models\Admin\Testimonial;
use App\Models\InfoLandTwo;
use App\Models\subscribtionLand2;

class LandPage_2Controller extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(6);

        $services = Service::paginate(4);

        $companies = Company::take(5)->get();

        $subscribes = subscribtionLand2::all();

        $info = InfoLandTwo::first();

        $testimonials = Testimonial::take(8)->get();

        return view('Frontend.landpages.landpage_2', compact(
            'testimonials',
            'companies',
            'services',
            'galleries',
            'subscribes',
            'info',
        ));
    }
}
