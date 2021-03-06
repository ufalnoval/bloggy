@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
<div class="col-md-2 col-md-offset-">
            <div class="panel panel-default">
                <div class="panel-heading">Menu Navigation</div>

                <div class="panel-body">
                <u>
                    <li><a class="nav-link" href="<?php echo url('blog') ?>">Blog</a></li>
                    <li><a class="nav-link" href="<?php echo url('users') ?>">Users</a></li>
                    <li><a class="nav-link" href="<?php echo url('kategoris') ?>">Kategori</a></li>
                </u>
                </div>
            </div>
        </div>


        <div class="col-md-8 col-md-offset-">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! <a class="btn btn-primary" href="<?php echo url('blog/homecreate') ?>" style="float: right;">Create</a>
                    <hr>
                    <table border="1" width="100%">
                        <tr>        
                            <td width="10%"><center>No</center></td>
                            <td><center>Title</center></td>
                            <td><center>Deskripsi</center></td>
                            <td><center>Action</center></td>
                        </tr>
                        <!-- pengulangan foreach membuat di mulai dari garis baru <tr> sampai penutupnya </tr> -->
                        @foreach ($blogs as $blog)
                        <tr>
                            <td><center>{{ $blog->id }}</center></td>
                            <td><center>{{ $blog->title }}</center></td>
                            <td><center>{{ $blog->description }}</center></td>
                            <td><center><form action="/blog/{{$blog->id}}" method="post"><a class="btn btn-success btn-md" href="/blog/{{$blog->id}}/homeedit">Update</a>&nbsp;
                              <input class="btn btn-danger btn-md" onclick="return hapus()" type="submit" name="submit" value="delete">
                              {{ csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE">
                            </form>
                            
                        </tr>@endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
