@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

<!-- User Contact Section -->
<section class="bg-transparent p-5 pt-0 my-5 text-center">
    <div class="container">
        <div class="d-md-flex align-items-center justify-content-between">
            <img src="{{ asset('img/contact_us.svg') }}" class="img-fluid w-50 p-3 d-none d-md-block">
            <div class="p-5 p-lg-5 p-md-0 mx-md-4">
                <!-- Heading -->
                <h1 class="text-start mx-2 text-secondary fw-bold">Contact Us</h1>
                <p class="text-start form-text mx-2 text-muted pb-2">Share your problem or experience with our
                    services.
                    Reach us within 24/7.</p>
                <!-- Contact Form -->
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-pill" placeholder="John Doe">
                        <label for="">Your Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-pill" placeholder="name@example.com">
                        <label for="">Your E-mail</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea name="" class="form-control rounded" placeholder="Leave a comment here"
                            style="height: 200px;"></textarea>
                        <label for="">Type Your Message Here...</label>
                    </div>
                    <button class="btn btn-info btn-lg w-100 text-center rounded-pill">Send Your Message.</button>
                </form><!-- /.Contact Form -->
            </div>
        </div>
    </div>
</section><!-- /.User contact section -->

@endsection