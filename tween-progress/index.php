<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!doctype html>
<html class="no-js" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	
  	<?php 
  		$title = "Controlling the playhead of your animations";
  		$desc = "Example of animating a TimelineLite's 'playhead' which will update all child animations on the fly";
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
  
  	<link rel="stylesheet" href="styles/css/reset.css">
  	<style type="text/css">
  		#container > header, #main { width: 80%; margin: 100px auto 0; }

		.text { 
			text-rendering: optimizeLegibility;
			letter-spacing: -12px; 
			font: bold 20em/1 sans-serif; 
			margin: 0;
		}

		@-webkit-keyframes title-glow {
			0% { color: #0d0c11; text-shadow: 0 0 0 rgba(#e4ce2e, 0.3); }
			25% { color: #0d0c11; }
			50% { color: #e4ce2e; text-shadow: 0 0 8px rgba(#e4ce2e, 0.3); }
			70% { color: #0d0c11; }
			100% { color: #0d0c11; text-shadow: 0 0 0 rgba(#e4ce2e, 0.3); }
		}

		.text span {
			-webkit-animation: title-glow 2.5s ease-in-out infinite;
			position: relative;
			display: inline-block;
		}

		.text span:nth-child(1) { -webkit-animation-delay: 0; }
		.text span:nth-child(2) { -webkit-animation-delay: 0.1s; }
		.text span:nth-child(3) { -webkit-animation-delay: 0.2s; }
		.text span:nth-child(4) { -webkit-animation-delay: 0.3s; }
		.text span:nth-child(5) { -webkit-animation-delay: 0.4s; }
		.text span:nth-child(6) { -webkit-animation-delay: 0.5s; }
		.text span:nth-child(7) { -webkit-animation-delay: 0.6s; }
		.text span:nth-child(8) { -webkit-animation-delay: 0.7s; }
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
				<p>Move you mouse from left to right</p>
			</header>

			<section id="canvas">
				<p class="text">
					<span>W</span><span>o</span><span>o</span><span>o</span><span>o</span><span>t</span><span>!</span><span>!</span>
				</p>
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
  	<script src="js/libs/gs/TweenMax.min.js"></script>

	<script type="text/javascript">
		var $letters	= $('.text span'),
			tl			= new TimelineMax({paused: true});
		
		tl.staggerFrom($letters, 1.5, {
			css: {alpha: 0, top: "-300", scale: 0, rotation: -20}, 
			ease: Elastic.easeOut
		}, 0.2);
		
		$(window).on('mousemove', function(e) {
			var prog = e.pageX / window.innerWidth;
			tl.progress(prog);
		});
	</script>
</body>
</html>