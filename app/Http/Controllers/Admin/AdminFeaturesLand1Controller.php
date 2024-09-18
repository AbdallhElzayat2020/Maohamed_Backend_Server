<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeatureLandOne;
use Illuminate\Http\Request;

class AdminFeaturesLand1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = FeatureLandOne::all();
        return view("admin.landpages.land1.features.index", compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.landpages.land1.features.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $feature = new FeatureLandOne();
        $feature->title = $request->input('title');
        $feature->save();

        return redirect()->route('admin.features.index')->with('success', 'تمت إضافة  بنجاح');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $feature = FeatureLandOne::findOrFail($id);
        return view('admin.landpages.land1.features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $feature = FeatureLandOne::findOrFail($id);
        $feature->title = $request->input('title');
        $feature->save();

        return redirect()->route('admin.features.index')->with('success', 'تمت تحديث  بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature = FeatureLandOne::findOrFail($id);

        $feature->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
