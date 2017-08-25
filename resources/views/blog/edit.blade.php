@extends('layouts.master')
@section('title','Blog Sekolah Gua')
@section('content')
<script>
function success(){
swal("Edited!", "The Item Edited!", "success")
};
</script>
<h2>Edit Di Blog Ini</h2>
<form action="/blog/{{$blog->id}}" method="post">
	<input type="text" name="title" value="{{$blog->title}}"><br>
	<textarea name="description" rows="8" cols="80">{{$blog->description}}</textarea><br>
	<input type="submit" onclick="return success()" name="submit" value="edit">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
</form>
@endsection