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
                    <h1 class="page-header-title">Social Manager</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="">
                    <i class="bi-eye"></i> View Social Manager
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
                        <h4 class="card-header-title">ADD Socials</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <form method="POST" id="socialform" action="{{ route('social.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                        <label>Instagram</label>
                                        <input type="text" placeholder="Enter Instagram url" name="instaUrl"
                                            class="form-control">
                                        @error('instaUrl')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                        <label>Facebook</label>
                                        <input type="text" placeholder="Enter Facebook url " name="facebookUrl"
                                            class="form-control">
                                        @error('facebookUrl')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                        <label>Twitter</label>
                                        <input type="text" placeholder="Enter Twitter url " name="twitterUrl"
                                            class="form-control">
                                        @error('twitterUrl')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                        <label>Email </label>
                                        <input type="text" placeholder="Enter email url " name="emailUrl"
                                            class="form-control">
                                        @error('emailUrl')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
