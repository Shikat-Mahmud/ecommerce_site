<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\ApplicationSetting;
use Illuminate\Support\Facades\Schema;

class CustomerController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalCategory = Category::count();
        $totalProduct = Product::count();
        $subsetCount = 100;

        $peruser = (($totalUsers / $subsetCount) * 100);
        $percategory = (($totalCategory / $subsetCount) * 100);
        $perproduct = (($totalProduct / $subsetCount) * 100);


        return view('customer.main.dashboard', compact('totalUsers', 'totalCategory', 'totalProduct', 'peruser', 'percategory', 'perproduct'));

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
