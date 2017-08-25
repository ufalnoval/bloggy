<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
      $blogs=Blog::all();
      $kategori=Kategori::all();   
      return view('blog.home',['blogs'=>$blogs,'kategori'=>$kategori]);
    }
    public function show($id)
    {
      $blog=Blog::find($id);
      $kategori=Kategori::all();
      if(!$blog)
      abort(404);
      return view('blog.single', ['blog'=> $blog,'kategori'=>$kategori]);
    }
    public function create()
    {
      $kategori=Kategori::all(); 
      return view('blog.create',['kategori'=>$kategori]);
    }
    public function store(Request $request)
    {
      $this->validate($request, [
        'name'=>'required|min:5',
        'email'=>'required|min:5|max:1000'
      ]);
      $user= new User;
      $user->name= $request->name;
      $user->email= $request->email;
      $user->password= $request->password;
      $user->save();
      return redirect('users');
    }
    public function edit($id)
    {
      $user=User::all();
      $user=User::find($id);
      if(!$user)
      abort(404);
      return view('blog.edit', ['blog'=> $blog,'user'=>$user]);
    }
    public function update(Request $request, $id)
    {
      $user = User::find($id);
      $user->name= $request->name;
      $user->email= $request->email;
      $user->save();
      return redirect('users');
    }
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect('users');
    }
    public function usercreate()
    {
      $user=User::all();
      return view('blog.usercreate',['user'=>$user]);
    }
    public function useredit($id)
    {
      $user=User::find($id);
      return view('blog.useredit',['user'=>$user]);
    }
}
