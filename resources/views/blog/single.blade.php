@extends('layouts.master')

@section('title')
@endsection


@section('content')

<h2>Fadhil single</h2>
<h2>{{ $blog->title }}</h2>
<hr>
<p>
	{{ $blog->description }}
</p>

@endsection
