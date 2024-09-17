<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerManageController extends Controller
{
    public function index()
    {
        $customers = User::where('role', 'user')->get();
        return view('admin.main.customer.index', compact('customers'));
    }

    public function show(string $id)
    {
        $customer = User::findOrFail($id);
        $totalOrders = Order::where('user_id', $id)->count();
        return view('admin.main.customer.show', compact('customer', 'totalOrders'));
    }
}
