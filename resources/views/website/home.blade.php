@extends('layouts.website')
@section('title','CACI | KENT CITY')
@section('body')


<div class="row">
	<div id="parallax">
		a little info will get here
	</div>

</div>
<div class="row second">
	<div class="row">
			<div class="col-md-6 left">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <br><span class="more-btn">Learn More</span> </p>

			</div>
		<div class="col-md-6 right">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <br><span class="more-btn">Learn More</span> </p>
		</div>
	</div>
	
</div>


<div class="row">
	<div id="parallax-2">
		a little info will get here
	</div>

</div>

<div class="third">
	<div class="row">
		<!-- end of month prayers -->
		<div class="col-md-4">
     		<div class="events-outline">
     			<span class="num-journal">1.</span>
     			<div>
     				<div class="image-prayer">
     				</div>
     				<div style="padding: 10px 30px 10px 30px;">
     					<h5>End of Month Prayers </h5>
	     				<p style="color: grey">
	     					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <br><span class="more-btn">Learn More</span> </p>
	     				</p>
	     				<p></p>
     				</div>
     				
     			</div>
     		</div>
     	</div>

     	<!-- sunday service -->
     	<div class="col-md-4">
     		<div class="events-outline2">
     			<span class="num-journal">2.</span>
     			<div>
     				<div class="image-prayer">
     				</div>
     				<div style="padding: 10px 30px 10px 30px;">
     					<h5>End of Month Prayers </h5>
	     				<p style="color: grey">
	     					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <br><span class="more-btn">Learn More</span> </p>
	     				</p>
	     				<p></p>
     				</div>
     				
     			</div>
     		</div>
     	</div>

     	<!-- midweek -->
     	<div class="col-md-4">
     		<div class="events-outline3">
     			<span class="num-journal">3.</span>
     			<div>
     				<div class="image-prayer">
     				</div>
     				<div style="padding: 10px 30px 10px 30px;">
     					<h5>End of Month Prayers </h5>
	     				<p style="color: grey">
	     					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. <br><span class="more-btn">Learn More</span> </p>
	     				</p>
	     				<p></p>
     				</div>
     				
     			</div>
     		</div>
     	</div>
	</div>
</div>

<div class="square" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation="fade-in-up" data-mdb-animation-reset="true" style="animation-duration: 500ms;">
            
          </div>




<div class="row">
	<div class="fourth" style="margin-top: 20px;">
		<p class="moria">OPERATION MOUNT MORIA</p>
		<p style="padding: 0px 0px 0px 20px; color: white; margin-top: -25px; width: 30%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br><span class="more-btn">Learn More</span></p>
	</div>
</div>

<div class="footer bg-light stick-top" style="color: maroon">
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://mdbootstrap.com/"> cacikent-city</a>
  </div>
</div>

<style type="text/css">
	.slideRight {
    visibility: visible;
    animation-name: slideRight;
    -webkit-animation-name: slideRight;
    animation-duration: 0.5s;
    -webkit-animation-duration: 0.5s;
    animation-timing-function: ease-in-out;
    -webkit-animation-timing-function: ease-in-out; 
}

	.slideRight2 {
    visibility: visible;
    animation-name: slideRight;
    -webkit-animation-name: slideRight;
    animation-duration: 1.5s;
    -webkit-animation-duration: 1.5s;
    animation-timing-function: ease-in-out;
    -webkit-animation-timing-function: ease-in-out; 
}

	.slideRight3 {
    visibility: visible;
    animation-name: slideRight;
    -webkit-animation-name: slideRight;
    animation-duration: 2.5s;
    -webkit-animation-duration: 2.5s;
    animation-timing-function: ease-in-out;
    -webkit-animation-timing-function: ease-in-out; 
}
@keyframes slideRight {
    0% {
        transform: translateX(-150%);
    }
    50% {
        transform: translateX(8%);
    }
    65% {
        transform: translateX(-4%);
    }
    80% {
        transform: translateX(4%);
    }
    95% {
        transform: translateX(-2%);
    }
    100% {
        transform: translateX(0%);
    }
}
@-webkit-keyframes slideRight {
    0% {
        -webkit-transform: translateX(-150%);
    }
    50% {
        -webkit-transform: translateX(8%);
    }
    65% {
        -webkit-transform: translateX(-4%);
    }
    80% {
        -webkit-transform: translateX(4%);
    }
    95% {
        -webkit-transform: translateX(-2%);
    }
    100% {
        -webkit-transform: translateX(0%);
    }
}
</style>

<script type="text/javascript">
    
    
	const parallax = document.getElementById("parallax");

	window.addEventListener("scroll", function(){
		let offset = window.pageYOffset;
		parallax.style.backgroundPositionY = offset * 0.7 + "px";
	});

	$(window).on('scroll' , function(){
    scroll_pos = $(window).scrollTop() + $(window).height();
    element_pos = $('.events-outline').offset().top + $('.events-outline').height() ;
    if (scroll_pos > element_pos) {
        $('.events-outline').addClass('transitionIn');
    };

});


$(window).scroll(function () {
    $('.events-outline').each(function () {
        var imagePos = $(this).offset().top;
        var imageHeight = $(this).height();
        var topOfWindow = $(window).scrollTop();

        if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
            $(this).addClass("slideRight");
        } else {
            $(this).removeClass("slideRight");
        }
    });

    $('.events-outline2').each(function () {
        var imagePos = $(this).offset().top;
        var imageHeight = $(this).height();
        var topOfWindow = $(window).scrollTop();

        if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
            $(this).addClass("slideRight2");
        } else {
            $(this).removeClass("slideRight2");
        }
    });

    $('.events-outline3').each(function () {
        var imagePos = $(this).offset().top;
        var imageHeight = $(this).height();
        var topOfWindow = $(window).scrollTop();

        if (imagePos < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
            $(this).addClass("slideRight3");
        } else {
            $(this).removeClass("slideRight3");
        }
    });


});
</script>
@endsection