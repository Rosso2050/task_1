<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('system')}}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('system')}}/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('system')}}/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('system')}}/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{asset('system')}}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<br>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row form-group">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                    <h4 class="pull-left">Users List</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <a href="{{url('/')}}" class="pull-right btn btn-success btn-block">Add New User</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('layouts.alert')
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Image</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach($items as $i=>$item)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$item->first_name}}</td>
                            <td>{{$item->last_name}}</td>
                            <td><img src="{{asset('users/'.$item->image)}}" style="width: 75px;height: 75px"></td>
                            <td><a onclick="return confirm('Confirm Delete ...')" href="{{route('delete',$item->id)}}" class="btn btn-danger">Delete</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('system')}}/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('system')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('system')}}/bower_components/metisMenu/dist/metisMenu.min.js"></script>


<!-- Custom Theme JavaScript -->
<script src="{{asset('system')}}/dist/js/sb-admin-2.js"></script>

</body>

</html>
