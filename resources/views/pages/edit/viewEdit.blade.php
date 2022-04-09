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
          <link rel="stylesheet" href="/style.css">
    </head>

    <style type="text/css">
    	h5{
    		color: grey;
    	}
    </style>

    <body>

    	<div class="container">
    		<div class="row" style="padding: 20px;">
    		<div class="col-md-4">
    			<img src="{{asset('storage/imagesProfile/'.$member->pic)}}" class="rounded-circle" width="250px" height="250px">
    		</div>
    		<div class="col-md-8">
    			<h1><strong><p style="text-align: left; margin-top: 100px;">UPDATE DETAILS BY CATEGORY</p></strong></h1>
    		</div>
    		</div>
    			
    			
    		<hr>

    		<!-- page one -->
    		<div class="row">

    			<div class="col-md-6">
    				<h5>SURNAME</h5>
    				<p>{{$member->surname}}</p>

    				<h5>OTHERNAMES</h5>
    				<p>{{$member->othernames}}</p>

    				<h5>DATE OF BIRTH</h5>
    				<p>{{$member->birthday}}</p>
    			</div>
    			<div class="col-md-6">
    				<h5>FIRSTNAME</h5>
    				<p>{{$member->firstname}}</p>

    				<h5>Gender</h5>
    				<p>{{$member->gender}}</p>

    				<div>
    					<a href="/edit/{{$member->id}}"><button class="btn btn-primary">Update</button></a>
    				</div>
    			</div>
    		</div> <hr>



    		<!-- page two -->
    		<div class="row">
    			<div class="col-md-6">
    				<h5>HOMETOWN .REGION</h5>
    				<p>{{$member->hometown}} . {{$member->region->name}}</p>

    				<h5>CONTACT</h5>
    				<p>{{$member->contact}}</p>

    				<h5>SINGLE/MARRIED</h5>
    				<p></p>
    			</div>
    			<div class="col-md-6">
    				<h5>RESIDENCE</h5>
    				<p>{{$member->residence}}</p>

    				<h5>SPOUSE NAME</h5>
    				<p>{{$member->spouse_name}}</p>

    				<div>
    					<a href="/editOne/{{$member->id}}"><button class="btn btn-primary">Update</button></a>
    				</div>
    			</div>
    		</div> <hr>


    		<!-- page three -->
    		<div class="row">
    			<div class="col-md-6">
    				<h5>EDUCATIONAL LEVEL</h5>
    				<p>{{$member->edu_level}}</p>

    				<h5>FATHER'S NAME . Contact</h5>
    				<p>{{$member->father_name}} . {{$member->father_contact}}</p>

    				<h5>SINGLE/MARRIED</h5>
    				<p></p>
    			</div>
    			<div class="col-md-6">
    				<h5>PROFESSION</h5>
    				<p>{{$member->profession}}</p>

    				<h5>MOTHER'S NAME . Contact</h5>
    				<p>{{$member->mother_name}} . {{$member->mother_contact}}</p>

    				<div>
    					<a href="/editTwo/{{$member->id}}"><button class="btn btn-primary">Update</button></a>
    				</div>
    			</div>
    		</div>
    		<hr>


    		<!-- page four -->
    		<div class="row">
    			<div class="col-md-6">
    				<h5>PLACE OF BAPTISM</h5>
    				<p>{{$member->place_of_baptism}}</p>

    				<h5>METHOD  OF BAPTISM</h5>
    				<p>{{$member->method_of_baptism}}</p>

    				<h5></h5>
    				<p></p>
    			</div>
    			<div class="col-md-6">
    				<h5>ROLE AT CHURCH</h5>
    				<p>{{$member->role->name}}</p>

    				

    				<div>
    					<a href=""><button class="btn btn-primary">Update</button></a>
    				</div>
    			</div>
    		</div>

    	</div>
    	
    </body>


</html>
