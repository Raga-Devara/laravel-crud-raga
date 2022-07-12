<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "All Blog",
            // "post" => Post::all()
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Post Pertama",
            "posts" => $post
        ]);
    }
}
