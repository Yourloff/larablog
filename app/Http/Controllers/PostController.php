<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        if($posts->isEmpty()) {
            $message = 'Нет постов в блоге';
        } else {
            $message = null;
        }
        return view('posts.index', compact('posts', 'message'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
