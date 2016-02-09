<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin');
    }

    

    public function blogpost()
    {
        return view('admin/blogpost');
    }

    public function contact()
    {
        return view('auth/contact');
    }
     public function about()
    {
        return view('auth/about');
    }
}
