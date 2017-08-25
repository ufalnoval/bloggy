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
                    Update User Here!
                    <hr>
                    <form action="/user/{{$user->id}}" method="post">
                        <input type="text" name="name" value="{{$user->name}}"><br>
                        <textarea name="email" rows="8" cols="80">{{$user->email}}</textarea><br>
                        <input type="submit" onclick="return success()" name="submit" value="edit">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection