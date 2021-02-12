@extends('layouts.admin')

@section('title', 'Reservations')

@section('body')
 <div class="main-content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Admin Reservations Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin Reservations Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Reservations</h3>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Reservation List</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th style="..." colspan="3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as  $rs)
                            <tr>
                                <td>{{ $rs -> id }}</td>
                                <td>{{ $rs -> name }}</td>
                                <td>{{ $rs -> phone }}</td>
                                <td>{{ $rs -> email }}</td>
                                <td>{{ $rs -> total }}</td>
                                <td>{{ $rs -> created_at }}</td>
                                <td>{{ $rs -> status }}</td>
                                <td><a href="{{route('admin_reservation_show', ['id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100, widht=1000 height=800')"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
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

