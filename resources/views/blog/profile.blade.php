@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Change Password</div>

                    <div class="panel-body">
                        <form id="resetpassword" class="form-horizontal" role="form" method="POST"
                              action="{{ route('admin.password.update') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{(Session::has('flash_message'))?"has-error":""}}">
                                <label for="password" class="col-md-4 control-label">Current Password</label>

                                <div class="col-md-6">
                                    <input id="current_password" type="password" class="form-control" name="current_password" required>

                                    @if (Session::has('flash_message'))
                                        <div class="help-block">
                                            {{ Session::get('flash_message') }}
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    @include('g_partials.jquery-validation')
    <script>
        $("#resetpassword").validate({
            onkeyup: function (element) {
                $(element).valid()
            },
            onfocusout: function (element) {
                $(element).valid();
            },
            rules: {
                email: {
                    required: true,
                    email: true
                },
                current_password: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 6,

                },
                password_confirmation: {
                    required: true,
                    equalTo: "#password"
                },

            },
            errorElement: 'div',
            errorClass: 'help-block',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass("has-error");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass("has-error");
            }
        });
    </script>

    @include('g_partials.sweetalert')
    @if(Session::has('success'))

        <script>
            swal({
                title: "Insight Workshop",
                text: "{{Session::get('success')['msg']}}",
                type: "success",
                confirmButtonText: "OK",
                closeOnConfirm: true
            }, function () {
                @if(Session::get('success')['redirect_to'])
                //window.location.href = "{{Session::get('success')['redirect_to']}}"
                $('#signOut').trigger('submit');
                @endif
            });
        </script>
    @endif
@stop