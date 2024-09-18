<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribtion;
use Illuminate\Http\Request;

class AdminSubscribeLand1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribes = Subscribtion::all();
        return view('admin.landpages.land1.subscribe.index', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.landpages.land1.subscribe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title1_before' => 'required|string',
            'title2_before' => 'required|string',
            'title3_before' => 'required|string',
            'title4_before' => 'required|string',
            'title1_after' => 'required|string',
            'title2_after' => 'required|string',
            'title3_after' => 'required|string',
            'title4_after' => 'required|string',
        ]);
        Subscribtion::create([
            'title1_before' => $request->input('title1_before'),
            'title2_before' => $request->input('title2_before'),
            'title3_before' => $request->input('title3_before'),
            'title4_before' => $request->input('title4_before'),
            'title1_after' => $request->input('title1_after'),
            'title2_after' => $request->input('title2_after'),
            'title3_after' => $request->input('title3_after'),
            'title4_after' => $request->input('title4_after'),
        ]);

        return redirect()->route('admin.subscribe.index')->with('success', 'تمت إضافة البيانات بنجاح');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subscribe = Subscribtion::findOrFail($id);

        // تمرير البيانات إلى عرض التعديل
        return view('admin.landpages.land1.subscribe.edit', compact('subscribe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // تحقق من صحة البيانات
        $request->validate([
            'title1_before' => 'required|string',
            'title2_before' => 'required|string',
            'title3_before' => 'required|string',
            'title4_before' => 'required|string',
            'title1_after' => 'required|string',
            'title2_after' => 'required|string',
            'title3_after' => 'required|string',
            'title4_after' => 'required|string',
        ]);

        // العثور على الدورة وتحديثها
        $subscribe = Subscribtion::findOrFail($id);
        $subscribe->update([
            'title1_before' => $request->input('title1_before'),
            'title2_before' => $request->input('title2_before'),
            'title3_before' => $request->input('title3_before'),
            'title4_before' => $request->input('title4_before'),
            'title1_after' => $request->input('title1_after'),
            'title2_after' => $request->input('title2_after'),
            'title3_after' => $request->input('title3_after'),
            'title4_after' => $request->input('title4_after'),
        ]);

        return redirect()->route('admin.subscribe.index')->with('success', 'تمت تعديل البيانات بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subscribe = Subscribtion::findOrFail($id);

        $subscribe->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
