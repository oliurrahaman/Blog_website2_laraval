<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Session;

class VisitorAuthController extends Controller
{
    private $visitor;

    public function index()
    {
        return view('visitor.auth.login');
    }
    public function reg()
    {
        return view('visitor.auth.register');
    }

    public function login(Request $request)
    {
        $this->visitor = Visitor::where('email', $request->email)->first();
        if ($this->visitor)
        {
            if (password_verify($request->password, $this->visitor->password))
            {
                Session::put('visitor_id', $this->visitor->id);
                Session::put('visitor_name', $this->visitor->name);

                return redirect('/my-dashboard');
            }
            else
            {
                return redirect('/user-register');
                return back()->with('message', 'Sorry ... invalid password.');

            }
        }
        else
        {
            return back()->with('message', 'Sorry ... invalid email.');
        }
    }

    public function register(Request $request)
    {
        $this->visitor = Visitor::newVisitor($request);

        Session::put('visitor_id', $this->visitor->id);
        Session::put('visitor_name', $this->visitor->name);

        return redirect('/my-dashboard');
    }

    public function dashboard()
    {
        return view('visitor.home.index');
    }

    public function logout()
    {
        Session::forget('visitor_id');
        Session::forget('visitor_name');

        return redirect('/');
    }
}
