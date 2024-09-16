<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
        ]);

        $imgPath = $this->handleFileUpload($request, 'image');

        $gallery = new Gallery();
        $gallery->name = $validatedData['name'];
        $gallery->description = $validatedData['description'];
        if ($imgPath) {
            $gallery->image = $imgPath;
        }

        $gallery->save();

        return redirect()->route('admin.gallery.index')->with('success', 'تم إضافة  الخدمة بنجاح');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $gallery = Gallery::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($gallery->image) {
                $this->deleteFile($gallery->image);
            }
            $imgPath = $this->handleFileUpload($request, 'image');
            $gallery->image = $imgPath;
        }
        $gallery->name = $validatedData['name'];
        $gallery->description = $validatedData['description'];
        $gallery->save();
        return redirect()->route('admin.gallery.index')->with('success', 'تم تعديل المشروع  بنجاح!');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $this->deleteFile($gallery->image);
        $gallery->delete();
        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
