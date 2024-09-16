<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Testimonial;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
        ]);

        $imgPath = $this->handleFileUpload($request, 'image');

        $testimonial = new Testimonial;
        $testimonial->name = $validatedData['name'];
        $testimonial->nickname = $validatedData['nickname'];
        $testimonial->description = $validatedData['description'];
        if ($imgPath) {
            $testimonial->image = $imgPath;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->with('success', 'تم إضافة رأي العميل بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $testimonial = Testimonial::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                $this->deleteFile($testimonial->image);
            }
            $imgPath = $this->handleFileUpload($request, 'image');
            $testimonial->image = $imgPath;
        }
        $testimonial->name = $validatedData['name'];
        $testimonial->nickname = $validatedData['nickname'];
        $testimonial->description = $validatedData['description'];
        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->with('success', 'تم تعديل الراي  بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->deleteFile($testimonial->image);
        $testimonial->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
