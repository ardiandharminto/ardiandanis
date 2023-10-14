@extends('admin.admin_master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @section('title') Edit Blog Category | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Blog Category Page</h4>
                            <br><br>
                            <form action="{{ route('update.blog.category', $blogcategory->id) }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="blog_category" class="col-sm-2 col-form-label">Blog Category Name</label>
                                    <div class="col-sm-10">
                                        <input 
                                            name="blog_category" 
                                            class="form-control" 
                                            type="text" 
                                            id="blog_category"
                                            value="{{ $blogcategory->blog_category }}"
                                        >
                                        @error('blog_category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Upddate Blog Category">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>

@endsection