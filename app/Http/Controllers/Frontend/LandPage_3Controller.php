<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Company;
use App\Models\Admin\Gallery;
use App\Models\Admin\InfoLandOne;
use App\Models\Admin\Service;
use App\Models\Admin\Testimonial;
use App\Models\ProblemsLandOne;
use App\Models\Subscribtion;

class LandPage_3Controller extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(6);

        $services = Service::paginate(4);

        $companies = Company::take(5)->get();

        $testimonials = Testimonial::take(8)->get();

        $info = InfoLandOne::first();
        $problems = ProblemsLandOne::all();
        $features = ProblemsLandOne::all();
        $subscribes = Subscribtion::all();
        return view('Frontend.landpages.landpage_3', compact(
            'testimonials',
            'companies',
            'services',
            'galleries',
            'info',
            'problems',
            'features',
            'subscribes',
        ));
    }
}
