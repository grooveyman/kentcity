@extends('layouts.details')
@section('title','CHURCH DATABASE')
@section('header', 'VIEW MEMBERS')
@section('body')

<style type="text/css">
	.profile-layout{
		box-shadow: 0px 1px 2px rgba(0,0,0,0.23);
		padding: 10px;
		margin-bottom: 10px;
	}
	img{
		padding: 0 !important;
		border-radius: 10px	}
</style>


	<div class="row" style="padding: 10px">
		@foreach($members as $member)
		<div class="col-md-6">
			<div class="row profile-layout">
				<div class="col-md-4"><img src="{{asset('storage/imagesProfile/'.$member->pic)}}" width="100px" height="100px"></div>
				<div class="col-md-8">
					<p><strong style="text-transform: uppercase;">{{$member->surname}}</strong>, {{$member->firstname}}</p>
					<p>{{$member->contact}} <br> {{$member->residence}}</p>
				</div>
			
			</div>

		</div>
		@endforeach
	</div>
	

@endsection