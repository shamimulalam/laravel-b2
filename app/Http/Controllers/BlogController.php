<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = new Blog();
        $data['blog'] = $blog->blog();
        $data['page_title'] = 'This is blog page';
        return view('blog',$data);
    }
}
