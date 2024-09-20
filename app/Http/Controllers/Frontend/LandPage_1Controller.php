<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Testimonial;
use App\Models\FeatureLand3;
use App\Models\InfoLand3;
use App\Models\ProblemLand3;
use Illuminate\Http\Request;

class LandPage_1Controller extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::take(8)->get();
        $info = InfoLand3::first();
        $problems = ProblemLand3::all();
        $features = FeatureLand3::all();

        return view('Frontend.landpages.landpage_1', compact(
            'testimonials',
             'info',
             'problems',
             'features',
        ));
    }
}
