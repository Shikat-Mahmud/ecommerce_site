@extends('admin.layouts.master')
@section('title', 'Customer List')
@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-table me-1"></i>
                            Customer List
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->name }}</td>
                                            <td>
                                                @if ($customer->photo)
                                                    <img src="{{ asset('storage/' . $customer->photo) }}" alt="Customer Photo"
                                                        style="height: 50px; border-radius: 6px;">
                                                @else
                                                    <img src="https://placehold.co/400" alt="Default Photo"
                                                        style="height: 50px; border-radius: 6px;">
                                                @endif
                                            </td>
                                            <td>{{ $customer->email }}</td>
                                            <td>
                                                @if (isset($customer->phone))
                                                    {{ $customer->phone }}
                                                @else
                                                    <span class="text-secondary">Null</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-secondary btn-sm me-2"
                                                        href="{{ route('admin.customers.show', $customer->id) }}">View</a>
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