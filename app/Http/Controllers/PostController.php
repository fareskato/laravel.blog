<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // posts per page
    protected $limit = 3;

    public function index(){


//        $posts = Post::all();
        // This way best performance
        $posts = Post::with('author')->simplePaginate($this->limit); // or paginate(3)
         return view('blog.index', compact('posts', $posts));
    }
}
