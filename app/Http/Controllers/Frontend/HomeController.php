<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        $products = Product::where('status',1)->latest()->limit(8)->get();
        $catBg = [
            'fef1f1', // Light pink
            'e1fcf2', // Light cyan
            'f4f1fe', // Light lavender
            'fbf9e4', // Light yellow
            'd9f7be', // Light green
            'c5cae9', // Light blue
            'fce4ec', // Light pink
            'e0f2f1', // Light teal
            'f3e5f5', // Light purple
            'e8f5e9', // Light green
            'ffccbc', // Light orange
        ];

        $bgColorCount = count($catBg);

        return view('frontend.main.home', compact('categories', 'catBg', 'bgColorCount', 'products'));
    }

    public function productView($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.main.product', compact('product'));
    }
}
