@extends('layouts.app')
@section('title', 'Blog Posts')
@section('content')


<div class="container p-5">
    <!-- Blog Posts Heading -->
    <h3 class="text-center fs-2 text-dark p-4">Blog Posts</h3>
    <!-- Posts List Group -->
    <div class="list-group">
        @if( count($posts) > 0 )
        @foreach( $posts as $post )

        <!-- List Items -->
        <a href="/posts/{{ $post->id }}" class="list-group-item list-group-item-action p-4">
            <div class="d-flex justify-content-between">
                <h5 class="mb-1">{{ $post->title }}</h5>
                <small class="text-muted">{{ date_format($post->created_at, 'd-M-Y')}}</small>
            </div>
            <p class="mb-2">{{ substr( $post->description, 0, 250 ) }} .....</p>
            <small class="text-muted">Posted by : {{ $post->user->name }}</small>
        </a>
        @endforeach
        @endif

    </div>
</div>

@endsection