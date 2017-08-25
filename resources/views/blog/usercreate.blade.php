@extends('layouts.app')
@section('content')
<script>
function success(){
swal("Created!", "The Item Created!", "success")
};
</script>

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
                        Create New Users Here!
                        <hr>
                        <div class="col-md-12">
                            <div class="form-group">
                                <form class="form-horizontal" method="POST" action="/user">
                                        <div class="form-group">
                                            <label for="title">Nama</label>
                                            <input id="title" type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter Name">
                                            @if($errors->has('name'))
                                            <p>{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Email</label>
                                            <input id="description" type="text" name="email" class="form-control" placeholder="Email">
                                            {{old('email')}}
                                            @if($errors->has('email'))
                                            <p>{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Password</label>
                                            <input id="description" type="text" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <input class="btn btn-primary" onclick="success()"  type="submit" name="submit" value="Create">
                                        {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection