<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProblemLand3;
use Illuminate\Http\Request;

class ProblemLand3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $problems = ProblemLand3::all();
        return view('admin.landpages.land3.problems.index', compact('problems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.landpages.land3.problems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $problem = new ProblemLand3();
        $problem->title = $request->input('title');
        $problem->save();

        return redirect()->route('admin.problems-3.index')->with('success', 'تمت إضافة المشكلة بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $problem = ProblemLand3::findOrFail($id);
        return view('admin.landpages.land3.problems.edit', compact('problem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $problem = ProblemLand3::findOrFail($id);
        $problem->title = $request->input('title');
        $problem->save();

        return redirect()->route('admin.problems-3.index')->with('success', 'تمت تحديث المشكلة بنجاح');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $problem = ProblemLand3::findOrFail($id);

        $problem->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
