@extends('lyt-admin.topmenu')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Comment</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> </a></li>
            <li class="active"><i class="fa fa-comments"></i> Comment</li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header">Comment</th>
                    <th class="header" style="width:200px;">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($comment as $item)
                        <tr>
                            <td>{{ $item->comment }}</td>
                            <td>
                             {!! Form::open(['route' => ['comment.destroy', $item->id_comment], 'method' => 'DELETE']) !!}
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