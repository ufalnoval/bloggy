<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Kategori;
Use App\Models\User;
use Date;
class BlogController extends Controller
{
    public function index()/*function dengan nama index*/
    {
      $blogs=Blog::all();/* variabel blogs memanggi data blogs semuanya*/
      $kategori=Kategori::all();   
      return view('blog.home',['blogs'=>$blogs,'kategori'=>$kategori]);/*menampilkan halaman home yang berada di blog sekaligus mengirim data blogs dan kategori ke sana */
    }
    public function show($id)/*function dengan nama show yang berfungsi menampilan data berdasarkan ($id)*/
    {
      $blog=Blog::find($id);/* variabel blogs dengan fungsi find atau temukan berdasarkan ($id)*/
      $kategori=Kategori::all();/* variabel kategori memanggi data kategori semuanya*/
      if(!$blog)/*jika blog tidak di temukan di lempar ke halaman 404*/
      abort(404);
      return view('blog.single', ['blog'=> $blog,'kategori'=>$kategori]);
    }
    public function create()/*function dengan nama create*/
    {
      $kategori=Kategori::all(); /* variabel kategori memanggi data kategori semuanya*/
      return view('blog.create',['kategori'=>$kategori]);
    }
    public function store(Request $request)/*function dengan nama store*/
    {

        // memvalidasi inputan title, description tidak boleh kosong (required) title->harus di isi inimal 5 inputan data, description harus di isi min 5 max 1000 inputan data
      $this->validate($request, [
        'title'=>'required|min:5',
        'description'=>'required|min:5|max:1000'
      ]);
      //$blog= new Blog; ->membuat data baru pada tabel blog
          // jika form tidak kosong artinya validasi berhasil di lalui maka proses di bawah ini di jalankan, yaitu mengambil semua kiriman dari form
        // title description gambar adalah nama kolom yang ada di table blog
        // sedangkan $request->title,description,gambar adalah isi dari kiriman form
      //save() funtion untuk menimpan data
      //return redirect(''); berfungsi jika semua funcion berhasil halaman akan di lempar ke halaman yang di tetapkan
      $blog= new Blog;
      $blog->title= $request->title;
      $blog->description= $request->description;
      $blog->gambar=$request->gambar; 
      $blog->save();
      return redirect('home');
    }
    public function edit($id)/*function dengan nama edit*/
    {
      $kategori=Kategori::all();/* variabel kategori memanggi data kategori semuanya*/
      $blog=Blog::find($id);/* variabel blogs dengan fungsi find berdasarkan ($id)*/
      if(!$blog)
      abort(404);
      return view('blog.edit', ['blog'=> $blog,'kategori'=>$kategori]);
    }
    public function update(Request $request, $id)/*function dengan nama update*/
    {
      $blog = Blog::find($id);/* variabel blogs dengan fungsi find berdasarkan ($id)*/
      $blog->title= $request->title;
      $blog->description= $request->description;
      $blog->save();
      return redirect('home');
    }
    public function destroy($id)/*function dengan nama destroy*/
    {
      $blog = Blog::find($id);/* variabel blogs dengan fungsi find berdasarkan ($id)*/
      $blog->delete();/*funtion delete untuk menghapus data yang berada dalam tabel blog berdasarkan ($id)*/
      return redirect('home');
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
    public function homecreate()
    {
      $blogs=Blog::all();
      return view('blog.homecreate',['blogs'=>$blogs]);
    }
    public function homeedit($id)
    {
      $blog=Blog::find($id); 
      return view('blog.homeedit',['blog'=>$blog]);
    }
}