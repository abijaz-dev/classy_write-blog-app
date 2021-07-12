@extends('layouts.app')
@section('title', 'Login')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-7 offset-md-3 col-sm-8 offset-sm-2">
            <h2 class="display-5 text-center my-4">Login To Account</h2>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-floating mb-3">
                    <input id="email" class="form-control" type="email" name="email" placeholder="name@example.com"
                        required />
                    <label for="email">Email Your Address</label>
                    @if( $errors->has('email'))
                    <!-- Display Error -->
                    <strong class="form-text text-danger">{{ $errors->first('email') }}</strong>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-floating">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password"
                        required autocomplete="current-password" />
                    <label for="password">Enter Your Password</label>
                    @if( $errors->has('password'))
                    <!-- Display Error -->
                    <strong class="form-text text-danger">{{ $errors->first('password') }}</strong>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="form-check mt-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <!-- Forgot Password -->
                <div class="text-center mt-2">
                    @if (Route::has('password.request'))

                    <a class="text-decoration-none" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>

                <button type="submit" class="btn btn-info w-100 my-3 btn-lg">
                    {{ __('Log in') }}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection