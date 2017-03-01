@extends('lyt-admin.lyt-login')
@section('content')
<body class="bekgron">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="logo-admin"><h1>Article</h1></div>
                <div class="login-panel panel panel-default">
                        <h3 class="panel-head">Login Admin</h3>

                    <div class="panel-body">
                        <form action="{{ URL::to('login') }}}" method="post">
                            <div class="alert-danger"></div>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="email" name="email" type="email" autofocus>
                                        <div class="text-danger">{!! $errors->first('email') !!}</div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        <div class="text-danger">{!! $errors->first('password') !!}</div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="kiri-mentok"> Remember me
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                {!! csrf_field() !!}
                                <input type="submit" class="btn btn-lg btn-dewim btn-block" value="Login">
                            </fieldset>
                        </form>
                        <p class="kiri">Don't have account? please <a href="{{ url('signup') }}"> SignUp</a></p>
                        <br> <a href="redirect/facebook">Login in with Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection