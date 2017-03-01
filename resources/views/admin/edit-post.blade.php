@extends('lyt-admin.topmenu')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1>Edit Article</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i></a> </li>
            <li class="active"><a href="{{ url('post') }}"><i class="fa fa-file-text-o"></i> Edit Article</a></li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">        
   
        {!! Form::model($article, array('route' => array('article.update', $article->id_article),'method' => 'put','files' => true)) !!}
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Title</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" value="{!! $article->title !!}" name="title" class="form-control">
                    </td>
                </tr>
                
                 <tr>
                    <td style="width: 200px;"><label>Contetnt</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                     <textarea class="form-control" name="content" value="{!! $article->content !!}">
                     </textarea>
                     {!! csrf_field() !!} 
                     <input type="hidden" value="{!! $article->posted !!}" name="posted">  
                    </td>
                </tr>
               
                
                 
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('post')}}" class="btn btn-xs btn-warning">Show All Article</a>
                        </td>
                </tr>
                </tbody>

            </table>
        {!! Form::close() !!}

    </div>
</div>

@endsection