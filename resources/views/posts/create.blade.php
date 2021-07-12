@extends('layouts.app')
@section('title', 'Create A Post')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">

            @if( Auth::check() )
            <!-- Top Heading -->
            <h2 class="text-center p-2 pt-4">Create A New Post</h2>

            <!-- Create Post Form -->
            <form action="/posts" method="POST" class="p-1">
                @csrf<br>
                <!-- Title Input -->
                <div class="form-floating mb-3">
                    <input name="post_title" type="text" id="postTitle" class="form-control"
                        value="{{ old('post_title') }}">
                    <label for="postTitle">Post Title</label>
                    <small class="text-muted">Choose characters between 0-100.</small>
                </div>
                <!-- Description Input -->
                <div class="form-floating mb-3">
                    <textarea name="post_description" id="postDescription" class="form-control"
                        style="height: 200px;">{{ old('post_description') }}</textarea>
                    <label for="postDescription">Description</label>
                    <small class="text-muted">Choose minimum characters 200.</small>
                </div>
                <!-- Upload Button -->
                <button type="submit" class="btn btn-info my-2">Upload</button>
            </form>
            @endif

        </div>
    </div>
</div>

@endsection