@extends('admin.layouts.master')
@section('title', 'Order List')
@push('styles')
    <style>
        .desc-box {
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-table me-1"></i>
                            Order List
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="example" style="max-width:100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user ? $order->user->name : '' }}</td>
                                            <td>৳{{ $order->total_amount }}</td>
                                            <td>
                                                @if ($order->status == 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($order->status == 'completed')
                                                    <span class="badge bg-success">Completed</span>
                                                @elseif($order->status == 'cancelled')
                                                    <span class="badge bg-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-secondary btn-sm me-2 d-flex align-items-center"
                                                        href="{{ route('admin.orders.show', $order->id) }}">View</a>

                                                    <form action="{{ route('admin.orders.update', $order->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="d-flex">
                                                            <select name="status" class="me-2 text-secondary rounded">
                                                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                            </select>

                                                            <button type="submit" class="btn btn-info btn-sm">Change
                                                                Status</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection