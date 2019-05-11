<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blog = \DB::table('blog');
        $blog = $blog->where('title','like','%title%');
        $blog = $blog->get();

        dd($blog);
        $blog = new Blog();
        $data['blog'] = $blog->blog();
        $data['page_title'] = 'This is blog page';
        return view('blog',$data);
    }
}
