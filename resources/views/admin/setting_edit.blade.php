@extends('layouts.admin')

@section('title', 'Setting Edit Page')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection


@section('body')
    <div class="main-content">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Edit Setting</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Setting</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>



                <!-- Main Content -->
                <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                <section class="content">
                @csrf
                <!-- ./row -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card card-primary card-tabs">
                            <div class="card-header">
                                <nav class="navbar navbar-expand-sm bg-light">
                                <ul class="nav navbar-expand nav-pills" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-aboutus-tab" data-toggle="pill" href="#custom-tabs-one-aboutus" role="tab" aria-controls="custom-tabs-one-aboutus" aria-selected="false">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-status-tab" data-toggle="pill" href="#custom-tabs-one-status" role="tab" aria-controls="custom-tabs-one-status" aria-selected="false">Status</a>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                        </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                    <div class="form-row">
                                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control input-style">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Title</label>
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Keywords</label>
                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Description</label>
                                            <input type="text" name="description" value="{{$data->description}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Company</label>
                                            <input type="text" name="company" value="{{$data->company}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Address</label>
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Phone</label>
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Fax</label>
                                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Email</label>
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control input-style">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp-tab">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">smtpserver</label>
                                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">smtpemail</label>
                                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">smtppassword</label>
                                            <input type="password" name="ssmtppassword" value="{{$data->ssmtppassword}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">smtpport</label>
                                            <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control input-style">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social-tab">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Facebook</label>
                                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Instagram</label>
                                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Twitter</label>
                                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control input-style">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-aboutus" role="tabpanel" aria-labelledby="custom-tabs-one-aboutus-tab">
                                        <div class="form-group">
                                            <label>About Us</label>
                                            <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                            <script>
                                                $('#aboutus').summernote({
                                                    tabsize: 2,
                                                    height: 120,
                                                    toolbar: [
                                                        ['style', ['style']],
                                                        ['font', ['bold', 'underline', 'clear']],
                                                        ['color', ['color']],
                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                        ['table', ['table']],
                                                        ['insert', ['link', 'picture', 'video']],
                                                        ['view', ['fullscreen', 'codeview', 'help']]
                                                    ]
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                            <script>
                                                $('#contact').summernote({
                                                    tabsize: 2,
                                                    height: 120,
                                                    toolbar: [
                                                        ['style', ['style']],
                                                        ['font', ['bold', 'underline', 'clear']],
                                                        ['color', ['color']],
                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                        ['table', ['table']],
                                                        ['insert', ['link', 'picture', 'video']],
                                                        ['view', ['fullscreen', 'codeview', 'help']]
                                                    ]
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                        <div class="form-group">
                                            <label>References</label>
                                            <textarea id="references" name="references">{{$data->references}}</textarea>
                                            <script>
                                                $('#references').summernote({
                                                    tabsize: 2,
                                                    height: 120,
                                                    toolbar: [
                                                        ['style', ['style']],
                                                        ['font', ['bold', 'underline', 'clear']],
                                                        ['color', ['color']],
                                                        ['para', ['ul', 'ol', 'paragraph']],
                                                        ['table', ['table']],
                                                        ['insert', ['link', 'picture', 'video']],
                                                        ['view', ['fullscreen', 'codeview', 'help']]
                                                    ]
                                                });
                                            </script>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-status" role="tabpanel" aria-labelledby="custom-tabs-one-status-tab">
                                        <div class="form-group col-md-4">
                                            <label>Status</label>
                                            <select id="inputState" name="status" class="form-control input-style">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Settings</button>
                    </div>
                    </div>
                </div>
                </section>
                </form>
        </div>
    </div>
@endsection


{{--<li class="nav-item">--}}
{{--    <a class="nav-link" id="custom-tabs-one-status-tab" data-toggle="pill" href="#custom-tabs-one-status" role="tab" aria-controls="custom-tabs-one-status" aria-selected="false">Status</a>--}}
{{--</li>--}}


{{--<div class="tab-pane fade" id="custom-tabs-one-status" role="tabpanel" aria-labelledby="custom-tabs-one-status-tab">--}}
{{--    <div class="form-group col-md-4">--}}
{{--        <label>Status</label>--}}
{{--        <select id="inputState" name="status" class="form-control input-style">--}}
{{--            <option selected="selected">{{$data->status}}</option>--}}
{{--            <option>True</option>--}}
{{--            <option>False</option>--}}
{{--        </select>--}}
{{--    </div>--}}
{{--</div>--}}
