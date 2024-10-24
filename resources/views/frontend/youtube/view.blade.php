@extends('admin.main')
@section('title')
    Contact Us
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="d-flex justify-content-between">
                <div>
                    <h1 class="page-header-title">Youtube links Sections</h1>
                </div>
                <div>
                    <a href="{{ route('youtube.create') }}" class="btn btn-primary">Add</a>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-md-between">
                <div class="mb-2 mb-md-0">
                    <h4 class="card-header-title">View youtube Links</h4>
                </div>
                <div class="mb-2 mb-md-0">
                    <form>
                        <!-- Search -->
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input id="datatableSearch" type="search" class="form-control" placeholder="Search"
                                aria-label="Search">
                        </div>
                        <!-- End Search -->
                    </form>
                </div>


            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom position-relative">
                <table id="datatable"
                    class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                    <thead class="thead-light">
                        <tr>
                            <th class="ps-5">Tittle</th>
                            <th>Status</th>
                            <th>Links</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($youtubes as $youtube)
                            <tr>
                                <td class="ps-5">{{ $youtube->tittle }}</td>
                                <td>{{ $youtube->status }}</td>
                                <td>{{ $youtube->link }}</td>
                                <td class="text-center">
                                    <a href="{{ route('youtube.edit', $youtube->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('youtube.delete', $youtube->id) }}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
