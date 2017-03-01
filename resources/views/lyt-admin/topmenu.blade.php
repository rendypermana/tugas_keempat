<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Article | Task IV</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>

    <!-- Custom CSS -->
    <link href="/assets/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/assets/css/sb-admin.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tinymce -->
    <script src="/assets/tinymce/tinymce.min.js"></script>

    <!-- Datetimepicker -->
    <link href="/assets/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-datetimepicker-standalone.css" rel="stylesheet">
    <script src="/assets/js/bootstrap-datetimepicker.min.js"></script>


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-merah navbar-fixed-top" role="navigation" id="atas" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="tombol-menu"><span class="fa fa-fw fa-bars"></span></i>
                    
                </button>
            <a class="navbar-brand" href="admin">Admin Article | Task IV</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                
                <a href="admin" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                       
                        <a href="/" target="_blank"><i class="fa fa-fw fa-desktop" ></i> To Web</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="{{ url('admin') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li> 
                <li class="active">
                    <a href="{{ url('post') }}"><i class="fa fa-fw fa-file-text-o "></i> Article</a>
                </li>
                <li class="active">
                   <a href="{{ url('/comment') }}"><i class="fa fa-fw fa-comments "></i> Comment</a>
                </li>
                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">



<!--HERE-->
    @yield('content')


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Data Tables JavaScript -->
<script src="/assets/js/jquery.dataTables.min.js"></script>

<!-- TinyMCE JavaScript -->
<script src="/assets/tinymce/tinymce.min.js"></script>



<script type="text/javascript">
    tinymce.init({
        selector: ".editor"
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $(".data-table").DataTable({

            "language": {
                "emptyTable": "Tidak ada data"
            }
        });
    });

</script>

<script>
 tinymce.init({
    selector: "textarea",
    height: 250,
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
  </script> 

<script>
    $(function () {
        $('#datetimepicker10').datetimepicker({
            viewMode: 'years',
            format: 'MM/YYYY'
        });
    });
</script>


</body>

</html>