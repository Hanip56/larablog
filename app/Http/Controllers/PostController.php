<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // get post detail
    public function show(Request $request, int $id) {
        return view('posts.show');
    }

    // show create form post
    public function create() {
        return view('posts.create');
    }
}
