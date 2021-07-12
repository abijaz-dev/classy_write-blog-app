@extends('layouts.app')
@section('title', 'A Blog App')
@section('content')


<!-- Top Navbar Hero -->
<section class="bg-light bg-gradient text-dark p-5 pt-lg-4 p-lg-0 text-center text-md-start">
    <div class="container">
        <div class="d-md-flex align-items-center justify-content-between">
            <img src="{{ asset('img/article_note.svg') }}" class="img-fluid w-50 p-lg-5 d-none d-md-block">
            <div class="mx-4">
                <h1 class="display-3">Publish Your Article</h1>
                <p class="lead fs-4">Lead your hardwork to success by express your knowledge through that kind of source
                    that has zero confusion.</p>
                <a href="{{ url('/register') }}" class="btn btn-info btn-lg">Post now</a>
            </div>
        </div>
    </div>
</section><!-- /Top Navbar Hero -->

<!-- Blog Section -->
<article class="p-5 pt-5" id="blog">
    <div class="container">
        <h1 class="lead display-6 fw-normal text-center p-5 pb-4 pt-5"><u>Popular Blogs</u></h1>
        @if( $posts )

        @foreach( $posts as $post )
        <div class="p-md-5 p-sm-5 mb-5 text-white rounded bg-secondary">
            <div class="col-md-10 offset-0 p-lg-0 p-md-0 p-sm-0 px-5 p-4">
                <h2 class="display-6 fs-3 fst-italic fw-normal">- {{ $post->title }}</h2>
                <p class="lead my-3">{{ substr( $post->description, 0, 250 ) }} ...</p>
                <a href="/posts/{{ $post->id }}" class="btn btn-info">Read more</a>
            </div>
        </div>
        @endforeach

        @endif
    </div>
</article><!-- /Blog Section-->

@endsection