<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PostsController extends Controller
{
    public function index(Post $post) {
    	return view('home')->with([
    			'posts' => $post->latestFirst()->get()
    		]);
    }

    public function tagged(Tag $tag) {
        return view('post.tag')->with([
            'posts' => $tag->posts()->latestFirst()->get(),
            'tag'   => $tag
        ]);
    }
}
