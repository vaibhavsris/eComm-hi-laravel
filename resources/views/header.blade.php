<?php 
// import productController for count of CartItem
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
  $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">E-Commerce</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><i class="fa fa-lg fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="#">Orders</a></li>
          
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="Search">
          </div>
          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <ul class="nav navbar-nav navbar-right">          
          @if (Session::has('user'))
          <li><a href="/cartlist"><i class="fa fa-lg fa-shopping-cart" aria-hidden="true"></i>Add to Cart({{ $total}})</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>              
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>