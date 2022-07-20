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
            "active" => "blog",
            // "post" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Post Pertama",
            "active" => "blog",
            "posts" => $post
        ]);
    }
}
