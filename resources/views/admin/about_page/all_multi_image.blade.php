@extends('admin.admin_master')

@section('admin')

    @section('title') All Multi Image | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Multi Image</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">All Multi Image</h4>
                            <br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>About Multi Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php ($i = 1)
                                    @foreach ($allMultiImage as $multiImage)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td><img src="{{ asset($multiImage->multi_image) }}" style="width: 60px; height: 60px;"></td>
                                            <td>
                                                <a href="{{ route('edit.multi.image', $multiImage->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('delete.multi.image', $multiImage->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection