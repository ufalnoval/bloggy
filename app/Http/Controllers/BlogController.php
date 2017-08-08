<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;
use Date;

class BlogController extends Controller
{
    public function index()
    {
      $blogs=Blog::all();
    	return view('blog.home',['blogs'=>$blogs]);
    }

    public function show($id)
    {
      $blog=Blog::find($id);
      if(!$blog)
      abort(404);
    	return view('blog.single', ['blog'=> $blog]);
    }

    public function create()
    {
      return view('blog.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'title'=>'required|min:5',
        'description'=>'required|min:5|max:100'
      ]);
      $blog= new Blog;
      $blog->title= $request->title;
      $blog->description= $request->description;
      $blog->save();

      return redirect('blog');
    }

    public function edit($id)
    {
      $blog=Blog::find($id);
      if(!$blog)
      abort(404);
      return view('blog.edit', ['blog'=> $blog]);
    }
    public function update(Request $request, $id)
    {
      $blog = Blog::find($id);
      $blog->title= $request->title;
      $blog->description= $request->description;
      $blog->save();

      return redirect('blog/' . $id);
    }

    public function destroy($id)
    {
      $blog = Blog::find($id);
      $blog->delete();
      return redirect('blog');

    }

}
