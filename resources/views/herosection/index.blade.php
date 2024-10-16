@extends('admin.main')
@section('title')
    Add Text
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Text Manager</h1>
                </div>
                {{-- <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('blog.view') }}">
                        <i class="bi-eye"></i> View Blog
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
                        <h4 class="card-header-title">Add Text On HeroSection</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Form -->
                            <div class="row">
                                {{-- <div class="col-md-6 mb-4">
                                    <label for="categoryNameLabel" class="form-label">Category <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Category Name"></i></label>

                                    <div class="tom-select-custom">
                                        <select class="js-select form-select" id="ownerNewProjectLabel" name="category_id"
                                            data-hs-tom-select-options='{
                                                          "searchInDropdown": false,
                                                          "hideSearch": true
                                                        }'
                                            required>
                                            @foreach ($data as $val)
                                                <option value="{{ $val->id }}"
                                                    data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">{{ $val->title }}</span></span>'>
                                                    {{ $val->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-md-6 mb-4">
                                    <label for="title" class="form-label">Title <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Title"></i></label>

                                    <input type="text" class="form-control" name="title" id="title" placeholder=""
                                        aria-label="" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="Subtitle" class="form-label">Sub Title<i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="SubTitle"></i></label>

                                    <input type="text" class="form-control" name="Subtitle" id="Subtitle" placeholder=""
                                        aria-label="" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="BgText" class="form-label">Background Text<i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="BgText"></i></label>

                                    <input type="text" class="form-control" name="BgText" id="BgText" placeholder=""
                                        aria-label="" value="" required>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="categoryNameLabel" class="form-label">Image Title <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image Title"></i></label>

                                    <input type="text" class="form-control" name="imagetitle" id="categoryNameLabel"
                                        placeholder="" aria-label="" value="">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="categoryNameLabel" class="form-label">Image Alt <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image Alt"></i></label>

                                    <input type="text" class="form-control" name="imagealt" id="categoryNameLabel"
                                        placeholder="" aria-label="" value="" required>
                                </div>
                            </div> --}}
                            <div class="mb-4 mb-lg-5">
                                <label for="categoryBannerLabel" class="form-label">Banner <i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Banner"></i></label>
                                <input type="file" name="bannerimg" id="heroImage" class="form-control" required>
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
