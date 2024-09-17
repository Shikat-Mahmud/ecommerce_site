@extends('admin.layouts.master')
@section('title', 'Customer Details')
@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Customer Details</h4>

                        </div>
                        <div>
                            <a href="{{ route('admin.customers.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-arrow-left mr-2 "></i> Customer List</a>
                        </div>
                    </div>
                    <div class="card-body text-dark">
                        <div class="p-2 text-center">
                            @if (isset($customer->photo))
                                <img src="{{ asset('storage/' . $customer->photo) }}" alt="Customer-Photo"
                                    style="height: 200px; border-radius: 10px;">
                            @else
                                <img src="{{ asset('/assets/images/user/avatar-2.jpg') }}" alt="Customer-Photo">
                            @endif
                        </div>
                        <br>

                        <div class="row d-flex text-left">
                            <div class="col-md-4">
                                <span>Customer Name: </span>
                            </div>
                            <div class="col-md-8">
                                <p class="ml-3">{{ $customer->name }}</p>
                            </div>
                        </div>

                        <div class="row d-flex text-left">
                            <div class="col-md-4">
                                <span>Email: </span>
                            </div>
                            <div class="col-md-8">
                                <p class="ml-3">{{ $customer->email }}</p>
                            </div>
                        </div>

                        <div class="row d-flex text-left">
                            <div class="col-md-4">
                                <span>Phone: </span>
                            </div>
                            <div class="col-md-8">
                                @if (isset($customer->phone))
                                    <p class="ml-3">{{ $customer->phone }}</p>
                                @else
                                    <p class="ml-3 text-secondary">Null</p>
                                @endif
                            </div>
                        </div>

                        <div class="row d-flex text-left">
                            <div class="col-md-4">
                                <span>Address: </span>
                            </div>
                            <div class="col-md-8">
                                @if (isset($customer->address))
                                    <p class="ml-3">{{ $customer->address }}</p>
                                @else
                                    <p class="ml-3 text-secondary">Null</p>
                                @endif
                            </div>
                        </div>

                        <div class="row d-flex text-left">
                            <div class="col-md-4">
                                <span>Total Orders: </span>
                            </div>
                            <div class="col-md-8">
                                <p class="ml-3"><b>{{ $totalOrders }}</b></p>
                            </div>
                        </div>

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection