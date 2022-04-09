<!DOCTYPE html>
<html>
<head>
	<title>parallax</title>
	<style type="text/css">
		*{
			border:0;
			padding:0;
			margin:0;
		}

		div{
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: bold;
			width: 100%;
			height: 100vh;
		}
		h2{
			font-size: 60px;
			background: #eee;
			padding: 8px 24px;
			border-radius:  16px;

		}

		div:nth-child(1){
			background-image: url('/images/_MG_9803.jpg');
			background-size: cover;
			/*background-attachment: fixed;*/
		}
		div:nth-child(2){
			background-color: maroon;
		}
		div:nth-child(3){
			height: 400px;
			background-image: url('/images/_MG_0416.jpg');
			background-size: cover;
			background-attachment: fixed;
		}
		div:nth-child(4){
			background-color: aquamarine;
		}
	</style>

	
</head>
<body>
	<div id="parallax"><h2>Div 1</h2></div>
	<div><h2>Div 2</h2></div>
	<div><h2>Div 3</h2></div>
	<div><h2>Div 4</h2></div>

	<script type="text/javascript">
		const parallax = document.getElementById("parallax");

		window.addEventListener("scroll", function(){
			let offset = window.pageYOffset;
			parallax.style.backgroundPositionY = offset * 0.7 + "px";
		});
	</script>
</body>
</html>


