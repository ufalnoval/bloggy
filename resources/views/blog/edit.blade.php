@extends('layouts.master')

@section('title','Blog Sekolah Gua')

@section('content')

<h2>Edit Di Blog Ini</h2>
<form action="/blog/{{$blog->id}}" method="post">
	<input type="text" name="title"value="{{$blog->title}}"><br>
	<textarea name="description" rows="8" cols="80">{{$blog->title}}</textarea><br>

	<input type="submit" name="submit" value="edit">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">

</form>
@endsection
