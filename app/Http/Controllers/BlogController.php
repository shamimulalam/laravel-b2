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
        $data['title'] = 'List of blogs';
        $data['blogs'] = Blog::orderBy('id','DESC')->get();
        return view('blog/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Create new blog';
        return view('blog/create', $data);
    }

    public function store(Request $request)
    {
        Blog::create(['title' => $request->title, 'details' => $request->details, 'user_id' => 1]);
        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Blog';
        $data['blog'] = Blog::where('id', $id)->first();
        return view('blog/edit', $data);
    }

    public function update(Request $request,$id){

        Blog::where('id',$id)->update(['title' => $request->title, 'details' => $request->details, 'user_id' => 1]);
        return redirect()->route('blog.index');
    }
    public function destroy($id)
    {
        Blog::where('id',$id)->delete();
        return redirect()->route('blog.index');

    }
}
