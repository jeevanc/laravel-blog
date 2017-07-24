@extends('blog.layouts.account')
@section('title')
    Welcome
@stop
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"> <h1>CMS Login</h1></a>
        </div>
        @if($errors->has('auth'))
        <div class="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i> {{ $errors->first('auth') }}
        </div>
        @endif
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{route('login')}}" method="post" id="loginForm">
                {{csrf_field()}}
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <span class="help-block">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group has-feedback  {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <span class="help-block">{{ $errors->first('password') }}</span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>

            <a href="#">I forgot my password</a><br>

        </div>
    </div>
@stop
@section('scripts')
    @include('g_partials.jquery-validation')
    <script>
        $('#loginForm').validate({
            onkeyup: function (element) {
                $(element).valid()
            },
            onfocusout: function (element) {
                $(element).valid();
            },
            errorElement: 'div',
            errorClass: 'help-block',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass("has-error");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass("has-error");
            }
        })
    </script>
@stop

