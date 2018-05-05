@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/styles/login.css') }}">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 login__container">
            <div class="panel panel-default">
                <div class="panel-body text-align--center">
                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <img class="image-align--center" src="{{asset('assets/images/favicon180x180.png')}}" alt="Logo"  width="180" height="180">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="input-align--center">
                                <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="input-align--center">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-align--center">
                                <div class="checkbox">
                                    <label>
                                        <input class="components--padding" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    <a  href="{{ route('register') }}">Register</a>
                                </div>


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-align--center">
                                <button type="submit" class="btn btn--lg btn-primary">
                                    Login
                                </button>
                            </div>
                            <div class="input-align--center">
                                <a href="{{route('facebookCall')}}"  class="btn btn--lg btn-primary">
                                    Facebook Login
                                </a>
                            </div>
                        </div>
                        <div >
                            <a href="{{ route('password.request') }}">
                                Forgot Your Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
