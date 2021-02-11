@extends('layouts.admin')

@section('title', 'User Edit Page')


@section('body')
    <div class="main-content">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Edit User</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit User</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit User</h3>
                    </div>
                        <!-- /.card-header -->
                    <div class="card-body">
                        <!-- forms 2 -->
                        <div class="card card_border py-2 mb-4">
                            @include('home.message')
                            <div class="card-body">
                                <form role="form" action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Name</label>
                                            <input type="text" name="name" value="{{$data->name}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Email</label>
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control input-style">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Phone</label>
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control input-style">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Address</label>
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control input-style">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">

                                        @if ($data->profile_photo_path)
                                            <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Update</button>
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
