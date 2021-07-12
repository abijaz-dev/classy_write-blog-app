@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')


<!-- Front Top Heading -->
<h2 class="text-center display-5 pt-5 text-warning font-monospace">
    <ins>{{ __('Dashboard') }}</ins>
</h2>

<div class="container p-5">
    <!-- Post Heading -->
    <h3 class="text-center text-dark">Your Posts</h3>

    <!-- Create Post Button -->
    <a href="{{ url('/posts/create') }}" class="btn btn-success p-2 m-2">Create Post</a>
    @if( count($posts) > 0 )

    <!-- Posts Lists -->
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Desctiption</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $posts as $post )

            <tr>
                <td class="fw-bold">{{ $post->title }}</td>
                <td>{{ substr( $post->description, 0, 250 ) }} .....</td>
                <td class="text-center">
                    <!-- Read The Post -->
                    <a href="/posts/{{ $post->id }}" class="btn btn-secondary btn-sm p-2 w-75">Read</a>

                    <!-- Update The Post -->
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm p-2 m-sm-2 w-75 m-2">Update</a>

                    <!-- Delete The Post -->
                    <form action="/posts/{{ $post->id }}" method="POST">
                        @csrf

                        @method('DELETE')

                        <button class="btn btn-danger btn-sm p-2 px-1 p-sm-2 w-75">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    @else
    <!-- No Post Found -->
    <div class="bg-danger p-4 mt-4 text-center text-light border rounded-3">
        <h2 class="lead fs-2">You Dont Have Any Post !</h2>
    </div>
    @endif

</div>

@endsection