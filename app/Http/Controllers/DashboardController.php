<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a user dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // Get Authenticated User Id
        $user_id = Auth::id();

        // Find The User
        $user = User::find( $user_id );

        // Send Data To Dashboard Page
        return view('dashboard', [ 'posts'=> $user->posts ]);
    }
}
