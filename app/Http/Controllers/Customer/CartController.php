<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function cart()
    {
        $cartItems = Cart::getContent();
        $totalAmount = Cart::getTotal();

        return view('frontend.main.cart', compact('cartItems', 'totalAmount'));
    }

    public function addToCart(Request $request, $productId)
    {
        $cartProduct = Product::findOrFail($productId);
        Cart::add($productId, $cartProduct->name, $cartProduct->price, $request->quantity, ['cartImage' => $cartProduct->image]);

        return redirect()->back()->with('success', 'Item added to cart');
    }

    public function singleAddToCart($productId)
    {
        $cartProduct = Product::findOrFail($productId);
        Cart::add($productId, $cartProduct->name, $cartProduct->price, 1, ['cartImage' => $cartProduct->image]);

        return response()->json(['success' => 'Item added to cart']);
    }

    public function removeCartItem($id)
    {
        Cart::remove($id);
        return response()->json(['success' => 'Item removed from cart']);
    }

    public function incrementQuantity($id)
    {
        Cart::update($id, [
            'quantity' => 1, 
        ]);

        return response()->json(['success' => 'Quantity incremented.']);
    }

    public function decrementQuantity($id)
    {
        Cart::update($id, [
            'quantity' => -1,
        ]);

        return response()->json(['success' => 'Quantity decremented.']);
    }
}
