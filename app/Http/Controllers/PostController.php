<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Posts per page
    const LIMIT = 3;

    /**
     * Display all post(DESC)
     */
    public function index(){
        $posts = Post::with('author')->latestFirst()->published()->simplePaginate($this::LIMIT); // or paginate(3)
         return view('blog.index', compact('posts', $posts));
    }

    /**
     * Display single post
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        // Just published post

        return view('blog.show', compact('post'));
    }

}
