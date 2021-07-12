@extends('layouts.app')
@section('title', 'Blog View')
@section('content')


@if( $post )
<!-- Single Post View -->
<section class="bg-light p-5 text-center text-dark">
    <div class="container">
        <h2 class="display-5 fst-italic">"{{ $post->title }}"</h2>
        <div class="d-md-flex justify-content-center">
            <p class="text-muted px-1"><b>Author :</b> {{ $post->user->name }},</p>
            <p class="text-muted px-1"><b>Posted at :</b> {{ $post->created_at }}</p>
        </div>
        @if( Auth::id() == $post->user->id )

        <div class="d-flex align-items-center justify-content-end p-2">
            <!-- Edit Your Post -->
            <a href="/posts/{{ $post->id }}/edit"><i class="h4 bi bi-pencil-square text-dark"></i></a>

            <!-- Delete Your Post -->
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-light"><i class="h4 bi bi-trash-fill text-danger"></i></button>
            </form>
        </div>
        @endif

        <hr>
        <p class="lh-lg text-start fw-normal fs-5 p-5">{{ $post->description }}</p>
    </div>
    </div>
</section>
<!--/Single Post View -->

@else
<!-- Invalid Route Error -->
<section class="bg-light text-dark p-5">
    <div class="container text-center">
        <img src="{{ asset('img/invalid_route.svg') }}" alt="Invalid Route" class="img-fluid w-50">
        <div>
            <h2 class="display-4 p-3 pt-5">Page Not Found !</h2>
        </div>
    </div>
</section><!--/Invalid Route Error -->
@endif

@endsection