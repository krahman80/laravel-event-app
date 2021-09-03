@extends('layouts.nonav')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="flash-message">
                @if(!empty($successMsg))
                    <div class="alert alert-warning"> {{ $successMsg }}</div>
                @endif
              </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card login-form">
                <div class="card-body">
                    <h3 class="card-title text-center">Log in to {{ config('app.name', 'Laravel') }}</h3>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-sm{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div><button type="submit" class="btn btn-sm btn-primary w-200">
                                {{ __('Login') }}
                            </button></div>
                            <div><a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a></div>
                            <div>{{
                                link_to_route('home', '{ back home }', [], ['class'=>'btn btn-link'])
                            }}</div>
                        </div>               
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
