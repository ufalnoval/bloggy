@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
<div class="col-md-2 col-md-offset-">
            <div class="panel panel-default">
                <div class="panel-heading">Menu Navigation</div>

                <div class="panel-body">
                <u>
                    <li><a class="nav-link" href="<?php echo url('home') ?>">Blog</a></li>
                    <li><a class="nav-link" href="<?php echo url('user') ?>">Users</a></li>
                    <li><a class="nav-link" href="<?php echo url('kategoris') ?>">Kategori</a></li>
                </u>
                </div>
            </div>
        </div>


        <div class="col-md-8 col-md-offset-">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! <a class="btn btn-primary"  href="<?php echo url('user/usercreate') ?>" style="float: right;">Create</a>
                    <hr>
                    <table border="1" width="100%">
                        <tr>
                            <td width="10%"><center>No</center></td>
                            <td><center>Nama</center></td>
                            <td><center>email</center></td>
                            <td><center>Action</center></td>
                        </tr>
                        <!-- pengulangan foreach membuat di mulai dari garis baru <tr> sampai penutupnya </tr> -->
                        @foreach ($users as $user)
                        <tr>
                            <td><center>{{ $user->id }}</center></td>
                            <td><center>{{ $user->name }}</center></td>
                            <td><center>{{ $user->email }}</center></td>
                            <td><center><form action="/user/{{$user->id}}" method="post"><a class="btn btn-success btn-md" href="/user/{{$user->id}}/useredit">Update</a>&nbsp;
                            <input class="btn btn-danger btn-md" onclick="return hapus()" type="submit" name="submit" value="delete">
                              {{ csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
