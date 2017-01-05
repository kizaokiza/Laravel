@extends('layouts.bootstrap')


@section('header')
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Home</a></li>
            <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#about">About</a></li>
            <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#contact">Contact</a></li>
            <li class="dropdown">
              <a href="http://localhost/laravel/public/custom#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Action</a></li>
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Another action</a></li>
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">Separated link</a></li>
                <li><a href="http://getbootstrap.com/examples/sticky-footer-navbar/#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 @section('header')   
@section('content')
       

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
      </div>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
      <p>Back to <a href="http://getbootstrap.com/examples/sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

@endsection