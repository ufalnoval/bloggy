<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://pingendo.github.io/templates/blank/theme.css" type="text/css"> </head>
    <script type="text/javascript" href="js/notify1.js"></script>
    <script type="text/javascript" href="js/notify.js"></script>
    <script type="text/javascript" href="js/notify.min.js"></script>
    <script src={{URL::to("css/sweetalert-master/dist/sweetalert.min.js")}}></script>
    <link rel="stylesheet" type="text/css" href={{URL::to("css/sweetalert-master/dist/sweetalert.css")}}>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-faded">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="display-1">Coba Blog</h1>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </header>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            @yield('content')
          </div>
          <div class="col-md-1 offset-md-1">
            <div style="width:1px; height:100%; background-color:grey"></div></div>
            <div class="col-md-4 ">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="<?php echo url('blog/kategorihome') ?>" class="active nav-link">&nbsp;Kategori</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url('blog/katamutiara') ?>">Coretan Mutiara</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo url('blog/katapuisi') ?>" class="nav-link">Coreatn Puisi</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo url('blog/katakisah') ?>" class="nav-link">Coretan Kisah</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <center></center>
      <footer>
        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <hr class="">
              </div>
            </div>
          </div>
        </div>
        <div class="py-5 bg-primary text-center">
          <div class="container">
            <div class="row">
              <div class="col-4">
                <a><i class="fa fa-5x fa-fw fa-facebook text-white"></i></a>
              </div>
              <div class="col-4">
                <a><i class="fa fa-5x fa-fw fa-twitter text-white"></i></a>
              </div>
              <div class="col-4">
                <a><i class="fa fa-5x fa-fw fa-instagram text-white"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-faded py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1 class=" pi-item">COMPANY</h1>
                <p>
                  <strong>Company name, Inc.</strong>
                  <br>795 Folsom Ave, Suite 600
                  <br>San Francisco, CA 94107
                  <br>
                <abbr title="Phone">P:</abbr>(123) 456-7890
              </p>
            </div>
            <div class="col-md-6">
              <h1 class="pi-item">CONTACT</h1>
              <form>
                <fieldset class="form-group">
                  <label for="exampleInputEmail1">Your name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your name">
                </fieldset>
                <fieldset class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
      <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
    </footer>
  </body>
</html>