@extends('admin.main')
@section('title')
    Photographer Portfolio
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Update Images</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="{{route('social.index')}}">
                    <i class="bi-eye"></i> View Image List
                    </a>
                </div>
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
                        <h4 class="card-header-title">ADD Image</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <form method="POST" id="socialform" action="{{ route('image.update',$images->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                  <div class="mb-4 mb-lg-5">
                                    <label for="categoryImageLabel" class="form-label">Image <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image"></i></label>
                                    <input type="file" name="image[]" id="customFileEg1" class="form-control" multiple>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
