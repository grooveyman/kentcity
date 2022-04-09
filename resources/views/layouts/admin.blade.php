<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title')</title>
        <meta charset="utf-8">
          <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{url('/').'/bootstrap-4/css/bootstrap.min.css'}}">
        <script src="{{url('/'). '/bootstrap-4/js/jquery.js'}}"></script>
        <script src="{{url('/'). '/bootstrap-4/js/bootstrap.min.js'}}"></script>
      <link rel="stylesheet" href="/web_style.css">
    </head>

    <body>

<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">CACI KENT-CITY DATABASE</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/view/profile">Home</a>
                </li>
                
                
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/view">Search</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
      @yield('body')
    </div>
</div>
</body>
</html>

