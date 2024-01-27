<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // get listing detail
    public function show(Request $request, int $id) {
        return view('posts.show');
    }
}
