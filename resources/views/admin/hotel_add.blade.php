@extends('layouts.admin')

@section('title', 'Hotel Add Page')

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
                            <h3>Add Hotel</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Hotel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Hotel</h3>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body">
                        <!-- forms 2 -->
                        <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <form action="{{route('admin_hotel_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="input__label">Parent</label>
                                            <select id="inputState" name="category_id" class="form-control input-style">
                                                @foreach($datalist as  $rs)
                                                <option value="{{ $rs -> id }}">{{ $rs -> title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Title</label>
                                            <input type="text" name="title" class="form-control input-style">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Keywords</label>
                                            <input type="text" name="keywords" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Description</label>
                                            <input type="text" name="description" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Price</label>
                                            <input type="number" value="0" name="price" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">City</label>
                                            <input type="text" name="city" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Country</label>
                                            <input type="text" name="country" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Location</label>
                                            <input type="text" name="location" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Star</label>
                                            <input type="number" value="0" name="star" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Address</label>
                                            <input type="text" name="address" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Phone</label>
                                            <input type="text" name="phone" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Fax</label>
                                            <input type="text" name="fax" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Email</label>
                                            <input type="text" value="@luxehotels.com" name="email" class="form-control input-style">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Slug</label>
                                            <input type="text" name="slug" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState" class="input__label">Status</label>
                                            <select id="inputState" name="status" class="form-control input-style">
                                                <option selected>False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea id="summernote" name="detail"></textarea>
                                        <script>
                                            $('#summernote').summernote({
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

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
{{--                                    <div class="custom-file">--}}
{{--                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>--}}
{{--                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>--}}
{{--                                        <div class="invalid-feedback">Example invalid custom file feedback</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check check-remember check-me-out">--}}
{{--                                        <input class="form-check-input checkbox" type="checkbox" id="gridCheck">--}}
{{--                                        <label class="form-check-label checkmark" for="gridCheck">--}}
{{--                                            Check me out--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Add Hotel</button>
                                </form>
                            </div>
                        </div>
                        <!-- //forms 2 -->
                    </div>

                    <div class="card-footer">
                        Footer
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
