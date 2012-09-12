<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DiTec</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet"
	type="text/css" />
<link href="lib/css/basic-style.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.js"></script>
<script src="lib/bootstrap/js/bootstrap-transition.js"></script>
<script src="lib/bootstrap/js/bootstrap-collapse.js"></script>
<script src="js/controllers.js"></script>
</head>

<body style="background-color: #f0eded;">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="brand" href="./index.php">DiTec</a>
				<div class="nav-collapse expand">
					<ul class="nav">
						<li class="active" class=""><a href="#myCarousel">Home</a></li>
						<li class=""><a href="#about">About</a></li>
						<li class=""><a href="#ourmessage">Our Message</a></li>
						<li class=""><a href="#tools">Tools</a></li>
					</ul>
					<a href="#"><img src="images/Twitteroff.png" width="35"
						height="40" class="pull-right" /></a> <a href="#"><img
						src="images/Facebookoff.png" width="35" height="40"
						class="pull-right" /></a>
				</div>
				
				
			</div>
		</div>
	</div>
	
	
	<!-- Error/Success form -->
	<?php 
		if(isset($_GET["result"])){
			if($_GET["result"] == "error"){
				echo '<div style="position:absolute;top: 160;left:600; z-index:200" class="alert alert-error" id="result" >
							Debe ingresar un mail válido
					  </div>';
			}else{
				echo '<div style="position:absolute;top: 160;left:600; z-index:200" class="alert alert-success" id="result">
							El mail se ha registrado correctamente
					  </div>
					';
			}
		}
	?>
	
	

	<!-- Logo -->
	<br />
	<br />
	<div class="row absolute">
		<div class="span14">
			<div class="row-fluid" style="position: absolute; z-index: 100;">
				<div class="span4"></div>
				<div class="span4" align="center">
					<img src="images/Logo.png" width="412" height="129" />
				</div>
				<div class="span4"></div>
			</div>
		</div>
	</div>
	
	<!-- Mail Form -->
	<div class="row absolute">
		<div class="span14">
			<div class="row-fluid"
				style="position: absolute; z-index: 100; position: absolute; top: 400;">
				<div class="span4"></div>
				<div class="span4" align="center">
					<form class="form" action="php/mail.php" method="post">
						<input type="text" name="mail"
							placeholder="Para más información, complete su mail"
							style="height: 50px; text-align: center; width: 500; font-size: 14pt; opacity: 0.7;"
							class="search-query input-large">
					</form>
				</div>
				<div class="span4"></div>
			</div>
		</div>
	</div>



	<!-- Carousel -->
	<div class="bs-docs-example">
		<div id="myCarousel" class="carousel slide" align="center">
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/carousel/carousel0.png" alt=""
						width="1500" height="550">>
				</div>
				<div class="item">
					<img src="images/carousel/carousel2.png" alt=""
						width="1500" height="550">>
				</div>
				<div class="item ">
					<img src="images/carousel/carousel1.png" alt=""
						width="1500" height="550">
				</div>
				<div class="item">
					<img src="images/carousel/carousel3.png" alt=""
						width="1500" height="550">>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel"
				data-slide="next">›</a>
		</div>
	</div>

	<br />
	<br />

	<hr />

	<br />
	<br />
	<br />

	<div id="about" align="center">
		<h1>About</h1>
		<iframe
			src="http://player.vimeo.com/video/44658040?title=0&amp;portrait=0&amp;color=ffffff"
			width="1000" height="562" frameborder="0" webkitAllowFullScreen
			mozallowfullscreen allowFullScreen></iframe>
		<p>
			<a href="http://vimeo.com/44658040">The Future is Ours</a> from <a
				href="http://vimeo.com/michaelmarantz">Michael Marantz</a> on <a
				href="http://vimeo.com">Vimeo</a>.
		</p>
	</div>
	<br />
	<br />
	<br />

	<hr />

	<br />
	<br />
	<br />
	<br />
	<div id="ourmessage" align="center">
		<h1>Our Message</h1>
	</div>

	<br />
	<br />
	<br />

	<hr />

	<br />
	<br />
	<br />
	<br />
	<div id="tools" align="center">
		<h1>Tools</h1>
	</div>

</body>
<script type="text/javascript">
	$(document).ready(function() {
		$(".contactLink").click(function() {
			if ($("#contactForm").is(":hidden")) {
				$("#contactForm").slideDown("slow");
			} else {
				$("#contactForm").slideUp("slow");
			}
		});
	});
	function closeForm() {
		$("#messageSent").show("slow");
		setTimeout('$("#messageSent").hide();$("#contactForm").slideUp("slow")', 2000);
	}

	$(document).ready(
			function() {
				function filterPath(string) {
					return string.replace(/^\//, '').replace(/(index|default).[a-zA-Z]{3,4}$/, '')
							.replace(/\/$/, '');
				}
				$('a[href*=#]').each(
						function() {
							if (filterPath(location.pathname) == filterPath(this.pathname)
									&& location.hostname == this.hostname && this.hash.replace(/#/, '')) {
								var $targetId = $(this.hash), $targetAnchor = $('[name='
										+ this.hash.slice(1) + ']');
								var $target = $targetId.length ? $targetId
										: $targetAnchor.length ? $targetAnchor : false;
								if ($target) {
									var targetOffset = $target.offset().top;
									$(this).click(function() {
										$('html, body').animate({
											scrollTop : targetOffset
										}, 1000);
										var d = document.createElement("div");
										d.style.height = "101%";
										d.style.overflow = "hidden";
										document.body.appendChild(d);
										window.scrollTo(0, scrollToM);
										setTimeout(function() {
											d.parentNode.removeChild(d);
										}, 10);
										return false;
									});
								}
							}
						});
			});
	/*! Smooth Scroll - v1.4.5 - 2012-07-22
	 * Copyright (c) 2012 Karl Swedberg; Licensed MIT, GPL */

	 
</script>


</html>