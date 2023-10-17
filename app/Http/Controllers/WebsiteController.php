<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public $blogs,$categories,$category,$blog,$comments;
    public function index()
    {

        $this->blogs =Blog::all();
        $this->categories =Category::all();

        return view('website.home.index',['blogs'=>$this->blogs] );
    }
    public function category($id)
    {
        $this->blogs = Blog::where(['category_id' => $id, 'status' => 1])->orderBy('id', 'desc')->get();
        return view('website.category.index', ['blogs' => $this->blogs]);
    }
    public function detail($id)
    {
        $this->blog = Blog::find($id);
        $this->blogs = Blog::all();
        $this->comments= Comment::where('blog_id',$id)->where('status',1)->get();

        return view('website.detail.index',['blog'=>$this->blog,'blogs'=>$this->blogs,'comments'=>$this->comments]);
    }
}
