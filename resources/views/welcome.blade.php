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
        <div class="card-title">
            <div class="row form-group">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                    <h4 class="pull-left">Create New User</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <a href="{{route('index')}}" class="pull-right btn btn-success btn-block">List</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('layouts.alert')
            <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                        <label class="form-check-label">First Name</label><br><br>
                        <input required type="text" class="form-control" name="first_name">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                        <label class="form-check-label">Last Name</label><br><br>
                        <input required type="text" class="form-control" name="last_name">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                        <label class="form-check-label">Image</label> &nbsp;<img style="width: 43px; height: 43px;"
                                                                                 src="{{asset('/')}}/noimg.jpg"
                                                                                 id="blah">
                        <br>
                        <input required type="file" class="form-control" onchange="return ValidateFileUpload()"
                               name="image_file" id="image_file">
                    </div>
                </div>
                <div class="row form-group">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form>

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
<SCRIPT type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('image_file');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

            if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            }

//The file upload is NOT an image
            else {
                $('#image_file').val(null)
                $('#blah').attr('src', 'noimg.jpg');
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
</SCRIPT>
</body>

</html>
