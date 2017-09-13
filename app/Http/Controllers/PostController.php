<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // posts per page
    const LIMIT = 3;

    public function index(){
        $posts = Post::orderBy('created_at', 'disc')->simplePaginate($this::LIMIT); // or paginate(3)
         return view('blog.index', compact('posts', $posts));
    }
}
