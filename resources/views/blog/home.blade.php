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
    <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg">
        </div>
        <div class="col-md-1 offset-md-1">
        <div style="width:1px; height:500px; background-color:black"></div></div>
        <div class="col-md-4 ">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="#" class="active nav-link"><i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Item</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Item</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h1 class="text-primary">{{ $blog->title }}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="lead">{{ $blog->description }}</p>
          <a class="btn btn-primary" href="#">Read more <i class="fa fa-check fa-fw"></i></a>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
@endforeach

@endsection
