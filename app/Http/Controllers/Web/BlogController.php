<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(){

    	$categories = Category::with('posts')->orderBy('title','asc')->get();
    	$posts = Post::with('author')->latestFirst()->simplePaginate(5);
    	return view('web.index',compact('posts','categories'));
    }

     public function category($id){

    	$categories = Category::with('posts')->orderBy('title','asc')->get();
    	$posts = Post::with('author')->latestFirst()->where('category_id',$id)->simplePaginate(5);
    	return view('web.index',compact('posts','categories'));
    }

    public function show(Post $post){
    	return view('web.show',compact('post'));
    }
}
