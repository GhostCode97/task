<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Post;
class PostsController extends Controller
{
    //
    public function index()
    {
        // get all posts from model Post
        $posts= Post::all();
        $posts = $posts->toBase();
        // return $posts;
        // return view with all posts
        return view('users.home', compact('posts'));
    }
    // CRUD - Create Read Update Delete to posts
    // Read
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('users.post.show', compact('post'));
    }
    // Create
    public function create()
    {
        return view('users.post.create');
    }
    public function store(Request $request)
    {
        //create post
        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        //redirect to posts index
        return redirect()->route('users.index');
    }
    // Update
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('users.post.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('users.profile');
    }
    // Delete
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('users.profile');
    }

}
