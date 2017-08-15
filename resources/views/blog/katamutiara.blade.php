@extends('layouts.master')
@section('title','kepo')
@section('content')
@foreach ($blogs as $blog)
<script>
function hapus(){
swal({
title: "Are you sure?",
text: "You will not be able to recover this imaginary file!",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes, delete it!",
cancelButtonText: "No, cancel plx!",
closeOnConfirm: true,
closeOnCancel: true
},
function(isConfirm){
if (isConfirm) {
swal("Deleted!", "Your imaginary file has been deleted.", "success");
} else {
swal("Cancelled", "Your imaginary file is safe :)", "error");
}
});
};
</script>
<div class="col-md-6 ">
  <img src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" class="img-fluid">
</div>
<div class="row">
  <div class="col-md-6 ">
    <h1 class="text-primary"><center>{{ $blog->title }}</center></h1>
    <p class="lead"><center>{{ $blog->description }}</center></p>
  </div>
</div>
<li>
  <a href="/blog/{{$blog->id}}">read more</a>
</li>
<li>
  <a href="/blog/{{$blog->id}}/edit">Update</a>
</li>
<form action="/blog/{{$blog->id}}" method="post">
  <input onclick="return hapus()" type="submit" name="submit" value="delete">
  {{ csrf_field()}}
  <input type="hidden" name="_method" value="DELETE">
</form><br><hr><br>
@endforeach
@endsection