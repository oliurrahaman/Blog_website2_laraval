<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $categories, $blogs,$blog;
    public function index()
    {
        $this->categories =Category::all();
        return view('admin.blog.index',['categories'=>$this->categories]);
    }
    public function store( Request $request)
    {
        Blog::newBlog($request);
        return back()->with('message','Blog info create successfully.');
    }
    public function manage()
    {
        $this->blogs = Blog::all();

        return view('admin.blog.manage', ['blogs' => $this->blogs]);
    }


    public function edit($id)
    {
        $this->blog = Blog::find($id);
        $this->categories =Category::all();
        return view('admin.blog.edit', ['blog' => $this->blog,'categories'=>$this->categories]);
    }
    public function update(Request $request,$id)
    {
        Blog::blogUpdate($request,$id);
        return back()->with('message','Blog info Edit successfully.');

    }
    public function delete($id)
    {
       Blog::deleteBlog($id);
       return back()->with('message','Blog info Delete successfully.');
    }
}
