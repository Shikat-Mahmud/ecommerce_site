<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function index()
    {
        $wishlistItems = Auth::user()->favorite(Product::class);

        return view('frontend.main.wish_list', compact('wishlistItems'));
    }


    public function toggleWish($id)
    {
        try {
            $product = Product::findOrFail($id);

            Auth::user()->toggleFavorite($product);

            return response()->json([
                'success' => Auth::user()->hasFavorited($product) ? 'Product added to wishlist.' : 'Product removed from wishlist.'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update wishlist. ' . $e->getMessage()], 500);
        }
    }
}
