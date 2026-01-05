<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::query()
            ->where('user_id', Auth::id())
            ->orderByDesc('placed_at')
            ->paginate(10);

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        return view('orders.show', compact('order'));
    }
}
