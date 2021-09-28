@extends('layouts.auth')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        {{-- <div class="col"></div> --}}
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h3 class="card-title text-center">{{ __('Register') }} to {{ config('app.name', 'Laravel') }}</h3>
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>

                            
                                <input id="name" type="text" class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required>
                        </div>
                        
                        <div class="form-group py-2">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Register') }}
                            </button>
                        </div>    
                        <div class="form-group d-flex justify-content-center">
                            <div>{{
                                link_to_route('event.index', '[ home ]', [], ['class'=>'btnbtn-link'])
                            }}
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
