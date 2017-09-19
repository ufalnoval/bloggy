@extends('layouts.master')
@section('title')
@endsection
@section('content')
<p><center><u>Welcome To our Blog</u></center></p>
<p><a href="/blog">Back</a></p>
<center>
<div class="col-md-6 ">
	<img src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" class="img-fluid">
</div></center>
<h2><center>{{ $blog->title }}</center></h2>
<center>{{ $blog->description }}</center>

<hr>
<p>
</p>
@endsection