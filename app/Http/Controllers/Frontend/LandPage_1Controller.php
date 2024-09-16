<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Testimonial;
use Illuminate\Http\Request;

class LandPage_1Controller extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::take(8)->get();

        return view('Frontend.landpages.landpage_1', compact('testimonials'));
    }
}
