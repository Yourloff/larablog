<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        if($posts->isEmpty()) {
            $message = 'Нет постов в блоге';
        } else {
            $message = null;
        }

        return view('home', compact('posts', 'message'));
    }
}
