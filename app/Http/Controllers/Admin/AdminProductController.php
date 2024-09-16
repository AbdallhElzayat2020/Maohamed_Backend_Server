<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:4000',
            'price' => 'required|numeric|min:0',
            'file_path' => 'nullable|file|mimes:pdf,docx|max:10000',
        ]);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'] ?? '';
        $product->price = $validatedData['price'];

        // تخزين الصورة في المسار المطلوب
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('products_images', 'public');
            $product->image = $imagePath; // سيتم تخزين المسار النسبي للصورة
        }

        // تخزين الملف الآخر
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filePath = $file->store('products_files', 'public');
            $product->file_path = $filePath;
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // تأكد من أن الحقل هو name وليس title
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:4000', // جعل الصورة غير إلزامية (nullable)
            'price' => 'required|numeric|min:0',
            'file_path' => 'nullable|file|mimes:pdf,docx|max:10000', // جعل الملف غير إلزامي (nullable)
        ]);

        // البحث عن المنتج
        $product = Product::findOrFail($id);

        // تحديث البيانات
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];

        // تحديث الصورة إذا تم تحميل واحدة جديدة
        if ($request->hasFile('image')) {
            if ($product->image) {
                \Storage::delete($product->image); // حذف الصورة القديمة
            }
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // تخزين الصورة
            $product->image = $imagePath;
        }

        // تحديث الملف إذا تم تحميل واحد جديد
        if ($request->hasFile('file_path')) {
            if ($product->file_path) {
                \Storage::delete($product->file_path); // حذف الملف القديم
            }
            $file = $request->file('file_path');
            $filePath = $file->store('products', 'public'); // تخزين الملف
            $product->file_path = $filePath;
        }

        // حفظ التغييرات
        $product->save();

        // إعادة التوجيه مع رسالة تأكيد
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            \Storage::delete($product->image);
        }

        if ($product->file_path) {
            \Storage::delete($product->file_path);
        }

        $product->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);

        //        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
