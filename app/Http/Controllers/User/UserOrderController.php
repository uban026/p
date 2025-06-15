<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserOrderController extends Controller
{
    public function index(Request $request)
    {
        // $orders = Order::with(['items.product'])
        //     ->where('user_id', auth()->id())
        //     ->when($request->status, function ($query, $status) {
        //         return $query->where('status', $status);
        //     })
        //     ->when($request->search, function ($query, $search) {
        //         return $query->where('order_code', 'like', '%' . $search . '%');
        //     })
        //     ->latest()
        //     ->paginate(10);

        $orders = Order::with(['items.product', 'coupon']) // jika perlu coupon
            ->where('user_id', auth()->id())
            ->when($request->status, fn($q, $s) => $q->where('status', $s))
            ->when($request->search, fn($q, $s) => $q->where('order_code', 'like', "%$s%"))
            ->latest()
            ->paginate(10);

        $orders->getCollection()->transform(function ($order) {
            $discount = 0;

            if ($order->coupon && $order->coupon->status === 'active') {
                $total = $order->items->sum(fn($item) => $item->quantity * $item->price);
                if ($order->coupon->type === 'amount') {
                    $discount = $order->coupon->value;
                } elseif ($order->coupon->type === 'percent') {
                    $discount = ($order->coupon->value / 100) * $total;
                }
            }

            $order->total_pay = max(($order->total_amount) - $discount, 0);

            return $order;
        });


        return view('landing.order', compact('orders'));
    }
}