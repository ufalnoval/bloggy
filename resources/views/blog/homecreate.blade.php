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
                        Create New Blog Here!
                        <hr>
                        <div class="col-md-12">
                            <div class="form-group">
                                <form class="form-horizontal" method="POST" action="/blog">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input id="title" type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Enter Title">
                                            @if($errors->has('title'))
                                            <p>{{ $errors->first('title') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input id="description" type="text" name="description" class="form-control" placeholder="Description">
                                            {{old('description')}}
                                            @if($errors->has('description'))
                                            <p>{{ $errors->first('description') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input id="gambar" type="text" name="gambar" class="form-control" value="{{old('gambar')}}" placeholder="Enter Text">
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