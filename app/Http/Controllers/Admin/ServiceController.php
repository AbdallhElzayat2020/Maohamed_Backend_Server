<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Service;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
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

        $services = new Service();
        $services->name = $validatedData['name'];
        $services->description = $validatedData['description'];
        if ($imgPath) {
            $services->image = $imgPath;
        }

        $services->save();

        return redirect()->route('admin.services.index')->with('success', 'تم إضافة  الخدمة بنجاح');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $service = Service::findOrFail($service->id);
        return view('admin.services.edit', compact('service'));
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
        $service = Service::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($service->image) {
                $this->deleteFile($service->image);
            }
            $imgPath = $this->handleFileUpload($request, 'image');
            $service->image = $imgPath;
        }
        $service->name = $validatedData['name'];
        $service->description = $validatedData['description'];
        $service->save();
        return redirect()->route('admin.services.index')->with('success', 'تم تعديل الراي  بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $this->deleteFile($service->image);
        $service->delete();
        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
