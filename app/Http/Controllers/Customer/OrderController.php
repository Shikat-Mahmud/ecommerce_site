<?php

namespace App\Http\Controllers\Customer;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function checkout()
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->get();

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });
        return view('frontend.main.checkout', compact('cartItems', 'totalAmount'));
    }

    public function placeOrder()
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        $order = Order::create([
            'user_id' => $userId,
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        // Clear cart
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('order.success')->with('success', 'Order placed successfully');
    }

    public function orderConfirmation()
    {
        $order = Order::with('items.product')->where('user_id', auth()->id())->latest()->first();

        if ($order) {
            $orderItems = $order->items;

            // If the 'total' is not directly stored in the order, calculate it manually
            $totalAmount = $orderItems->sum(function ($item) {
                return $item->product->price * $item->quantity;
            });

            return view('frontend.main.order_success', compact('orderItems', 'totalAmount'));
        }

        return redirect()->route('home')->with('error', 'Order not found.');
    }
}
