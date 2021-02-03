@extends('layouts.admin')

@section('title', 'Categories')

@section('body')
 <div class="main-content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Category Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                </div>

{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">Category List</h3>--}}
{{--                    </div>--}}

                    <!-- /.card-header -->
                    <div class= "card-body">
                        <a href="{{route('admin_category_add')}}" type="submit" class="btn btn-primary btn-style mt-4">Add Category</a>
                        <br>
                        <br>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Parent_ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th style="..." colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as  $rs)
                            <tr>
                                <td>{{ $rs -> id }}</td>
                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                                <td>{{ $rs -> title }}</td>
                                <td>{{ $rs -> status }}</td>
                                <td><a href="{{route('admin_category_edit', ['id'=> $rs->id])}}" onclick)"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                <td><a href="{{route('admin_category_delete', ['id'=> $rs->id])}}" onclick="return confirm('Are you sure? You want to delete this record')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
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

