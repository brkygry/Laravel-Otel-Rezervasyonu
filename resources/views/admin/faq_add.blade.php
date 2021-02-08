@extends('layouts.admin')

@section('title', 'Faq Add Page')

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
                            <h3>Add Question</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Question</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Question</h3>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body">
                        <!-- forms 2 -->
                        <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="input__label">Position</label>
                                            <input type="number" name="position" value="0" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState" class="input__label">Status</label>
                                            <select id="inputState" name="status" class="form-control input-style">
                                                <option selected>False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4" class="input__label">Question</label>
                                            <input type="text" name="question" class="form-control input-style">
                                        </div>
                                    </div>



                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea id="summernote" name="answer"></textarea>
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
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Add Question</button>
                                </form>
                            </div>
                        </div>
                        <!-- //forms 2 -->
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
