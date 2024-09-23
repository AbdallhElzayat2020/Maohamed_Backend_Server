<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Product;
use App\services\Payments\Thawani;
use Auth;
use Exception;
use Session;

class PaymentsController extends Controller
{
    public function create($id)
    {
        $course_id = $id;
        $course = Course::where('id', 'LIKE', $course_id)->first();

        // التحقق من وجود الدفع السابق لهذا المنتج من قبل المستخدم الحالي
        $existingPayment = Payment::where('user_id', Auth::id())
            ->where('course_id', $course_id)
            ->where('status', 'successful')
            ->first();

        // إذا وُجد دفع سابق، إعادة توجيه المستخدم إلى الملف الشخصي مع رسالة
        if ($existingPayment) {
            return redirect()->route('profile')->with('info', 'لقد قمت بالدفع لهذا المنتج بالفعل.');
        }

        $client = new Thawani(
            config('services.thawani.secret_key'),
            config('services.thawani.publishable_key'),
            'payment',
        );
        $data = [
            'client_reference_id' => 'Test Payment 1',
            'mode' => 'payment',
            'product_id' => $course_id,
            'products' => [
                [
                    'name' => $course->title,
                    'product_id' => $course_id,
                    'unit_amount' => $course->price * 1000,
                    'quantity' => 1,

                ],
            ],

            'success_url' => route('payments.success'),
            'cancel_url' => route('payments.cancel'),
            'metadata' => [
                'course_id' => $course_id,
            ],
        ];
        try {
            $session_id = $client->createCheckoutSession($data);

            $payment = Payment::forceCreate([
                'user_id' => Auth::id(),
                'reference_id' => $session_id,
                'amount' => $course->price,
                'gateway' => 'thawani',
                'course_id' => $course_id,
                'product_id' => null,
                'status' => 'pending',
            ]);

            Session::put('payment_id', $payment->id);

            Session::put('session_id', $session_id);

            return redirect()->away($client->getPayUrl($session_id));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function PaymentProduct($id)
    {
        $product_id = $id;
        $product = Product::where('id', $product_id)->first();

        // التحقق من وجود الدفع السابق لهذا المنتج من قبل المستخدم الحالي
        $existingPayment = Payment::where('user_id', Auth::id())
            ->where('product_id', $product_id)
            ->where('status', 'successful')
            ->first();

        // إذا وُجد دفع سابق، إعادة توجيه المستخدم إلى الملف الشخصي مع رسالة
        if ($existingPayment) {
            return redirect()->route('profile')->with('info', 'لقد قمت بالدفع لهذا المنتج بالفعل.');
        }

        $client = new Thawani(
            config('services.thawani.secret_key'),
            config('services.thawani.publishable_key'),
            'test',
        );

        $data = [
            'client_reference_id' => 'Test Payment 1',
            'mode' => 'payment',
            'product_id' => $product_id,
            'products' => [
                [
                    'name' => $product->name,
                    'product_id' => $product_id,
                    'unit_amount' => $product->price * 1000,
                    'quantity' => 1,
                ],
            ],
            'success_url' => route('payments.success'),
            'cancel_url' => route('payments.cancel'),
            'metadata' => [
                'product_id' => $product_id,
            ],
        ];

        try {
            $session_id = $client->createCheckoutSession($data);

            $payment = Payment::forceCreate([
                'user_id' => Auth::id(),
                'reference_id' => $session_id,
                'amount' => $product->price,
                'gateway' => 'thawani',
                'course_id' => null,
                'product_id' => $product_id,
                'status' => 'pending',
            ]);

            Session::put('payment_id', $payment->id);
            Session::put('session_id', $session_id);

            return redirect()->away($client->getPayUrl($session_id));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
