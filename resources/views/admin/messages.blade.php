@extends('layouts.admin')

@section('title', 'Categories')

@section('body')
    <div class="main-content">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Message Page</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Message Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Messages</h3>
                    </div>

                {{--                <div class="card">--}}
                {{--                    <div class="card-header">--}}
                {{--                        <h3 class="card-title">Category List</h3>--}}
                {{--                    </div>--}}

                <!-- /.card-header -->
                    <div class= "card-body">
                        @include('home.message')
{{--                        <a href="{{route('admin_category_add')}}" type="submit" class="btn btn-primary btn-style mt-4">Add Category</a>--}}
{{--                        <br>--}}
{{--                        <br>--}}

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Admin Note</th>

                                <th style="..." colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as  $rs)
                                <tr>
                                    <td>{{ $rs -> id }}</td>
                                    <td>{{$rs -> name}}</td>
                                    <td>{{ $rs -> email }}</td>
                                    <td>{{ $rs -> phone }}</td>
                                    <td>{{ $rs -> subject }}</td>
                                    <td>{{ $rs -> message }}</td>
                                    <td>{{ $rs -> note }}</td>
                                    <td><a href="{{route('admin_message_edit', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100, widht=1100 height=700')"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                    <td><a href="{{route('admin_message_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure? You want to delete this record')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </section>
    </div>
    </div>
@endsection


@section('footer')


    {{--    <script>--}}
    {{--        $(function () {--}}
    {{--            $("#example1").DataTable({--}}
    {{--                "responsive": true, "lengthChange": false, "autoWidth": false,--}}
    {{--                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]--}}
    {{--            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');--}}
    {{--            $('#example2').DataTable({--}}
    {{--                "paging": true,--}}
    {{--                "lengthChange": false,--}}
    {{--                "searching": false,--}}
    {{--                "ordering": true,--}}
    {{--                "info": true,--}}
    {{--                "autoWidth": false,--}}
    {{--                "responsive": true,--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
