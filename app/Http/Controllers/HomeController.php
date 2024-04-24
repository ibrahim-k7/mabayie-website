<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // disabled by ibrahim | this fun for apply the middleware from the controller but im apply the middleware in Routs | this means theer tow ways to apply middleware
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.views.home');
    }
    public function index2()
    {
        return view('test');
    }
}
