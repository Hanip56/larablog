<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // get all post / home
    public function index(Request $request) {
        return view('posts.index', ['posts' => Post::all()]);
    }

    // get post detail
    public function show(Request $request, Post $post) {
        return view('posts.show', ['post' => $post]);
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

        // session()->regenerate();

        // session()->flash('message', "Post uploaded");
        return redirect('/');
    }
}
