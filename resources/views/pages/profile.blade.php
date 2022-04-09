@extends('layouts.admin')
@section('title','CHURCH DATABASE')
@section('header', 'VIEW MEMBERS')
@section('body')

<style type="text/css">
	.profile-layout{
		box-shadow: 1px 2px 3px rgba(0,0,0,0.33);
		padding: 10px;
		margin-bottom: 10px;
	}
	img{
		min-height: 70% !important;
		width: 70%;
		height: 100%;
		padding: 0 !important;
		border-radius: 10px;
		}
		span{
			background-color: yellowgreen;
			padding: 10px;
		}

	.overlay{
    display: inline-block;
    margin-top: 50px;
    position: absolute;
    top:inherit;
    bottom: 0;
    left: 0;
    right: 0;
    height: 5em;
    width: 5em;
    opacity: 0;
    transition: .5s ease;
    background-color: violet;
}

.vote-btn{
    color: white;
    font-size: 150px;
    position: absolute;
    padding: 50px !important;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
}
.image{
	 display: block;
    z-index: 1000;
	
}
.image:hover .overlay{
    display: inline-block;
    z-index: 1000;
    margin-top: 50px;
    opacity: 0.7;
    height: 100%;
    width: 100%;   
     
}

.profile-layout{
    animation: transitionIn 0.5s;
}
@keyframes transitionIn {
    from {
      opacity: 0;
      transform: translateX(-100px);
  
    }
  
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }



</style>

	<p style="background-color: yellowgreen; padding: 20px"><strong>{{$members_count}}</strong> members Recorded</p>
	<div class="row" style="padding: 5px; margin-top: 5px">
		@foreach($members as $member)

		<div class="col-md-4 profile-layout" style="margin-top: 30px; margin-left: 0px">
			<div class="row hover">
				<div class="col-md-12 image">
					<img src="{{asset('storage/imagesProfile/'.$member->pic)}}">
					<div class="overlay">
                        <div class="vote-btn">
                            <!-- <form method="" action=""> -->
                                {{csrf_field()}}
                                <a href="/edit/{{$member->id}}"><input type="submit" name="edit" class="btn btn-success" value="Edit"/> </a>
                            <!-- </form> -->
                        </div>
                        
                    </div>
				</div>
			</div>
			<div class="row hover">
				<div class="col-md-12">
					<p><strong style="text-transform: uppercase;">{{$member->surname}}</strong>, {{$member->firstname}}</p>
					<p><span>{{$member->contact}}</span></p> <p> {{$member->residence}}</p>
				</div>
			</div>

		</div>
		@endforeach
		<div class="row">
			<div class="d-flex justify-content-center">
        	{!! $members->links('pagination::bootstrap-4') !!}
        </div>
		</div>
		
	</div>
	

@endsection