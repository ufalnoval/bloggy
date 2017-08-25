<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Kategori;

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
        $blogs=Blog::all();
        return view('home',['blogs'=>$blogs]);
    }
    public function users()
    {
        // $blogs=Blog::all();
        $users=User::all();
        return view('users',['users'=>$users]);
    }
    public function kategoris()
    {
        $kategoris=Kategori::all();
        return view('kategoris',['kategoris'=>$kategoris]);
    }
}
