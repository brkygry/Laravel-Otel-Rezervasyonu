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
                            <h3>Add Image</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Image</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

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
                                <form role="form" action="{{route('admin_image_store',['hotel_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4" class="input__label">Title</label>
                                            <input type="text" name="title" class="form-control input-style">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
{{--                                    <div class="custom-file">--}}
{{--                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>--}}
{{--                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>--}}
{{--                                        <div class="invalid-feedback">Example invalid custom file feedback</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check check-remember check-me-out">--}}
{{--                                        <input class="form-check-input checkbox" type="checkbox" id="gridCheck">--}}
{{--                                        <label class="form-check-label checkmark" for="gridCheck">--}}
{{--                                            Check me out--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Add Image</button>
                                </form>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as  $rs)
                                        <tr>
                                            <td>{{ $rs -> id }}</td>
                                            <td>{{ $rs -> title }}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin_image_delete', ['id'=> $rs->id, 'hotel_id'=>$data->id])}}"onclick="return confirm('Are you sure? You want to delete this record')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
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

