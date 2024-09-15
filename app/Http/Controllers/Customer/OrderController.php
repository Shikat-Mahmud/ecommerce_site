<?php

namespace App\Http\Controllers\Customer;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $userId = auth()->id();
        $cart = Cart::where('user_id', $userId)->where('product_id', $productId)->first();

        if ($cart) {
            // Update quantity if product already exists in the cart
            $cart->quantity += $request->quantity;
        } else {
            // Create new cart entry
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $request->quantity,
            ]);
        }

        return response()->json(['message' => 'Item added to cart']);
    }

    public function checkout()
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

        return response()->json(['message' => 'Order placed successfully']);
    }
}
