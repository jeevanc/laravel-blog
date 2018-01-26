<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    protected $limit = 5;

    public function index()
    {
        $posts = Post::with('author')
                    ->latestFirst()
                    ->published()
                    ->simplePaginate($this->limit);

        return view("web.index", compact('posts'));
    }

    public function category(Category $category)
    {
        $categoryName = $category->title;

        // \DB::enableQueryLog();
        $posts = $category->posts()
                          ->with('author')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("web.index", compact('posts', 'categoryName'));

        //  dd(\DB::getQueryLog());
    }

    public function show(Post $post)
    {
        return view("web.show", compact('post'));
    }
}
