@extends('layouts.app')
@section('title', 'Create A Post')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">

            <!-- Top Heading -->
            <h2 class="text-center p-3 pt-4">Edit Your Post</h2>
            @if( $post )

            <!-- Edit Post Form -->
            <form action="/posts/{{ $post->id }}" method="post" class="p-2">
                @csrf
                @method('PUT')
                <br>

                <!-- Update Title Input -->
                <div class="form-floating mb-3">
                    <input name="update_title" type="text" id="postTitle" value="{{ $post->title }}"
                        class="form-control">
                    <label for="postTitle">Post Title</label>
                </div>

                <!-- Update Description Input -->
                <div class="form-floating mb-3">
                    <textarea name="update_description" id="postDescription" class="form-control"
                        style="height: 200px;">{{ $post->description }}</textarea>
                    <label for="postDescription">Description</label>
                </div>

                <!-- Update Button -->
                <button type="submit" class="btn btn-warning my-2">Update</button>
            </form>
            @endif

        </div>
    </div>
</div>

@endsection