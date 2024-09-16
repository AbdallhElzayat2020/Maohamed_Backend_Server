<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Team;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
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
            'facebook_link' => 'required|string',
            'x_link' => 'required|string',
            'instagram_link' => 'required|string',
        ]);

        $imgPath = $this->handleFileUpload($request, 'image');

        $team = new Team();
        $team->name = $validatedData['name'];
        $team->description = $validatedData['description'];
        $team->x_link = $validatedData['x_link'];
        $team->facebook_link = $validatedData['facebook_link'];
        $team->instagram_link = $validatedData['instagram_link'];
        if ($imgPath) {
            $team->image = $imgPath;
        }

        $team->save();

        return redirect()->route('admin.team.index')->with('success', 'تم أضافة  العضو بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook_link' => 'required|string',
            'x_link' => 'required|string',
            'instagram_link' => 'required|string',
        ]);
        $team = Team::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($team->image) {
                $this->deleteFile($team->image);
            }
            $imgPath = $this->handleFileUpload($request, 'image');
            $team->image = $imgPath;
        }
        $team->name = $validatedData['name'];
        $team->description = $validatedData['description'];
        $team->x_link = $validatedData['x_link'];
        $team->facebook_link = $validatedData['facebook_link'];
        $team->instagram_link = $validatedData['instagram_link'];
        $team->save();
        return redirect()->route('admin.team.index')->with('success', 'تم تعديل  العضو بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $this->deleteFile($team->image);
        $team->delete();
        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
