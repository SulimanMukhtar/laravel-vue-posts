<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PostsController extends Controller
{
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('view' , $post);
        return Inertia::render('Profile/EditPost', compact('post'));
    }

    public function create()
    {
        $this->authorize('view' , Post::class);
        return Inertia::render('Add/AddPost');
    }

    public function store(PostStoreRequest $request)
    {
        $this->authorize('create' , Post::class);
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'body' => $request->body
        ]);
        return Redirect::route('dashboard');
    }

    public function update(PostUpdateRequest $request , $id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('update' , $post);
        $post->update($request->validated());
        return Redirect::route('dashboard');
    }


    public function destroy(Request $request,$id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('delete' , $post);
        $post->delete();
        return Redirect::route('dashboard');
    }
}
