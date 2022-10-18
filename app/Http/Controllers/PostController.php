<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            1, 2, 3
        ];
        return view('blog', compact('posts'));
    }
}
