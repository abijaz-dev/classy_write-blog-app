@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-7 offset-md-3 col-sm-8 offset-sm-2">

            <!-- Top Headings -->
            <h2 class="display-5 text-center my-4">Frogot Password</h2>
            <div class="fs-6 text-center my-2 p-2">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-floating">
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        placeholder="name@example.com" required autofocus />
                    <label for="email" :value="__('Email')">Enter E-mail Address</label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-info w-100 btn-lg mb-2">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection