<?php

namespace App\traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

trait FileUploadTrait
{
    public function handleFileUpload(Request $request, string $fileName, ?string $oldPath = null, string $dir = 'uploads'): ?string
    {
        // تحقق إذا كان هناك ملف في الطلب
        if (!$request->hasFile($fileName)) {
            return null;
        }

        // تحقق إذا كان الملف موجودًا
        if ($oldPath && File::exists(public_path($oldPath))) {
            File::delete(public_path($oldPath));
        }

        $file = $request->file($fileName);
        $extension = $file->getClientOriginalExtension();
        $updatedFileName = Str::random(20) . '.' . $extension;
        $file->move(public_path($dir), $updatedFileName);
        $filePath = $dir . '/' . $updatedFileName;

        return $filePath;
    }

    // دالة لحذف الملف
    public function deleteFile(string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}


/////////////////////////////////////


//namespace App\Traits;
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Str;
//
//trait FileUploadTrait
//{
//    public function handleFileUpload(Request $request, string $fileName, ?string $oldPath = null, string $type = 'uploads'): ?string
//    {
//        // تحقق إذا كان هناك ملف في الطلب
//        if (!$request->hasFile($fileName)) {
//            return null;
//        }
//
//        // تحديد المجلد بناءً على نوع الملف
//        $dir = $type === 'video' ? 'videos' : 'images';
//
//        // تحقق إذا كان الملف موجودًا وحذفه
//        if ($oldPath && Storage::exists($oldPath)) {
//            Storage::delete($oldPath);
//        }
//
//        $file = $request->file($fileName);
//        $extension = $file->getClientOriginalExtension();
//        $updatedFileName = Str::random(20) . '.' . $extension;
//        $filePath = $file->storeAs($dir, $updatedFileName, 'public');
//
//        return $filePath;
//    }
//
//    // دالة لحذف الملف
//    public function deleteFile(string $path): void
//    {
//        if ($path && Storage::exists($path)) {
//            Storage::delete($path);
//        }
//    }
//}
