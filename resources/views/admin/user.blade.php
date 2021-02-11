@extends('layouts.admin')

@section('title', 'Users')

@section('body')
 <div class="main-content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Admin User Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin User Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users</h3>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User List</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                         <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Roles</th>
                                <th style="..." colspan="2">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as  $rs)
                            <tr>
                                <td>{{ $rs -> id }}</td>
                                <td>
                                    @if($rs->profile_photo_path)
                                        <img src="{{ Storage::url($rs->profile_photo_path) }}" height="50" style="border-radius: 10px" alt="" />
                                    @endif
                                </td>
                                <td>{{ $rs -> name }}</td>
                                <td>{{ $rs -> email }}</td>
                                <td>{{ $rs -> phone }}</td>
                                <td>{{ $rs -> address }}</td>
                                <td>
                                    @foreach($rs->roles as $row)
                                        {{ $row->name }},
                                    @endforeach
                                <a href="{{route('admin_user_roles', ['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=10 left=300, width=800 height=600')">
                                    <i class="fa fa-plus-circle"></i>
                                </a>
                                </td>
                                <td><a href="{{route('admin_user_edit', ['id'=> $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                <td><a href="{{route('admin_user_delete', ['id'=> $rs->id])}}"onclick="return confirm('Are you sure? You want to delete this record')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                            </tr>
                            @endforeach
                         </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
    </div>
 </div>
@endsection


@section('footer')
@endsection

