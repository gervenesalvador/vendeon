@extends('layouts.auth')

@section('content')

<form action="{{ route('admin_login') }}" method="POST" id="form-login" class="form-horizontal">
    @csrf
    <input type="hidden" name="type" value="admin">
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="text" id="email" name="email" class="form-control input-lg" placeholder="Email" {{ old('email') }} required autofocus>
            </div>
            @if ($errors->has('email'))
                <div id="login-email-error" class="help-block animation-slideDown">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password" required autofocus>
            </div>
            @if ($errors->has('password'))
                <div id="login-password-error" class="help-block animation-slideDown">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-4">
            <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span></span>
            </label>
        </div>
        <div class="col-xs-8 text-right">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i>Login</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 text-center">
            <a href="/register"><small>Create a new account</small></a>
        </div>
    </div>
</form>
@endsection