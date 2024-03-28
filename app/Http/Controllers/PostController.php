<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $post = new Post();
        $posts = $post->getList();


        return view('posts.index', ['posts' => $posts]);
    }
}
