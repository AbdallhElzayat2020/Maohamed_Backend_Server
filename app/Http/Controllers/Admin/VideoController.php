<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class VideoController extends Controller
{
    //    public function create()
    //    {
    //        $courses = Course::all();
    //        return view('admin.courses.add_video', compact('courses'));
    //    }
    public function stream($filename)
    {
        $path = storage_path('app/public/videos/'.$filename);

        if (! Storage::exists('public/videos/'.$filename)) {
            abort(404);
        }

        $stream = new StreamedResponse(function () use ($path) {
            $stream = fopen($path, 'rb');
            while (! feof($stream)) {
                echo fread($stream, 8192);
                flush();
            }
            fclose($stream);
        });

        $stream->headers->set('Content-Type', 'video/mp4');
        $stream->headers->set('Content-Disposition', 'inline; filename="'.$filename.'"');
        $stream->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
        $stream->headers->set('Pragma', 'no-cache');
        $stream->headers->set('Expires', '0');

        return response()->file($path, [
            'Content-Type' => 'video/mp4',
            'Content-Disposition' => 'inline; filename="'.$filename.'"',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }

    public function createForCourse(Course $course)
    {
        $videos = $course->videos;

        return view('admin.courses.videos.create', compact('course', 'videos'));
    }

    public function fetchVideos($courseId)
    {
        $videos = Video::where('course_id', $courseId)->get();

        return response()->json($videos);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'video' => 'required|mimes:mp4,mkv,avi|max:204800', // 200MB max size
            'description' => 'nullable|string',
        ]);
        //        dd($request->all());
        // Handle the file upload
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public'); // Store in 'storage/app/public/videos'
        }

        // Create a new Video instance//
        $video = new Video;
        $video->course_id = $request->input('course_id');
        $video->title = $request->input('title');
        $video->video = $videoPath; // Save the video path
        $video->description = $request->input('description');
        $video->save();

        // Redirect back with success message
        return redirect()->back();
    }

    public function edit(Video $video)
    {
        //        $courses = Course::all();
        $courses = Course::all();

        return view('admin.courses.videos.edit', compact('courses', 'video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            //            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'video' => 'mimes:mp4,mkv,avi|max:204800', // 200MB max size
            'description' => 'nullable|string',
        ]);
        //        dd($request->all());
        // تحديث البيانات
        $video->title = $request->title;
        $video->description = $request->description;
        //        $video->course_id = $request->course_id;

        if ($request->hasFile('video')) {
            // حذف الفيديو القديم من السيرفر
            if (Storage::exists($video->video)) {
                Storage::delete($video->video);
            }

            // رفع الفيديو الجديد
            $videoPath = $request->file('video')->store('videos');
            $video->video = $videoPath;
        }

        $video->save();

        return redirect()->route('admin.courses.index', $video->course_id)
            ->with('success', 'Video updated successfully!');
    }

    public function index($courseId)
    {
        $videos = Video::where('course_id', $courseId)->get();

        return response()->json($videos);
    }

    public function destroy(Video $video)
    {
        // حذف الفيديو من السيرفر
        if (Storage::exists($video->video)) {
            Storage::delete($video->video);
        }

        // حذف السجل من قاعدة البيانات
        $video->delete();

        // إرسال استجابة JSON لعملية الحذف الناجحة
        return response()->json(['success' => true]);
    }
}
