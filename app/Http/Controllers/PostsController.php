<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PostsController extends Controller
{
    public function index(Post $post) {
    	return view('home')->with([
    			'posts' => $post->latestFirst()->isLive()->get()
    		]);
    }

    public function tagged(Tag $tag) {
        return view('post.tag')->with([
            'posts' => $tag->posts()->latestFirst()->isLive()->get(),
            'tag'   => $tag
        ]);
    }
}
