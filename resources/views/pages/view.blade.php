@extends('layouts.admin')
@section('title','CHURCH DATABASE')
@section('header', 'VIEW MEMBERS')
@section('body')


<div class="container">

	<div class="row" style="margin-top: 0px;">
		<!-- search -->
		<div class="navbar-nav ml-auto">
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<form class="">

							<div class="card-body row no-gutters align-items-center">
								<div class="col-auto">
									<i class="fas fa-search h4 text-body"></i>

								</div>
								
								<div class="col">

									<input class="form-control form-control-borderless" id="search" type="text" name="search" placeholder="Search Member" style="border-radius: 50px;">

								</div>
								<div class="col-auto">
									<!-- <button class="btn btn-lg btn-success" type="" style="border-radius: 50px; background:none; border:none"><img src="{{url('/').'/IMAGES/magnify.png'}}"></button> -->
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 col-">
			<div>
				<table class="table  table-responsive-lg table-striped">
					<span>{{$members_count}}</span>
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="">Gender <img src="{{url('/').'/images/person-2x.png'}}"></th>
							<th scope="col">Contact </th>
							<th scope="col">Residence <img src="{{url('/').'/images/home-2x.png'}}"></th>
							<th scope="col">btn</th>
						</tr>
					</thead>
					<tr>
						<tbody id="easybody">
							<?php $count = 0; ?>
							@foreach($members as $member)
							<?php $count++; ?>
							<tr>
								<th scope="row">{{$member->id}}</th>
								<td>{{ strtoupper($member->surname)}} {{$member->firstname}} {{$member->othernames}}</td>
								<td>{{$member->gender}}</td>
								<td>{{$member->contact}}</td>
								<td>{{$member->residence}}</td>
								<td><a href="/edit/{{$member->id}}"><button class="btn btn-primary">Update</button></a></td>
							</tr>
							@endforeach
						</tbody>
					</tr>
					
				</table>
				 <div class="d-flex justify-content-center">
                	{!! $members->links('pagination::bootstrap-4') !!}
                </div>
			</div>
		</div>
	</div>
	
</div>

<script type="text/javascript">

$('body').on('keyup','#search', function(){
	var inpQuery = $(this).val();
	
	$.ajax({
			method: 'POST',
			url: '{{ route("live_search") }}',
			dataType: 'json',
			data: {
				'_token': '{{ csrf_token() }}',
				inpQuery: inpQuery,
			},
			success: function(res){
				var tableRow = '';

				$('#easybody').html('');

				$count = 0;
				$.each(res, function(index, value){
					$count = $count + 1;
					tableRow = '<tr><th scope="row">'+value.id+'</th><td>'+value.surname.toUpperCase()+' '+ value.firstname +' '+ value.othernames+'</td><td>'+value.gender+'</td><td>'+value.contact+'</td><td>'+value.residence+'</td><td><a href="/edit/{{$member->id}}"><button class="btn btn-primary">Update</button></a></td></tr>';
						$('#easybody').append(tableRow);
				});
			}
		});
	}); 
</script>


@endsection