<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // Retrieve Posts Data.
        $posts = Post::orderBy('id', 'Desc')->get();

        // Return To Display Data.
        return view('/posts.index', [ 'posts' => $posts ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // Check If User Authenticated.
        if( Auth::check() ) 
        {    
            // Create A Post.
            return view('posts.create');
        } 
        // Redirect to home page.
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // Validate the Data.
        $this->validate($request, [
            'post_title'       => 'required|regex:/^[a-zA-Z0-9.]+/i|max:100',
            'post_description' => 'required|regex:/^[a-zA-Z0-9.]+/i|min:200',
        ]);
        
        // Set the Data.
        $post = new Post;
        $post->title       = strip_tags( $request->post_title );
        $post->description = strip_tags( $request->post_description );
        $post->users_id    = Auth::id();
        
        // Save to DB.
        if( $post->save() )
        {
            return redirect('/dashboard')->with( 'success', 'Your Post is Created.' );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        // Find the Post By Id.
        $post = Post::find($id);

        // Return To Display.
        return view('posts.show', [ 'post' => $post ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        // Find The Blog.
        $post = Post::find($id);

        // Check if user is not correct.
        if ( Auth::id() !== $post->user->id )
        {
            return redirect('/dashboard')->with( 'error', 'Unauthorized Page Found!' );
        }

        // Check if post not found.
        if ( !$post )
        {
            return redirect('/dashboard')->with( 'error', 'Post Not Found!' );
        }
        // Return To Update.
        return view('posts.edit', [ 'post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        // Validate The Data.
        $this->validate($request, [
            'update_title'       => 'required|regex:/^[a-zA-Z0-9.]+/i|max:100',
            'update_description' => 'required|regex:/^[a-zA-Z0-9.]+/i|min:200',
        ]);

        // Find The Post By Id.
        $post = Post::find($id);

        // Assign data to DB parameters.
        $post->title       = strip_tags( $request->update_title );
        $post->description = strip_tags( $request->update_description );
        $post->users_id    = Auth::id();
        
        // Update the data in DB.
        if( $post->save() )
        {
            return redirect('/dashboard')->with( 'success', 'Your Post is Updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        // Find The Post.
        $post = Post::find($id);

        // Check if post exists.
        if( !isset($post) )
        {
            return redirect('/dashboard')->with( 'error', 'Post Was Not Found!');
        }

        // Check if user is valid
        if( Auth::id() !== $post->user->id )
        {
            return redirect('/dashboard')->with( 'error', 'You are not eligible to delete this!');
        }

        // Delete the post.
        if( $post->delete() )
        {
            return redirect('/dashboard')->with( 'success', 'Your Post Deleted Successfully.');
        }
    }
}