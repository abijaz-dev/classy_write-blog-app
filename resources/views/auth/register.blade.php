@extends('layouts.app')
@section('title', 'Register new account')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-7 offset-md-3 col-sm-8 offset-sm-2">
            <h2 class="display-5 text-center my-4">Create New Account</h2>
            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input id="name" class="form-control" type="text" name="name" placeholder="John Doe"
                        value="{{ old('name') }}" placeholder="" required autofocus />
                    <label for="name">Enter Your Name</label>
                    @if( $errors->has('name') )
                    <!-- Display Error -->
                    <strong class="form-text text-danger">{{ $errors->first('name') }}</strong>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="form-floating mb-3">
                    <input id="email" class="form-control" type="email" name="email" placeholder="name@example.com"
                        value="{{ old('email') }}" required />
                    <label for="email">Email Your Address</label>
                    @if( $errors->has('email') )
                    <!-- Display Error -->
                    <strong class="form-text text-danger">{{ $errors->first('email') }}</strong>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password"
                        required autocomplete="new-password" />
                    <label for="password">Enter Your Password</label>
                    @if( $errors->has('password') )
                    <!-- Display Error -->
                    <strong class="form-text text-danger">{{ $errors->first('password') }}</strong>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="form-floating mb-3">
                    <input id="password_confirmation" class="form-control" type="password"
                        placeholder="Confirm Password" name="password_confirmation" required />
                    <label for="password_confirmation">Confirm Password</label>
                </div>

                <div class="text-center">
                    <a class="text-decoration-none fst-normal" href="{{ route('login') }}">
                        {{ __('Already registered ?') }}
                    </a>
                </div>

                <!-- Register Button -->
                <button type="submit" class="btn btn-info btn-lg w-100 my-3">
                    {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection