<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfoLandTwo;
use Illuminate\Http\Request;

class AdminInfoLand2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informaitions = InfoLandTwo::all();

        return view("admin.landpages.land2.info.index", compact(var_name: 'informaitions'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.landpages.land2.info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    function extractYoutubeId($url)
    {
        preg_match("/(youtu\.be\/|youtube\.com\/(watch\?(.*&)?v=|(embed|v)\/))([^\?&\"'>]+)/", $url, $matches);
        return $matches[5] ?? null;
    }

    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => ['required', 'string', 'regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.be)\/.+$/'],
        ]);

        // Extract the YouTube video ID
        $youtubeId = $this->extractYoutubeId($request->input('video_url'));

        // If no valid YouTube ID, return error
        if (!$youtubeId) {
            return redirect()->back()->withErrors(['video_url' => 'Invalid YouTube link']);
        }

        // Create the record
        InfoLandTwo::create([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'description' => $request->input('description'),
            'video_url' => $youtubeId, // Save the YouTube ID only
        ]);

        // Redirect back with success message
        return redirect()->route('admin.info-2.index')->with('success', 'Data added successfully!');
    }


    public function edit($id)
    {
        // Retrieve the specific record by ID
        $info = InfoLandTwo::findOrFail($id);

        // Pass the data to the edit view
        return view('admin.landpages.land2.info.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => ['required', 'string', 'regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.be)\/.+$/'],
        ]);
        // dd($request->all());
        // Find the record by ID
        $info = InfoLandTwo::findOrFail($id);

        // Extract the YouTube video ID
        $youtubeId = $this->extractYoutubeId($request->input('video_url'));

        // If no valid YouTube ID, return error
        if (!$youtubeId) {
            return redirect()->back()->withErrors(['video_url' => 'Invalid YouTube link']);
        }

        // Update the record
        $info->update([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'description' => $request->input('description'),
            'video_url' => $youtubeId, // Save YouTube ID only
        ]);

        // Redirect back with success message
        return redirect()->route('admin.info-2.index')->with('success', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $info = InfoLandTwo::findOrFail($id);

        $info->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
