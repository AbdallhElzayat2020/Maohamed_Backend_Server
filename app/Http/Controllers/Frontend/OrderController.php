<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Admin\Order;

class OrderController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->subject = $request->subject;
        $order->message = $request->message;
        $order->save();
        return redirect()->back()->with('success', 'تم تقديم الطلب وسيتم التواصل معك في خلال 24 ساعة ');
    }
}
