@extends('customer.layouts.master')
@section('title', 'Customer Dashboard')
@section('content')
<div class="pc-container">
    <div class="pc-content">

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card statistics-card-1">
                    <div class="card-body">
                        <img src="{{ asset('/images/widget/img-status-5.svg') }}" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                            <h6 class="mb-0">Monthly Total Orders</h6>
                            <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="material-icons-two-tone f-18">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <h3 class="f-w-300 d-flex align-items-center m-b-0">{{ $monthlyTotalOrder }}
                            </h3>
                            @php
                                $target = 10;
                                $percentage = ($monthlyTotalOrder / $target) * 100;
                                $percentage = min(100, $percentage); 
                            @endphp
                            <span class="badge bg-light-primary ms-2">{{ number_format($percentage, 0) }}%</span>
                        </div>
                        <p class="text-muted mb-2 text-sm mt-3">You made an extra
                            {{ number_format($monthlyTotalOrder - $target, 2) }} this month</p>
                        <div class="progress" style="height: 7px">
                            <div class="progress-bar bg-brand-color-3" role="progressbar"
                                style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card statistics-card-1">
                    <div class="card-body">
                        <img src="{{ asset('/images/widget/img-status-5.svg') }}" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                            <h6 class="mb-0">Monthly Total Purchase Amount</h6>
                            <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="material-icons-two-tone f-18">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <h3 class="f-w-300 d-flex align-items-center m-b-0">৳{{ number_format($monthlyTotal, 2) }}
                            </h3>
                            @php
                                $target = 500000;
                                $percentage = ($monthlyTotal / $target) * 100;
                                $percentage = min(100, $percentage);
                            @endphp
                            <span class="badge bg-light-primary ms-2">{{ number_format($percentage, 0) }}%</span>
                        </div>
                        <p class="text-muted mb-2 text-sm mt-3">You made an extra
                            {{ number_format($monthlyTotal - $target, 2) }} this month</p>
                        <div class="progress" style="height: 7px">
                            <div class="progress-bar bg-brand-color-3" role="progressbar"
                                style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Top 5 Purchased Products</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Total Purchases</th>
                                </tr>
                                @foreach ($topProducts as $product)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="prod img"
                                                class="img-fluid rounded" style="height: 60px; width: auto;">
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>ECOM0{{ $product->id }}</td>
                                        <td>
                                            {{ \App\Models\OrderItem::where('product_id', $product->id)->count() }}
                                        </td>
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