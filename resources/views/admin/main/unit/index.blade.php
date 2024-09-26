@extends('admin.layouts.master')
@section('title', 'Unit List')
@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-table me-1"></i>
                            Unit List
                        </div>
                        <div>
                            <a href="{{ route('admin.units.create') }}" class="btn btn-primary btn-sm">Create new
                                Unit
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($units as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @if ($item->status == '1')
                                            <span>Published</span> <i class="fas fa-circle text-c-green f-10 m-r-15"
                                                aria-hidden="true" style="color: green; mergin-left: 2px;"></i>
                                            @elseif($item->status == '0')
                                            <span>Unpublished</span> <i class="fas fa-circle text-c-red f-10 m-r-15"
                                                aria-hidden="true" style="color: red; mergin-left: 2px;"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-info btn-sm me-2"
                                                    href="{{ route('admin.units.edit', $item->id) }}">Edit</a>

                                                <form class="deleteForm"
                                                    action="{{ route('admin.units.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm btnDelete">Delete</button>
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