<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\ApplicationSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function index()
    {
        $topProducts = OrderItem::select('product_id', \DB::raw('COUNT(*) as purchase_count'))
            ->groupBy('product_id')
            ->orderBy('purchase_count', 'DESC')
            ->limit(5)
            ->get()
            ->map(function ($item) {
                return Product::find($item->product_id);
            });

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $userId = auth()->id();

        $monthlyTotal = Order::where('user_id', $userId)
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->sum('total_amount');

        $monthlyTotalOrder = Order::where('user_id', $userId)->count();

        return view('customer.main.dashboard', compact('topProducts', 'monthlyTotal', 'monthlyTotalOrder'));
    }

    public function customerOrders()
    {
        $userId = auth()->id();
        $orders = Order::where('user_id', $userId)->get();

        return view('customer.main.orders', compact('orders'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $models = [
            'User' => User::class,
            'Category' => Category::class,
            'Product' => Product::class
        ];

        $results = [];

        foreach ($models as $modelName => $model) {
            // Get the table name for the model
            $table = (new $model)->getTable();

            // Get the columns for the model's table
            $columns = Schema::getColumnListing($table);

            // Build the query for each model
            $modelQuery = $model::query();

            foreach ($columns as $column) {
                $modelQuery->orWhere($column, 'LIKE', "%{$query}%");
            }

            // Get the results
            $modelResults = $modelQuery->get();

            // Add model name to each result and skip unwanted columns
            foreach ($modelResults as $result) {
                $filteredResult = $result->toArray();
                unset($filteredResult['id'], $filteredResult['created_at'], $filteredResult['updated_at']);
                $filteredResult['model'] = $modelName;
                $results[] = $filteredResult;
            }
        }

        // Return JSON response
        return response()->json($results);
    }
}
