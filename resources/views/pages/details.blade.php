@extends('layouts.details')
@section('title','KENT CITY | Details ')
@section('body')

<style type="text/css">
	.topDetails{
		background-color: royalblue;
	}
	 .img{
		/*border: 3px solid #fff;*/
			
	}
	img{
		border: 2px solid #fff;
	}
	.mem-surname{
		margin-top: 100px !important;
		padding: 20px;
		color: white;
		font-weight: bold;
		font-family: 'Gotham Black';
		font-size: 30px;
	}
	.mem-name{
		color: white;
		margin-left: -20px;
	}

	.col-3 > p{
		color: white;
		opacity: 0.6;
		padding: 0;
		margin:-7px;
	}
	.name > p{
		color: yellow;
	}
	.gender-details{
		background-color: rgb(243, 216, 182);
		padding: 7px;
	}
</style>

<div class="col-md-12">
	<div class="jumbotron topDetails">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<img src="{{asset('storage/imagesProfile/'.$members->pic)}}" class="rounded" width="250px" height="200px">
					
				</div>
				<div class="col-md-4">
					
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<span class="mem-surname">{{$members->surname}},</span> <span class="mem-name">{{$members->firstname}} {{$members->othernames}}</span>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
	</div>

<!--  row1 -->
	<div class="row" style="margin-top: 100px;">
		<div class="col-md-3">
			<h5>Gender</h5>
			<span class="gender-details">{{$members->gender}}</span>
		</div>
		<div class="col-md-3">
			<h5>Birthday</h5>
			<p>{{$members->birthday}}</p>
		</div>
		<div class="col-md-3">
			<h5>Home Town</h5>
			<p>{{$members->hometown}}</p>
		</div>
		<div class="col-md-3">
			<h5>Home Town Region</h5>
			<p>{{$members->region->name}}</p>
		</div>
	</div>

	<!-- row2 -->
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-3">
			<h5>Residence</h5>
			<p>{{$members->residence}}</p>
		</div>
		<div class="col-md-3">
			<h5>Contact</h5>
			<p>{{$members->contact}}</p>
		</div>
		<div class="col-md-3">
			<h5>Marital Status</h5>
			<p>{{$members->marital_status}}</p>
		</div>
		<div class="col-md-3">
			<h5>Spouse Name</h5>
			<p>{{$members->spouse_name}}</p>
		</div>
	</div>


	<!-- row3 -->
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-3">
			<h5>Educational Level</h5>
			<p>{{$members->edu_level}}</p>
		</div>
		<div class="col-md-3">
			<h5>Profession</h5>
			<p>{{$members->profession}}</p>
		</div>
		<div class="col-md-3">
			<h5>Father's Name</h5>
			<p>{{$members->father_name}}</p>
		</div>
		<div class="col-md-3">
			<?php
				if($members->father_status == '1'){
				?>	
				<h5>Father's Status</h5>
				<p>Alive</p>
			<?php }else { ?>

			 	<h5>Father's Status</h5>
				<p>Deceased</p>
			<?php }?>
			
		</div>
	</div>

	<!-- row4 -->
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-3">
			<h5>Father's Contact</h5>
			<p>{{$members->father_contact}}</p>
		</div>
		<div class="col-md-3">
			<h5>Mother's Name</h5>
			<p>{{$members->mother_name}}</p>
		</div>
		<div class="col-md-3">
			<?php
				if($members->mother_status == '1'){
				?>	
				<h5>Mother's Status</h5>
				<p>Alive</p>
			<?php }else { ?>

			 	<h5>Mother's Status</h5>
				<p>Deceased</p>
			<?php }?>
		</div>
		<div class="col-md-3">
			<h5>Mother's Contact</h5>
			<p>{{$members->mother_contact}}</p>
		</div>
	</div>

	<!-- row5 -->
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-3">
			<h5>Place of Baptism</h5>
			<p>{{$members->place_of_baptism}}</p>
		</div>
		<div class="col-md-3">
			<h5>Method of Baptism</h5>
			<p>{{$members->method_of_baptism}}</p>
		</div>
		<div class="col-md-3">
			<h5>Role in Church</h5>
			<p>{{$members->role->name}}</p>
		</div>

		<div>
			<a href="{{route('finish')}}"><button class="btn btn-success">Confirm</button></a>
			<a href="/edit/{{$members->id}}"><button class="btn btn-primary">Edit</button></a>
		</div>
		
	</div>

	


</div>



 @endsection
