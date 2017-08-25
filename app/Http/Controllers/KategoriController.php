<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use Date;

class KategoriController extends Controller
{
 
    public function create()
    {
      $kategori=Kategori::all(); 
      return view('blog.create',['kategori'=>$kategori]);
    }
    public function store(Request $request)
    {

      $this->validate($request, [
        'nama'=>'required|min:5',
      ]);

      $kategori= new Kategori;
      $kategori->nama= $request->nama; 
      $kategori->save();
      return redirect('kategoris');
    }
    public function edit($id)
    {
      $kategori=Kategori::find($id);
      $blog=Blog::find($id);
      if(!$blog)
      abort(404);
      return view('blog.edit', ['blog'=> $blog,'kategori'=>$kategori]);
    }
    public function update(Request $request, $id)
    {
      $kategori = Kategori::find($id);
      $kategori->nama= $request->nama;
      $kategori->save();
      return redirect('kategoris');
    }
    public function destroy($id)
    {
      $kategori = Kategori::find($id);
      $kategori->delete();
      return redirect('kategoris');
    }
    public function kategorihome()
    {
    $kategori=Kategori::all();
    return view('blog.kategorihome',['kategori'=>$kategori]);
    }
    public function kategorimutiara()
    {
      return view('blog.katamutiara');
    }
    public function kategoripuisi()
    {
      return view('blog.katapuisi');
    }
    public function kategorikisah()
    {
      return view('blog.katakisah');
    }
    public function kategoricreate()
    {
      $kategori=Kategori::all();
      return view('blog.kategoricreate',['kategori'=>$kategori]);
    }
    public function kategoriedit($id)
    {
      $kategori=Kategori::find($id);
      return view('blog.kategoriedit',['kategori'=>$kategori]);
    }
}
