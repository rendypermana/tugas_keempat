@extends('lyt-admin.topmenu')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1>Excel Data</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i></a> </li>
            <li class="active"><a href="{{ url('excel')}}}"><i class="fa-file-excel-o"></i> Excel Data</a></li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">        
                @if ($message = Session::get('success'))

                    <div class="alert alert-success" role="alert">

                        {{ Session::get('success') }}

                    </div>

                @endif


                @if ($message = Session::get('error'))

                    <div class="alert alert-danger" role="alert">

                        {{ Session::get('error') }}

                    </div>

                @endif

        <div class="panel panel-default">
            <div class="panel-heading">Import File</div>
            <div class="panel-body">
                <form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                     
                    <input type="file" class="form-control-file" name="import_file" >
                    <br>
                    {!! csrf_field() !!} 
                    <button class="btn btn-primary"><span><i class="fa fa-arrow-up "></i></span> Import CSV or Excel </button>
                    
                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Download File Format</div>
            <div class="panel-body">
                <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success btn-lg"><span><i class="fa fa-arrow-down "></i></span> Download Excel .xls</button></a>

                <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success btn-lg"><span><i class="fa fa-arrow-down "></i></span> Download Excel .xlsx</button></a>

                <a href="{{ url('downloadExcel/csv') }}"><button class="btn btn-success btn-lg"><span><i class="fa fa-arrow-down "></i></span> Download .CSV</button></a>
            </div>
        </div>
        

    </div>
</div>

@endsection