@extends('lyt-admin.topmenu')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Statistik Website</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Info User</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        
                        <table class="table">
                            <tbody>
                            <tr>
                            
                                <th>Nama Lengkap</th>
                                <th>:</th>
                                <td>Rendy Permana</td>
                           
                            </tr>




                            <tr>

                                <th>{</th>
                                <th>:</th>
                                <td></td>
                              
                            </tr>
                            
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-6">


                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Last Login</th>
                                <th>:</th>
                                <td><?php echo date('d-m-Y'); ?></td>
                            </tr>
                            <tr>
                                <th>IP Address</th>
                                <th>:</th>
                                <td><?php echo $_SERVER["REMOTE_ADDR"]; ?></td>
                            </tr>
                            <tr>
                                <th>Server</th>
                                <th>:</th>
                                <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
                            </tr>
                            <tr>
                                <th>Browser</th>
                                <th>:</th>
                                <td><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection