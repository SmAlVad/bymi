<?php

namespace App\Http\Controllers\Blog;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\BlogPost;

class PostController extends BaseBlogController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::limit(50)->get();
        $categories = BlogCategory::where('parent_id',1)->get();

        return view('blog.posts.index', compact('posts', 'categories'));
    }
}
