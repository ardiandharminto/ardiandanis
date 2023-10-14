@extends('admin.admin_master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @section('title') Edit Home Slide | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Home Slide</h4>
                            <br>
                            <form 
                                action="{{ route('update.slider') }}" 
                                method="post" 
                                enctype="multipart/form-data"
                                id="myForm"
                            >
                                @csrf

                                <input type="hidden" name="id" value="{{ $homeslide->id ?? '' }}">

                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="form-group col-sm-10">
                                        <input 
                                            name="title" 
                                            class="form-control" 
                                            type="text" 
                                            value="{{ $homeslide->title ?? '' }}" 
                                            id="title"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        <input 
                                            name="short_title" 
                                            class="form-control" 
                                            type="text" 
                                            value="{{ $homeslide->short_title ?? '' }}"
                                            id="short_title"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                                    <div class="col-sm-10">
                                        <input 
                                            name="video_url" 
                                            class="form-control" 
                                            type="text" 
                                            value="{{ $homeslide->video_url ?? '' }}" 
                                            id="video_url"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image</label>
                                    <div class="col-sm-10">
                                        <input 
                                            name="home_slide" 
                                            class="form-control" 
                                            type="file" 
                                            id="home_slide"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img 
                                            id="showImage" 
                                            class="rounded avatar-lg" 
                                            src="{{ !empty($homeslide->home_slide) 
                                                ? url($homeslide->home_slide) 
                                                : url('upload/no_image.jpg') }}" 
                                            alt="Image Preview">
                                    </div>
                                </div>
                                <!-- end row -->

                                <br>
                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Slide">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#home_slide').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                };
                reader.readAsDataURL(e.target.files['0']);
            });

            $('#myForm').validate({
                rules: {
                    title: {
                        required: true
                    }
                },
                messages: {
                    title: {
                        required: 'Please enter home slide title'
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection