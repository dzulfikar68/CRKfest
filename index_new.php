<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Full Width Image Slider</title>
		<meta name="description" content="Blueprint: " />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/new.css" />
		<script src="assets/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">	
			<header class="clearfix">
				<span>Blueprint</span>
				<h1>Full Width Image Slider</h1>
				<nav>
					<a href="http://tympanus.net/Blueprints/ElasticContentSlider/" class="icon-arrow-left" data-info="previous Blueprint">Previous Blueprint</a>
					<a href="http://tympanus.net/codrops/?p=13665" class="icon-drop" data-info="back to the Codrops article">back to the Codrops article</a>
				</nav>
			</header>
			<div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li>
						<div class="content_box">
						</div>
					</li>
					<li></li>
					<li><a href="#"><img src="images/3.jpg" alt="img03"/></a></li>
					<li><a href="#"><img src="images/4.jpg" alt="img04"/></a></li>
					<li><a href="#"><img src="images/5.jpg" alt="img05"/></a></li>
				</ul>
			</div>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.cbpFWSlider.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );
		</script>
	</body>
</html>