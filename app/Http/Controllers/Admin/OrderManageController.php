<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrderManageController extends Controller
{

    public function index()
    {
        $orders = Order::all();

        return view('admin.main.order.index', compact('orders'));
    }

    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return view('admin.main.order.show', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $order->status = $request->status;

        $order->update();

        return redirect()->back()->with('success', 'Order status updated successfully');
    }

    public function exportSection($orderId)
    {
        $order = Order::findOrFail($orderId);

        $pdf = PDF::loadView('admin.main.order.show', compact('order'));

        return $pdf->download('invoice.pdf');
    }
}
