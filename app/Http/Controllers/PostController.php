<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    // store form post
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'thumbnail' => 'required'
        ]);

        if($request->file('thumbnail')){
            $formFields['thumbnail'] = $request->file('thumbnail')->store('images', 'public');
        }

        $formFields['user_id'] = auth()->user()->id;

        Post::create($formFields);

        // store to db
        return redirect('/')->with('message', 'Post uploaded');
    }
}
