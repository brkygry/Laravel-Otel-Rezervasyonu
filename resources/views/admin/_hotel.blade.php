@extends('layouts.admin')

@section('title', 'Hotels')

@section('body')
 <div class="main-content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Blank Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hotels</h3>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Hotel List</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{route('admin_hotel_add')}}" type="submit" class="btn btn-primary btn-style mt-4">Add Hotel</a>
                        <br>
                        <br>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th style="..." colspan="3">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as  $rs)
                            <tr>
                                <td>{{ $rs -> id }}</td>
                                <td>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}
                                </td>
                                <td>{{ $rs -> title }}</td>
                                <td>{{ $rs -> price }}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="40" alt="">
                                    @endif
                                </td>
                                <td>{{ $rs -> phone }}</td>
                                <td>{{ $rs -> fax }}</td>
                                <td>{{ $rs -> email }}</td>
                                <td>{{ $rs -> status }}</td>
                                <td><a href="{{route('admin_hotel_edit', ['id'=> $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                <td><a href="{{route('admin_image_add', ['hotel_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100, widht=1100 height=700')">
                                        <img src="{{asset('assets/admin/images')}}/image-gallery.png" height="25"></a>
                                </td>
                                <td><a href="{{route('admin_hotel_delete', ['id'=> $rs->id])}}"onclick="return confirm('Are you sure? You want to delete this record')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                            </tr>
                            @endforeach
                         </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <div class="card-body">




                </div>

                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
 </div>
@endsection


@section('footer')
    <script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


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

