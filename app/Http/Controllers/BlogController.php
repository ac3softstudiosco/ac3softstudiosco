<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function public(){

        $blogs = Blog::orderBy('id', 'desc')->paginate(9);

        return view('front.blog', compact('blogs'));
    }

    public function index(){

        $blogs = Blog::orderBy('id', 'desc')->paginate(9);


        return view('admin.blogs.index', compact('blogs'));
    }
}
