<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    // Home Page.
    public function index()
    {
        // Fetch Posts by Id & return.
        $posts = Post::whereIn('id', [1, 2, 3])->get();
        return view('pages.index',[ 'posts' => $posts ]);
    }

    // Contact Page.
    public function contact()
    {
        return view('pages.contact');
    }
}
