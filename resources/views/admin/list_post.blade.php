@extends('lyt-admin.topmenu')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Article</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-file-text-o"></i> Article</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <a href="{{ url('/article/create/')}}"><button class="btn btn-primary"><span><i class="fa fa-pencil"></i></span> Add New Data</button> </a>
            <span> <a href="{{ url('excel')}}" class="btn btn-success"><i class="fa fa-file-excel-o "></i> Excel Data</a></span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header">Title</th>
                    <th class="header">Posted</th>
                    <th class="header">Action</th>
                </tr>
                </thead>
                <tbody>
               		@foreach($article as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->posted }}</td>
                            <td>
                            <a href="/article/{{$item->id_article}}/edit" class="btn btn-xs btn-warning">Edit</a>
                            {!! Form::open(['route' => ['article.destroy', $item->id_article], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs','onclick'=>'return confirm(\'Are you sure?\')']) !!}{!! Form::close() !!}
                            </td>
                            
                        </tr>
                    
              		@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection