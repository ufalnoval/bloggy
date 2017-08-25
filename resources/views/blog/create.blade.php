@extends('layouts.master')
@section('title','Blog Fadhil')
@section('content')
<script>
function success(){
swal("Created!", "The Item Created!", "success")
};
</script>
<center><h2>Create Di Blog Ini</h2></center>
<div class="py-5"><div class="container"><div class="row"><div class="col-md-12">
  <div class="form-group">
    <label>Masukan Judul</label>
    <form action="/blog" method="post">
      <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Masukan Judul">
      @if($errors->has('title'))
      <p>{{ $errors->first('title') }}</p>
      @endif
    </div>
    <div class="form-group">
      <label>Isi Blog</label>
      <textarea name="description" rows="8" cols="80" class="form-control">
      {{old('description')}}
      </textarea>
      @if($errors->has('description'))
      <p>{{ $errors->first('description') }}</p>
      @endif
      <br>
      <input type="text" name="gambar" value="{{old('gambar')}}">
      <br>
      <input class="success" onclick="success()"  type="submit" name="submit" value="Create">
      {{ csrf_field() }}
    </form></div></div></div></div>
    @endsection