@extends('admin.admin_master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @section('title') Add Blog Category | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Add Blog Category Page</h4>
                            <br>
                            <form 
                                action="{{ route('store.blog.category') }}" 
                                method="post"
                                id="myForm"
                            >
                                @csrf

                                <div class="row mb-3">
                                    <label for="blog_category" class="col-sm-2 col-form-label">Blog Category Name</label>
                                    <div class="form-group col-sm-10">
                                        <input 
                                            name="blog_category" 
                                            class="form-control" 
                                            type="text" 
                                            id="blog_category"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Insert Blog Category">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#myForm').validate({
                rules: {
                    blog_category: {
                        required: true
                    }
                },
                messages: {
                    blog_category: {
                        required: 'Please enter blog category'
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