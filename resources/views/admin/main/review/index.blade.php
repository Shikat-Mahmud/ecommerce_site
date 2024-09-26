@extends('admin.layouts.master')
@section('title', 'Review List')
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
                            Review List
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="example" style="max-width:100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Reviewer Name</th>
                                        <th>Product Name</th>
                                        <th>Rating</th>
                                        <th>Review</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td>{{ $review->id }}</td>
                                            <td>{{ $review->user ? $review->user->name : '' }}</td>
                                            <td>{{ $review->product ? $review->product->name : '' }}</td>
                                            <td>{{ $review->rating }}</td>
                                            <td>{{ $review->review }}</td>
                                            <td>
                                                @if ($review->status == 'approved')
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif ($review->status == 'rejected')
                                                    <span class="badge bg-danger">Rejected</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-secondary btn-sm me-2 d-flex align-items-center"
                                                        href="{{ route('admin.reviews.show', $review->id) }}">View</a>

                                                    <form action="{{ route('admin.reviews.update', $review->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="d-flex">
                                                            <select name="status" class="me-2 text-secondary rounded">
                                                                <option value="approved" {{ $review->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                                                <option value="rejected" {{ $review->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
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