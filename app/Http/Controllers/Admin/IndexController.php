<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\ApplicationSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;


class IndexController extends Controller
{

    public function index()
    {
        if (auth()->user()->can('admin-panel')) {
            $startOfMonth = Carbon::now()->startOfMonth();
            $endOfMonth = Carbon::now()->endOfMonth();

            $monthlyTotalOrder = Order::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

            $monthlyTotalCompletedOrder = Order::whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->where('status','completed')
                ->count();

            $totalSalesAmount = Order::where('status','completed')->sum('total_amount');

            $monthlyTotalSalesAmount = Order::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->where('status','completed')
            ->sum('total_amount');

            $topProducts = OrderItem::select('product_id', DB::raw('SUM(quantity) as total_sales'))
            ->groupBy('product_id')
            ->orderBy('total_sales', 'desc')
            ->take(5)
            ->get();

            return view('admin.main.index', compact('monthlyTotalOrder', 'monthlyTotalCompletedOrder', 'totalSalesAmount', 'monthlyTotalSalesAmount','topProducts'));
        } else {
            return redirect()->back()->with('error', 'You do not have permission to go to admin panel.');
        }
    }

    public function login()
    {
        $general = ApplicationSetting::latest()->first();
        return view('admin.main.users.admin_login', compact('general'));
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
