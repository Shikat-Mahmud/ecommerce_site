<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $products = Product::where('status', 1);

        // Filter by categories
        if ($request->has('categories') && is_array($request->categories)) {
            $products = $products->whereIn('category_id', $request->categories);
        }

        // Filter by price range
        if ($request->has('min_price') && $request->has('max_price')) {
            $products = $products->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        $products = $products->paginate(12);

        // Handle AJAX request
        if ($request->ajax()) {
            return view('frontend.partials.product_list', compact('products'))->render(); // Return partial view for products
        }

        // Render full page with categories and products for normal requests
        return view('frontend.main.shop', compact('categories', 'products'));
    }
}
