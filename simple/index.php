<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!doctype html>
<html class="no-js" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	
  	<?php 
  		$title = "Simple example using TweenMax";
  		$desc = "Simple example using TweenMax";
  		$img_url = "Simple example using TweenMax | Ahrengot.com";
  		
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
  
  	<link rel="stylesheet" href="styles/css/reset.css">
  	<style type="text/css">
  		#container { width: 80%; margin: auto; }
  	</style>
</head>

<body>

	<div id="container">
		<header>
			<h1><?= $title; ?></h1>
		</header>
		<div id="main" role="main">
			
		</div>
		<footer>
		
		</footer>
	</div> <!-- eo #container -->


  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.js"></script>
  	<script>window.jQuery || document.write("<script src='js/libs/jquery-1.8.1.min.js'>\x3C/script>")</script>
  	<script src="js/libs/gs/TweenMax.min.js"></script>

	<script type="text/javascript">
		$(function() {
			log('DOM Ready ...');
		});
	</script>
</body>
</html>