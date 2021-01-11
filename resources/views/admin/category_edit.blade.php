@extends('layouts.admin')

@section('title', 'Edit Page')

@section('body')
    <div class="main-content">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Edit Category</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body">
                        <!-- forms 2 -->
                        <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <form action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="input__label">Parent</label>
                                            <select id="inputState" name="parent_id" class="form-control input-style">
                                                <option value="{{$data->parent_id}}" selected>{{$data->title}}</option>
                                                <option value="0">Main Category</option>
                                                @foreach($datalist as  $rs)
                                                    <option value="{{ $rs -> id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif > {{ $rs -> title }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control input-style">
                                        </div>
                                    </div>

                                   <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control input-style">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control input-style">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Slug</label>
                                            <input type="text" name="slug" value="{{$data->slug}}" class="form-control input-style">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Status</label>
                                            <select id="inputState" name="status" class="form-control input-style">
                                                <option selectedvalue="{{$data->status}}"> </option>
                                                <option>True</option>
                                                <option>False</option>
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
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Edit Category</button>
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
