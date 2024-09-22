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
        $products = Product::where('status', 1)->latest()->limit(8)->get();
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
        $relatedProducts = Product::where('category_id', $product->category_id)
        ->whereNot('id',$product->id)
        ->get();
        return view('frontend.main.product', compact('product', 'relatedProducts'));
    }

    public function quickProductView($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function about()
    {
        return view('frontend.main.about_us');
    }

    public function contact()
    {
        return view('frontend.main.contact_us');
    }


    public function search(Request $request)
    {
        $categoryId = $request->input('category');
        $searchContent = $request->input('search');

        $products = Product::where('status', 1)
            ->when($categoryId, function ($query, $categoryId) {
                return $query->where('category_id', $categoryId);
            })
            ->where('name', 'LIKE', "%{$searchContent}%")
            ->paginate(12)
            ->appends($request->except('page')); // This ensures search parameters persist during pagination

        return view('frontend.main.search', compact('products'));
    }

    public function productOfCategory($id)
    {
        $categoryId = $id;

        $products = Product::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(8);

        return view('frontend.main.category_product', compact('products'));
    }
}
