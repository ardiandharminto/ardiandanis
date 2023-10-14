@extends('admin.admin_master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @section('title') Update Multi Image | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Update Multi Image</h4>
                            <br><br>
                            <form action="{{ route('update.multi.image') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $multiImage->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">About Multi Image</label>
                                    <div class="col-sm-10">
                                        <input name="multi_image" class="form-control" type="file" id="multi_image">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ asset($multiImage->multi_image) }}" alt="Multi Image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Multi Image">
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
            $('#multi_image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                };
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection