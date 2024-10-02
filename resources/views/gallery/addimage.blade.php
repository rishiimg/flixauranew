@extends('admin.main')
@section('title')
    Add image
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">image Manager</h1>
                </div>
                {{-- <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('') }}">
                        <i class="bi-eye"></i> View Image
                    </a>
                </div> --}}
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row">
            <div class="col-lg-12 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Add image</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Form -->
                        
                            <div class="mb-4 mb-lg-5">
                                <label for="categoryImageLabel" class="form-label">Image <i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Image"></i></label>
                                <input type="file" name="image[]" id="customFileEg1" class="form-control" multiple required>
                            </div>
                          
                            <!-- End Form -->
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div> 
                    </form>
                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Stats -->
    </div>
@endsection
