<html>
<head>
    <title>Image Gallery</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style-starter.css">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body>


    <div class="main-content">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Reservation Detail</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Reservation Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            @include('home.message')
            <section class="content">
                <div class="card">
                        <!-- /.card-header -->
                            <div class="card-header">
                                <h2 class="card-title">{{$data->title}}</h2>
                            </div>

                        <!-- forms 2 -->
                        <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <form role="form" action="{{route('admin_reservation_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th> <td>{{ $data->user->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th> <td>{{ $data->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hotel ID</th> <td>{{ $data->hotel_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Room ID</th> <td>{{ $data->room_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th> <td>{{ $data->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th> <td>{{ $data->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>IP</th> <td>{{ $data->IP }}</td>
                                    </tr>
                                    <tr>
                                        <th>Check-in</th> <td>{{ $data->check_in }}</td>
                                    </tr>
                                    <tr>
                                        <th>Check-out</th> <td>{{ $data->check_out}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th> <td>{{ $data->total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <select name="status">
                                                <option selected>{{ $data->status}}</option>
                                                <option>Accepted</option>
                                                <option>Canceled</option>
                                                <option>Completed</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Admin Note : </th>
                                        <td>
                                            <textarea name="note" rows="3" cols="30"> {{$data->note}} </textarea>
                                        </td>
                                    </tr>
                                    </thead>
                                    </table>
                                    <td>
                                        <button type="submit" class="btn-primary">Update Reservation</button>
                                    </td>
                                </form>
                                    @include('home.message')
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th style="..." colspan="1">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as  $rs)
                                            <tr>
                                                <td>{{ $rs -> id }}</td>
                                                <td>{{ $rs -> title }}</td>
                                                <td>${{ $rs -> price }}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" height="40" alt="">
                                                    @endif
                                                </td>
                                                <form role="form" action="{{route('admin_reservation_detail_update',['id'=>$rs->id])}}" method="post">
                                                    @csrf
                                                    <td>
                                                        <select name="status">
                                                            <option selected>{{ $rs->status}}</option>
                                                            <option>Accepted</option>
                                                            <option>Canceled</option>
                                                            <option>Completed</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="submit" value="Update"></td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    </table>


                            </div>
                        </div>
                        <!-- //forms 2 -->
                </div>
            </section>
        </div>
    </div>

</body>
</html>

