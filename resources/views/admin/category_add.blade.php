@extends('layouts.admin')

@section('title', 'Blank Page')

@section('body')
    <div class="main-content">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Add Category</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body">
                        <!-- forms 2 -->
                        <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <form action="{{route('admin_category_create')}}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="input__label">Parent</label>
                                            <select id="inputState" name="parent_id" class="form-control input-style">
                                                <option value="0" selected>Main Category</option>
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
                                    <div class="form-group">
                                        <label for="inputPassword4" class="input__label">Keywords</label>
                                        <input type="text" name="keywords" class="form-control input-style">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="input__label">Description</label>
                                        <input type="text" name="description" class="form-control input-style">
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
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Add Category</button>
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
