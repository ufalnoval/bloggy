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
        <label></label>
        <form action="/blog" method="post">
        <input type="text" name="nama" class="form-control" value="{{old('nama')}}" placeholder="Masukan Kategori">
      </div>
     	<input class="success"  type="submit" name="submit" value="Create">

	{{ csrf_field() }}
    </form></div></div></div></div>

@endsection
