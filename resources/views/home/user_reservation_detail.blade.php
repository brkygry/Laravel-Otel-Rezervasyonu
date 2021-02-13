<html>
<head>
    <title>My Bookings</title>

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
        <section class="content">
            <div class="card">
                <!-- forms 2 -->
                <div class="card card_border py-2 mb-4">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Room ID</th>
                                <th>Image</th>
                                <th>Total Price</th>
                                <th>Person</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as  $rs)
                                <tr>
                                    <td>{{ $rs -> id }}</td>
                                    <td>@if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="40" alt="">
                                        @endif
                                    </td>
                                    <td>${{ $rs -> price }}</td>
                                    <td>{{ $rs -> amount }}</td>
                                    <td>{{ $rs -> status }}</td>
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

