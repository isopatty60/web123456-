@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                <h3 class=" col-md-10 text-center text-info">Login</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label> --}}
                            <label for="username" class="col-md-2 col-form-label text-info">Username:</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}
                            <label for="username" class="col-md-2 col-form-label text-info">Password:</label><br>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-info form-check-label" for="remember-me">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 text-info">

                                <button type="submit" class="btn btn-info btn-md">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class=" text-info form-check-label btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
