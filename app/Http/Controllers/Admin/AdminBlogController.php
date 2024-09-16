<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'description' => 'required|string',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
        ]);

        $imgPath = $this->handleFileUpload($request, 'image');

        $blog = new Blog;
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];
        $blog->description = $validatedData['description'];
        if ($imgPath) {
            $blog->image = $imgPath;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'تم إضافة المدونة  بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'description' => 'required|string',
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
        ]);
        $blog = Blog::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($blog->image) {
                $this->deleteFile($blog->image);
            }
            $imgPath = $this->handleFileUpload($request, 'image');
            $blog->image = $imgPath;
        }
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];
        $blog->description = $validatedData['description'];
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'تم تعديل المدونة  بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $this->deleteFile($blog->image);
        $blog->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
