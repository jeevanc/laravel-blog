<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index(){
    	$posts = Post::with('author')->latestFirst()->simplePaginate(5);
    	return view('web.index',compact('posts'));
    }
}
