<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BannerHome;
use Illuminate\Http\Request;

class BannerHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = BannerHome::all();
        return view('admin.homepage.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homepage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $home = new BannerHome();
        $home->title = $validatedData['title'];
        $home->description = $validatedData['description'];
        $home->save();
        return redirect()->route('admin.homepage.index')->with('success', 'Banner created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerHome $bannerHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = BannerHome::findOrFail($id);
        return view('admin.homepage.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $home = BannerHome::findOrFail($id);
        $home->title = $validatedData['title'];
        $home->description = $validatedData['description'];
        $home->save();
        return redirect()->route('admin.homepage.index')->with('success', 'Banner Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $banners = BannerHome::findorFail($id);
            $banners->delete();
            return response(['status' => 'success', 'message' => 'Deleted successfully']);
        } catch (\Throwable $th) {
            return response(['status' => 'error', 'message' => 'Something went wrong']);
        }
    }
}
