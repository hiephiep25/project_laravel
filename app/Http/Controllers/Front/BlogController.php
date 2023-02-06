<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\BlogComment;
class BlogController extends Controller
{
    public function index(){
        return view('front.blog.show');
    }
}
