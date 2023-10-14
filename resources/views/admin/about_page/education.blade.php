@extends('admin.admin_master')

@section('admin')
    @section('title') Education | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Education</h4>
                            <br>
                            <form action="{{ route('resume.update') }}" method="post">
                                @csrf

                                {{-- <input type="hidden" name="id" value="{{ $education->id }}"> --}}

                                <div class="row mb-3">
                                    <label for="uni_name" class="col-sm-2 col-form-label">University Name</label>
                                    <div class="form-group col-sm-10">
                                        <input 
                                            name="uni_name" 
                                            class="form-control" 
                                            type="text" 
                                            id="uni_name"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="uni_year_start" class="col-sm-2 col-form-label">Year Start</label>
                                    <div class="form-group col-sm-10">
                                        <input 
                                            name="uni_year_start" 
                                            class="form-control" 
                                            type="number" 
                                            id="uni_year_start"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="uni_year_end" class="col-sm-2 col-form-label">Year End</label>
                                    <div class="form-group col-sm-10">
                                        <input 
                                            name="uni_year_end" 
                                            class="form-control" 
                                            type="number" 
                                            id="uni_year_end"
                                        >
                                    </div>
                                </div>
                                <!-- end row -->
                                
                                <br>
                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Education">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection