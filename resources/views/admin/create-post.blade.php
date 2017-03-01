@extends('lyt-admin.topmenu')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1>Add Article</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i></a> </li>
            <li class="active"><a href="{{ url('post') }}"><i class="fa fa-file-text-o"></i> Add Article</a></li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">        
   
        <form method="post" action="/article">
            <table class="table-responsive table">

                <tbody>
                <tr>
                    <td style="width: 200px;"><label>Title</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" value="" name="title" class="form-control">
                    </td>
                </tr>
                
                 <tr>
                    <td style="width: 200px;"><label>Contetnt</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                     <textarea class="form-control" name="content" value="">
                     
                     </textarea>
                     {!! csrf_field() !!} 
                     <input type="hidden" value="<?php echo date('d-m-Y');?>" name="posted">  
                    </td>
                </tr>
               
                
                 
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-warning">Show All Article</button>
                        </td>
                </tr>
                </tbody>

            </table>
        <form>

    </div>
</div>

@endsection