<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PostsController extends Controller
{
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return Inertia::render('Profile/EditPost', compact('post'));
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
