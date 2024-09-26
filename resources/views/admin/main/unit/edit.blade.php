@extends('admin.layouts.master')
@section('title', 'Edit Unit')
@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Edit Unit</h4>
                        </div>
                        <div> 
                            <a href="{{ route('admin.units.index') }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-arrow-left mr-2 "></i> Unit List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.units.update', ['unit' => $unit->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mt-3">
                                <label for="" class="col-md-4" required>Unit Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{ $unit->name }}"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4 " required>Publication Status <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status"
                                            {{ $unit->status == 1 ? 'checked' : '' }} value="1" />
                                        Published</label>
                                    <label for=""><input type="radio" name="status"
                                            {{ $unit->status == 0 ? 'checked' : '' }} value="0" />
                                        Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-4 ">
                                    <input type="submit" value="Update" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection