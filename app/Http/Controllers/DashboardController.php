<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
    public function category()
    {

        return view('admin.category.index');
    }
    public function detail()
    {

        return view('admin.detail.index');
    }
}
