<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style-starter.css">

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
<div class="main-content">
        <div class="content-wrapper">
{{--            <section class="content-header">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row mb-2">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <h3>Edit Category</h3>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <ol class="breadcrumb float-sm-right">--}}
{{--                                <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                                <li class="breadcrumb-item active">Edit Category</li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Message Detail</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- form -->
                        <form role="form" action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        <div class="card card_border py-2 mb-4">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>

                                    <tr>
                                        <th>ID</th> <td>{{$data -> id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th> <td>{{$data -> name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th> <td>{{ $data -> email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th> <td>{{ $data -> phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th> <td>{{ $data -> subject }}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th> <td>{{ $data -> message }}</td>
                                    </tr>
                                    <tr>
                                        <th>Admin Note</th> <td><textarea id="detail" name="detail"> {{$data->note}} </textarea></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <td>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Update Message</button>
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


