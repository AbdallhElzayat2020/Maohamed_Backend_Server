<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCourseController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'content_text' => 'required',
            'instructor_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

//        dd($request->all());
        // Create the course

        $imgPath = $this->handleFileUpload($request, 'image');
//        $imgPath = $this->handleFileUpload($request, 'image');

        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->content_text = $request->content_text;
        $course->instructor_name = $request->instructor_name;
        $course->price = $request->price;
        if ($imgPath) {
            $course->image = $imgPath;
        }
        $course->save();
        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'content_text' => 'required',
            'instructor_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        $imgPath = $this->handleFileUpload($request, 'image');

        $course->title = $request->title;
        $course->description = $request->description;
        $course->content_text = $request->content_text;
        $course->instructor_name = $request->instructor_name;
        $course->price = $request->price;
        if ($imgPath) {
            $course->image = $imgPath;
        }
        $course->save();
        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // Delete all videos associated with the course
        foreach ($course->videos as $video) {
            // Delete the video file if it exists
            if ($video->video) {
                $this->deleteFile($video->video);
            }
            // Delete the video record
            $video->delete();
        }

        // Delete the course image if it exists
        if ($course->img) {
            $this->deleteFile($course->img);
        }

        // Delete the course
        $course->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Course and associated videos deleted successfully.'
        ]);
    }
}
