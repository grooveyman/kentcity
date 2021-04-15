@extends('layouts.main')
@section('title','KENT CITY | Education ')
@section('body')

<style type="text/css">
	.thankyou{
		background-color: royalblue;
		opacity: 0.8;
		color: white;
		padding: 50px;
		font-weight: bold;
	}
	.thankyou > p{
		color: gold;
		font-weight: normal;

	}
</style>

@section('left-pane')
 <div class="col-md-6 left-pane1">
                    
 </div>
 @endsection

<div class="row" style="margin-top:20%;">
	<div class="col-md-3"></div>
	<div class="col-md-6 thankyou">
		THANK YOU FOR REGISTERING WITH FAMILY WORSHIP CENTRE KENT CITY
		<p>We are glad you joined us</p>
	</div>
	<div class="col-md-3"></div>
</div>


@endsection