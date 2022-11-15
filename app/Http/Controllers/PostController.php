<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
//agrega el middleware auth a todas las vistas del post, excepto a la vista index y la vista show
    public function __construct()
    {
    $this->middleware('auth', ['except' => ['index', 'show']]);
    }

//muestra todos los posts
    public function index()
    {
        $readPosts = Post::get();
        return view('posts.index', ['posts' => $readPosts]);
    }
//muestra un post individual
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
//muestra el formulario de creacion de post
    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }
//crea el post
    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());
        return to_route('posts.index')->with('status', 'Post created!');
    }

//muestra el formulario de edicion
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
//edita el post
    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }
//elimina el post
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post deleted');
    }
}
