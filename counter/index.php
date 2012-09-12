<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!doctype html>
<html class="no-js" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	
  	<?php 
  		$title = "Animating numbers with TweenMax";
  		$desc = "Example of using getters and setters in TweenMax to animate a number";
  		$img_url = "Simple example using TweenMax | Ahrengot.com";
  		
  		$tutorial_url = 'http://ahrengot.com/tutorials/';
  		$url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  	?>
	
	<meta name="description" content="<?= $desc; ?>">
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
  	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- Required Open Graph tags -->
	<meta property="og:title" content="<?= $title; ?> | Ahrengot.com"/>
	<meta property="og:description" content="<?= $description; ?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="<?= $url; ?>"/>
	<meta property="og:locale" content="en_US"/>
	<meta property="og:image" content="<?= $img_url; ?>"/>
	
  	<title><?= $title; ?> | Ahrengot.com</title>
  
  	<link rel="stylesheet" href="../styles/css/reset.css">
  	<style type="text/css">
  		#container > header, #main { width: 80%; margin: 110px auto; }

		.number { 
			text-rendering: optimizeLegibility;
			font: bold 15em/0.8 'Cochin', serif; 
			letter-spacing: -8px; 
			color: #5ed9ef; 
			margin: 10px 0;
		}

		form { margin: 25px 0 0; }
  	</style>
</head>

<body>

	<div id="container">
		<footer id="site-header" class="clearfix">
			<section class="inner-footer">
				<a href="http://ahrengot.com/" title="Go to my Website (Opens in a new window)" target="_blank"><img src="http://ahrengot.com/wp-content/themes/ahrengot-dev/library/img/ahrengot-logo.png" width="204" height="59" alt="Jens Ahrengot Boddum" style="margin-left: -10px;" /></a>
				<a id="back-to-tutorial" class="right" href="<?= $tutorial_url; ?>" target="_self">Back to tutorial</a>
			</section>
		</footer>
		<div id="main" role="main">
			<header>
				<h1><?= $title; ?></h1>
			</header>

			<section id="canvas">
				<p class="number"></p>
				<form action="" id="number-input">
					<input type="number" value="2500">	
					<button id="animate">Animate</button>
				</form>
			</section>
		</div>
		<footer id="site-footer" class="clearfix">
			<section class="inner-footer">
				<p>My name is Jens Ahrengot Boddum and I am a freelance designer and developer. <a href="http://ahrengot.com/work" target="_blank">Here's my portfolio.</a></p>
			</section>
		</footer>
	</div> <!-- eo #container -->


  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.js"></script>
  	<script>window.jQuery || document.write("<script src='js/libs/jquery-1.8.1.min.js'>\x3C/script>")</script>
  	<script src="../js/libs/gs/TweenMax.min.js"></script>

	<script type="text/javascript">
		var $text	= $('p.number'),
			$input	= $('input[type=number]'),
			endVal	= 0,
			currVal	= 0,
			obj		= {};
			

		obj.getTextVal = function() {
			return parseInt(currVal, 10);
		};

		obj.setTextVal = function(val) {
			currVal = parseInt(val, 10);
			$text.text(currVal);
		};

		obj.setTextVal(0);

		var animate = function(e) {
			e.preventDefault();
			currVal = 0; // Reset this every time
			endVal = $input.val();
			
			TweenLite.to(obj, 7, {setTextVal: endVal, ease: Power2.easeInOut});
		};

		$('#number-input').on('submit', animate);
	</script>
</body>
</html>