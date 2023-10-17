<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories,$category;
    public function index()
    {
        return view('admin.category.index');
    }
    public function store( Request $request)
    {
        category::newCategory($request);
        return back()->with('message','Category info create successfully.');
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }
    public function manage()
    {
        $this->categories =Category::all();
        return view('admin.category.manage',['categories'=>$this->categories]);

    }
    public function update(Request $request,$id)
    {
        Category::newUpdate($request,$id);
        return back()->with('message','Category info Edit successfully.');

    }
    public function delete($id)
    {
       Category::deleteCategory($id);
       return back()->with('message','Category info Delete successfully.');
    }

}
