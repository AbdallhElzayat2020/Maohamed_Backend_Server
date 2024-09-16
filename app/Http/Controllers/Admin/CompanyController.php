<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Company;
use App\traits\FileUploadTrait;
use Illuminate\Http\Request;

//use App\traits\FileUploadTrait;

class CompanyController extends Controller
{
    use  FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
        ]);

        $imgPath = $this->handleFileUpload($request, 'image');

        $company = new Company($validatedData);

        if ($imgPath) {
            $company->image = $imgPath;
        }

        $company->save();

        return redirect()->route('admin.company.index')->with('success', 'تم إضافة لوجو الشركة بنجاح!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:6000'],
        ]);
        $company = Company::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($company->image) {
                $this->deleteFile($company->image);
            }
            $imgPath = $this->handleFileUpload($request, 'image');
            $company->image = $imgPath;
        }
        $company->save();
        return redirect()->route('admin.company.index')->with('success', 'تم تعديل لوجو الشركة بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);
        $this->deleteFile($company->image);
        $company->delete();
        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
