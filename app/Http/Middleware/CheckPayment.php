<?php

namespace App\Http\Middleware;

use App\Models\Course;
use App\Models\Payment;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckPayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the course ID from the route
        $courseId = $request->route('id');
        $course = Course::find($courseId);
        if (! $course) {
            return redirect()->route('home')->with('error', 'The requested course does not exist.');
            // Alternatively, you can use abort(404) to show a 404 page:
            // abort(404, 'Course not found');
        }
        // Check if the user has successfully paid for this course
        $hasPaid = Payment::where('user_id', Auth::id())
            ->where('course_id', $courseId)
            ->where('status', 'successful')
            ->exists();

        // If the user has paid, proceed to the course; otherwise, redirect to buy page
        if ($hasPaid) {
            return $next($request);
        }

        // Redirect to the course purchase page if the payment is not found or not successful
        return redirect()->route('payment.create', ['id' => $courseId])->with('error', 'You need to purchase this course to access it.');
    }
}
