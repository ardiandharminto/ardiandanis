@extends('admin.admin_master')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @section('title') Footer Setup | Admin Site @endsection

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Footer Setup</h4>
                            <br><br>
                            <form action="{{ route('update.footer') }}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{ $footer->id }}">

                                <div class="row mb-3">
                                    <label for="number" class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <input name="number" class="form-control" type="text" value="{{ $footer->number }}" id="number">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="short_description" class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea required="" class="form-control" name="short_description" id="short_description" rows="5">{{ $footer->short_description }}</textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" class="form-control" type="text" value="{{ $footer->address }}" id="address">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="city_address" class="col-sm-2 col-form-label">City Address</label>
                                    <div class="col-sm-10">
                                        <input name="city_address" class="form-control" type="text" value="{{ $footer->city_address }}" id="city_address">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="email" value="{{ $footer->email }}" id="email">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input name="facebook" class="form-control" type="text" value="{{ $footer->facebook }}" id="facebook">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input name="twitter" class="form-control" type="text" value="{{ $footer->twitter }}" id="twitter">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
                                    <div class="col-sm-10">
                                        <input name="linkedin" class="form-control" type="text" value="{{ $footer->linkedin }}" id="linkedin">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input name="instagram" class="form-control" type="text" value="{{ $footer->instagram }}" id="instagram">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="copyright" class="col-sm-2 col-form-label">Copyright</label>
                                    <div class="col-sm-10">
                                        <input name="copyright" class="form-control" type="text" value="{{ $footer->copyright }}" id="copyright">
                                    </div>
                                </div>
                                <!-- end row -->

                                <br>

                                <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Update Footer">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection