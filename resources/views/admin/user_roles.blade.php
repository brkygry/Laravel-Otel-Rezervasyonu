<html>
<head>
    <title>User Roles</title>

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
                            <h3>User Roles</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Roles</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            @include('home.message')
            <section class="content">
                <div class="card">
                        <!-- /.card-header -->
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">{{$data->title}}</h2>
                            </div>

                            <!-- forms 2 -->
                            <div class="card card_border py-2 mb-4">
                                <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>ID</th> <td>{{ $data->id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th> <td>{{ $data->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th> <td>{{ $data->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th> <td>{{ $data->phone }}</td>
                                            </tr>

                                            <tr>
                                                <th>Roles</th>


                                            <td>
                                            <table>
                                                @foreach($data->roles as  $row)
                                                    <tr>
                                                        <td>{{ $row -> name }}</td>
                                                        <td>
                                                            <a href="{{route('admin_user_role_delete', ['userid' => $data->id, 'roleid'=>$row->id])}}"onclick="return confirm('Are you sure? You want to delete this record')">
                                                                <img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            </td>
                                            </tr>

                                            <tr>
                                                <th>Add Role</th>
                                                <td>
                                                    <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                    <select name="roleid">,
                                                        @foreach($datalist as $rs)
                                                            <option value="{{ $rs->id }}">{{$rs->name}}</option>
                                                        @endforeach
                                                    </select>
                                                        <button type="submit" class="btn-primary">Add Role</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            </thead>
                                        </table>
                            </div>
                        </div>
                        <!-- //forms 2 -->
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>
</html>

