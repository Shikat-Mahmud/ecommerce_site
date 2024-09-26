@extends('admin.layouts.master')
@section('title', 'Review Details')
@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Review Details</h4>

                            </div>
                            <div>
                                <a href="{{ route('admin.reviews.index') }}" class="btn btn-primary btn-sm"><i class="fas fa-arrow-left mr-2 "></i> Review List</a>
                            </div>
                        </div>
                        <div class="card-body text-dark">
                            <div class="p-2 text-center">
                                @if (isset($review->product->image))
                                    <img src="{{ asset('storage/' . $review->product->image) }}" alt="Review-Product-Image"
                                        style="height: 200px; border-radius: 10px;">
                                @else
                                    <img src="{{ asset('images/cat_image.png') }}" alt="Review-Product-Image" style="height: 150px;">
                                @endif
                            </div>
                            <br>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Product Name: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $review->product->name }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Reviewer Name: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $review->user->name }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Rating: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3"><b>{{ $review->rating }}</b><i class="fas fa-star ms-1 text-warning"></i></p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Review: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3">{{ $review->review }}</p>
                                </div>
                            </div>

                            <div class="row d-flex text-left">
                                <div class="col-md-4">
                                    <span>Category Status: </span>
                                </div>
                                <div class="col-md-8">
                                    <p class="ml-3"><b>
                                            @if ($review->status == 'approved')
                                            Approved <i class="fas fa-circle text-c-green f-10 m-r-15" aria-hidden="true" style="color: green; mergin-left: 2px;"></i>
                                            @elseif ($review->status == 'rejected')
                                            Rejected <i class="fas fa-circle text-c-red f-10 m-r-15" aria-hidden="true" style="color: red; mergin-left: 2px;"></i>
                                            @endif
                                        </b></p>
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
