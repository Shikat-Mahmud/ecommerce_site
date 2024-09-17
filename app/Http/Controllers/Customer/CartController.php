<?php

namespace App\Http\Controllers\Customer;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cart()
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->get();

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('frontend.main.cart', compact('cartItems', 'totalAmount'));
    }

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

        return redirect()->back()->with('success', 'Item added to cart');
    }

    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
            return response()->json(['success' => 'Quantity updated']);
        }
        return response()->json(['error' => 'Item not found'], 404);
    }

    public function removeCartItem($id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => 'Item removed from cart']);
        }
        return response()->json(['error' => 'Item not found'], 404);
    }
}
