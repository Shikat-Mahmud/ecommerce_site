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
                                    @if (!$customers->isEmpty())
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->name }}</td>
                                                <td>
                                                    @if ($customer->photo)
                                                        <img src="{{ asset('storage/' . $customer->photo) }}" alt="Category Photo"
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
                                                            href="{{ route('categories.show', $customer->id) }}">View</a>

                                                        <a class="btn btn-info btn-sm me-2"
                                                            href="{{ route('categories.edit', $customer->id) }}">Edit</a>

                                                        <form class="deleteForm"
                                                            action="{{ route('categories.destroy', $customer->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm btnDelete">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="py-5 text-center">
                                                <p>Top product is empty!</p>
                                            </td>
                                        </tr>
                                    @endif
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