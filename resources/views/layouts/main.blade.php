<!DOCTYPE html>
<html>
	<head>
 		<title> @yield('title')</title>
  		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
  		<meta name="viewport" content="width=device-width, initial-scale=1"
>  		<link rel="stylesheet" href="{{url('/').'/bootstrap-4/css/bootstrap.min.css'}}">
  		<script src="{{url('/'). '/bootstrap-4/js/jquery.js'}}"></script>
  		<script src="{{url('/'). '/bootstrap-4/js/bootstrap.min.js'}}"></script>
          <link rel="stylesheet" href="/style.css">
    </head>

    <body>
        <div class="container-fluid mainleft">
            <div class="row">
            <!-- images here carousel -->
            @yield('left-pane')
               
               

                <!-- forms here -->
                <div class="col-md-6">
                    <!-- yield the body -->
                    @yield('body')
                </div>
            </div>
        </div>
    </body>
</html>