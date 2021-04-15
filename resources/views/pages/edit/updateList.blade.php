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

<style type="text/css">
	img{
		max-width: 50%;
		max-height: 50%;
		padding: 2px;

	}
</style>

<div class="container">
	

	
		<div class="row">
		<div class="col-md-12">
			<img src="{{asset('storage/imagesProfile/'.$member->pic)}}">
		</div>
		
	</div>
	<!-- personal Details -->
<div style="margin-top: -35%">
	<div class="row" style="margin-bottom: 50px">

		<div class="col-md-6">
			<p><strong>{{$member->surname}}</strong>, {{$member->firstname}} {{$member->othernames}}</p>
			<p><strong>Gender:</strong> {{$member->gender}}</p> {{$member->birthday}}
			<div>
				<a href="/editBioInfo/{{$member->id}}"><button class="btn btn-primary" style="margin-top: 10px">Edit</button></a>
			</div>
		</div>

		<div class="col-md-6">
			<p><strong>Home Town: </strong>{{$member->hometown}}</p>
			<p><strong>Region:</strong> {{$member->region->name}}</p>
			<p><strong>Residence:</strong> {{$member->residence}}</p>
			<p><strong>Contact:</strong> {{$member->contact}}</p>
			<?php if($member->marital_status == 'S'){ ?>
				<p><strong>Marital Status:</strong> Single</p>
			<?php

			 }else { ?>
			 	<p><strong>Marital Status:</strong> Married</p>
			 	<p><strong>Spouse Name:</strong> {{$member->spouse_name}}</p>
			 <?php } ?> 
			
			<div>
				<a href="/editLocationInfo/{{$member->id}}"><button class="btn btn-primary" style="margin-top: 10px">Edit</button></a>
			</div>
		</div>

	</div>

<!-- 
	<div class="row">
		<div class="col-md-6">
			<p><strong>Home Town: </strong>{{$member->hometown}}</p>
			<p><strong>Region:</strong> {{$member->region->name}}</p> {{$member->birthday}}
			<div>
				<a href=""><button class="btn btn-primary" style="margin-top: 10px">Edit</button></a>
			</div>
		</div>
		

	</div> -->

</div>

</div>

</html>

