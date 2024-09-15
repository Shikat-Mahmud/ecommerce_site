@extends('admin.layouts.master')
@section('title', 'Admin Panel')
@section('content')
<div class="pc-container">
    <div class="pc-content">

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card bg-grd-warning order-card">
                    <div class="card-body">
                        <h6 class="text-white">Monthly Total Orders</h6>
                        <h2 class="text-end text-white"><i
                                class="feather icon-shopping-cart float-start"></i><span>{{ $monthlyTotalOrder }}</span>
                        </h2>
                        <p class="m-b-0">Completed Orders<span
                                class="float-end">{{ $monthlyTotalCompletedOrder }}</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-grd-success order-card">
                    <div class="card-body">
                        <h6 class="text-white">Monthly Total Sales Amount</h6>
                        <h2 class="text-end text-white"><i
                                class="feather icon-tag float-start"></i><span>৳{{ $totalSalesAmount }}</span>
                        </h2>
                        <p class="m-b-0">This Month<span class="float-end">৳{{ $monthlyTotalSalesAmount }}</span></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Top 5 Sales Products</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Total Sales</th>
                                </tr>
                                @foreach($topProducts as $product)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $product->product->image) }}" alt="prod img"
                                                class="img-fluid rounded" style="height: 60px; width: auto;">
                                        </td>
                                        <td>{{ $product->product->name }}</td>
                                        <td>ECOM0{{ $product->product->id }}</td>
                                        <td>{{ $product->total_sales }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection