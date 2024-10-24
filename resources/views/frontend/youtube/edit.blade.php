@extends('admin.main')
@section('title')
  Youtube Section
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Update Youtube List</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="{{route('youtube.index')}}">
                    <i class="bi-eye"></i> View youtube List
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
                        <h4 class="card-header-title">ADD youtube Links</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <form method="POST" id="youtubeform" action="{{ route('youtube.update',$youtube->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                        <label>Tittle</label>
                                        <input type="text" placeholder="Enter Tittle" name="tittle" class="form-control" value="{{$youtube->tittle}}">
                                        <input type="hidden" name="" class="form-control" value="{{$youtube->id}}">
                                        @error('tittle')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                        <label>Status</label>
                                        <input type="text" placeholder="Enter status " name="status" class="form-control" value="{{$youtube->status}}">
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                        <label>Link</label>
                                        <input type="text" placeholder="Enter Link " name="twitterUrl" class="form-control" value="{{$youtube->link}}">
                                        @error('link')
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
