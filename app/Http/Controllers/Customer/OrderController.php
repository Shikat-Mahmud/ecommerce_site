<?php

namespace App\Http\Controllers\Customer;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\BillingDetail;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade as Cart;


class OrderController extends Controller
{
    public function checkout()
    {
        $user = auth()->user();
        $billingDetail = BillingDetail::where('user_id', $user->id)->first();

        $cartItems = Cart::getContent();
        $deliveryCharge = 60;
        $subTotalAmount = Cart::getTotal();
        $totalAmount = $deliveryCharge + $subTotalAmount;
        return view('frontend.main.checkout', compact('cartItems', 'subTotalAmount', 'totalAmount', 'deliveryCharge', 'user', 'billingDetail'));
    }

    public function placeOrder(Request $request)
    {
        $userId = auth()->id();
        $cartItems = Cart::getContent();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty'], 400);
        }

        $totalAmount = Cart::getTotal();

        $order = Order::create([
            'user_id' => $userId,
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->price,
            ]);
        }

        // Clear cart
        Cart::clear();

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
