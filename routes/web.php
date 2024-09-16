<?php

use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LandPage_1Controller;
use App\Http\Controllers\Frontend\LandPage_2Controller;
use App\Http\Controllers\Frontend\LandPage_3Controller;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\PaymentsCallbackController;
use App\Http\Controllers\Frontend\PaymentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/video/{filename}', [VideoController::class, 'stream'])->name('video.stream');


Route::get('/download/{file_path}', function ($file_path) {
    // إزالة "/" الأول إذا كان موجودًا في بداية المسار
    $file_path = ltrim($file_path, '/');

    // ضبط المسار الكامل داخل التخزين
    $filePath = 'public/storage/' . $file_path; // حفظ الملفات في storage/app/public/product_files

    // تحقق من وجود الملف
    if (Storage::exists($filePath)) {
        return Storage::download($filePath);
    }

    // إعادة توجيه مع رسالة خطأ إذا لم يتم العثور على الملف
    return redirect()->back()->with('error', 'File not found.');
})->name('file.download');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/policy', [HomeController::class, 'policy'])->name('policy');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/courses', [HomeController::class, 'courses'])->name('courses');

Route::get('/courses-details/{id}', [HomeController::class, 'courses_details'])->name('courses-details');

Route::get('/show/course/{id}', [HomeController::class, 'course_show'])->name('course_show')->middleware('CheckPayment');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/services-details/{id}', [HomeController::class, 'services_details'])->name('services-details');

Route::get('/team', [HomeController::class, 'team'])->name('team');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');

Route::get('/blogs-details/{id}', [HomeController::class, 'blog_details'])->name('blog_details');

Route::get('/products', [HomeController::class, 'products'])->name('products');

Route::get('/products-details/{id}', [HomeController::class, 'products_details'])->name('products_details');

Route::get('/gallery-details/{id}', [HomeController::class, 'gallery_details'])->name('gallery-details');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::post('/orders', [OrderController::class, 'store'])->name('orders');

//LandPages Routes
Route::get('/land-page-1', [LandPage_1Controller::class, 'index'])->name('land-page-1');

Route::get('/land-page-2', [LandPage_2Controller::class, 'index'])->name('land-page-2');

Route::get('/land-page-3', [LandPage_3Controller::class, 'index'])->name('land-page-3');



Route::middleware('auth')->group(function () {
    Route::get('payment/create/{id}', [PaymentsController::class, 'create'])->name('payment.create');
    Route::get('payment/createProduct/{id}', [PaymentsController::class, 'PaymentProduct'])->name('payment.create.product');
});


// Route::get('payment/create/{id}', [PaymentsController::class, 'create'])->name('payment.create');

// Route::get('payment/createProduct/{id}', [PaymentsController::class, 'PaymentProduct'])->name('payment.create.product');

Route::get('payment/callback/success', [PaymentsCallbackController::class, 'success'])->name('payments.success');

Route::get('payment/callback/cancel', [PaymentsCallbackController::class, 'cancel'])->name('payments.cancel');




//Login Routes in Auth Controller

require __DIR__ . '/auth.php';
require __DIR__ . '/dashboard.php';
