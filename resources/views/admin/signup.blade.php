@extends('lyt-admin.lyt-login')
@section('content')
<body class="bekgron">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-3">
                <div class="login-panel panel panel-default">
                      <h3 class="panel-head">Sign Up</h3>

                    <div class="panel-body">
                    	<form role="form" action="{{ URL::to('sign') }}" method="post">
                            <div class="alert-danger"></div>
                            <form>
                            <fieldset>
                                <div class="form-group">
                               		<label>Name</label>
                               		<input type="text" name="name" value="" placeholder="name" class="form-control">
                                   	<div class="text-danger">{!! $errors->first('name') !!}</div>
                                </div>
                                <div class="form-group">
                                	<label>Email</label>
                                	<input type="email" name="email" value="" placeholder="email" class="form-control">
                                	<div class="text-danger">{!! $errors->first('email') !!}</div>
                                </div>
                                <div class="form-group">
                                	<label>Password</label>
                                	<input type="password" name="password" value="" placeholder="password" class="form-control">
                                	<div class="text-danger">{!! $errors->first('password') !!}</div>
                                </div>
                                <div class="form-group">
                                	<label>Password Confirm</label>
                                	<input type="password" name="password_confirmation" value="" placeholder="password confirm" class="form-control">
                                </div>
                                {!! csrf_field() !!}
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-dewim btn-block" value="Signup">
                                
                            </fieldset>
                        <p class="kiri">Have account? Please <a href="{{ url('admin') }}"> SignIn</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection