<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(Post $post) {
    	return view('home')->with([
    			'posts' => $post->latestFirst()->get()
    		]);
    }
}
