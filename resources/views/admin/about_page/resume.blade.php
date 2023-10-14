@extends('admin.admin_master')

@section('admin')
    @section('title') My Resume | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">My Resume</h4>
                            <br>
                            <form action="{{ route('resume.update') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $resume->id }}">

                                <div class="row mb-3">
                                    <label for="my_resume" class="col-sm-2 col-form-label">My Resume</label>
                                    <div class="col-sm-10">
                                        <input name="my_resume" class="form-control" type="file" id="my_resume">
                                    </div>
                                </div>
                                <!-- end row -->
                                <br>
                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update My Resume">
                            </form>
                        </div>

                        <div class="card-body">
                            <div>
                                <table class="table table-bordered mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>File Name</th>
                                            <th>Date Uploaded</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="{{ $resume->resume_url }}">
                                                    {{ Str::remove('upload/resume/', $resume->resume_url) }}
                                                </a>
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($resume->updated_at)->diffForHumans() }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection