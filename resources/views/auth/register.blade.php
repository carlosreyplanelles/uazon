@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/styles/register.css') }}">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 register__container">
            <div class="panel panel-default">


                <div class="panel-body text-align--center">
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <img class="image-align--center" src="{{asset('assets/images/favicon180x180.png')}}" alt="Logo"  width="180" height="180">
                        <div class="panel-heading register__subtitle">Register</div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input-align--center">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-align--center input-align--padding">
                                <button type="submit" class="btn btn-primary btn--lg">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
