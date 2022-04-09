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
    
    <!-- navbar -->
    <div class="header bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{url('/').'/images/cacilogotrans.png'}}" width="70px" height="70px">
            </div>
            <div class="col-6 text-right">
                000 000 0000
            </div>
        </div>
        <!--/row-->
    </div>
  </div>
    <!--container-->

<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">CACI KENT-CITY</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
  @yield('body')
   <!--/row-->
</div>

    <!-- end of navbar -->

    <!-- <div class="container-fluid">
      
    </div> -->
    </body>
</html>