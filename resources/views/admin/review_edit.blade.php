<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style-starter.css">

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
<div class="main-content">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Edit Review</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Edit Review </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Review Detail</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- form -->
                        @include('home.message')
                        <form role="form" action="{{route('admin_review_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>

                                    <tr>
                                        <th>ID</th> <td>{{$data -> id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th> <td>{{$data -> user -> name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Hotel</th> <td>{{ $data -> hotel -> title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th> <td>{{ $data -> subject }}</td>
                                    </tr>
                                    <tr>
                                        <th>IP</th> <td>{{ $data -> IP }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created at</th> <td>{{ $data -> created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Durum</th>
                                        <td>
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <td>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Update Review</button>
                                                </div>
                                            </td>
                                        </td>
                                    </tr>

                                    </thead>
                                </table>
                            </div>
                        </div>
                        </form>
                        <!-- //form ends -->
                    </div>

                </div>
            </section>
        </div>
    </div>


