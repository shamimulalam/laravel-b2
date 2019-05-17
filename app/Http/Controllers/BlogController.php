<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
//        Blog::create(['title'=>'This is from ORM1','user_id'=>1,'details'=>'Details form ORM']);
//        Blog::create(['title'=>'This is from ORM2','user_id'=>2,'details'=>'Details form ORM']);
//        Blog::create(['title'=>'This is from ORM3','user_id'=>1,'details'=>'Details form ORM']);
//        Blog::create(['title'=>'This is from ORM4','user_id'=>1,'details'=>'Details form ORM']);


        $blog = new Blog();
//        $blog = $blog->where('id',1);
        $blog = $blog->with('user')->get();
//        dd($blog);
        $user= User::with('blogs')->get();

        dd($user);
        $blog = new Blog();
        $data['blog'] = $blog->blog();
        $data['page_title'] = 'This is blog page';
        return view('blog',$data);
    }
}
