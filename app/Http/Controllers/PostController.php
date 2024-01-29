<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    // get all post / home
    public function index(Request $request) {
        return view('posts.index', ['posts' => Post::latest()->filter(request(['category', 'search']))->get()]);
    }

    // get post detail
    public function show(Request $request, Post $post) {
        $post->description = Str::markdown($post->description);
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

    // manage posts
    public function manage() {
        return view('posts.manage', ['posts' => auth()->user()->posts]);
    }

    // delete post
    public function destroy(Post $post) {
        if(auth()->user()->id != $post['user_id']){
            abort(403, 'Forbidden');
        }

        $post->delete();

        return back()->with('message', 'Deleted successfully');
    }

    // show edit form
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    // update
    public function update(Request $request, Post $post) {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        if($request->file('thumbnail')){
            $formFields['thumbnail'] = $request->file('thumbnail')->store('images', 'public');
        }

        $post->update($formFields);

        return redirect('/posts/manage')->with('message', 'Updated successfully');
    }
}
