<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!doctype html>
<html class="no-js" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	
  	<?php 
  		$title = "3D Flip gallery using TweenMax";
  		$desc = "TweenMax example of using a pseudo 3D flipping effect to change images in a gallery";
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
  		#container > header, #main { width: 80%; margin: 100px auto; }

  		body { background: #222; color: white; }

  		.images { position: relative; padding: 0; cursor: pointer; }
  		.images li { list-style: none; }
  		.images li img {
  			position: absolute;
  			top: 0; left: 0;
  			display: none;
  		}
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
				<p>Click images to flip</p>
			</header>

			<section id="canvas">
				<ul class="images">
					<li><img src="img/1.jpg" width="384" height="240"></li>
					<li><img src="img/2.jpg" width="384" height="240"></li>
					<li><img src="img/3.jpg" width="384" height="240"></li>
					<li><img src="img/4.jpg" width="384" height="240"></li>
					<li><img src="img/5.jpg" width="384" height="240"></li>
				</ul>
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
		var $imgWrap	= $('.images'),
			$images		= $imgWrap.find('img'),
			$currImg	= $images.eq(0),
			index		= 0,
			numImgs		= $images.length,
			isAnimating	= false;

		var flip = function(e) {
			if (isAnimating) return; // Ignore click until any current animations are complete.
			
			isAnimating = true;
			index = (index++ >= numImgs - 1) ? 0 : index;

			var randomVal = Math.random() * 14 - 7;  
			var tl = new TimelineLite({
				onComplete: function() {
					$currImg = $images.eq(index);
					isAnimating = false;
				}
			});
			
			tl.to($currImg, 0.4, {
				css: {scaleX: 0, scaleY: 0.8, rotation: randomVal, alpha: 0.3}, 
				ease:Power2.easeIn 
			});
			
			tl.append(function() {
				$currImg.hide();
				$images.eq(index).show();
			})
			
			tl.fromTo($images.eq(index), 0.3, 
				{css: {scaleX: 0, scaleY: 0.8, rotation: randomVal, alpha: 0.3}}, 
				{css: {scaleX: 1, scaleY: 1, rotation: 0, alpha: 1}, ease:Back.easeOut}
			);
		};

		// Animate gallery in
		TweenMax.fromTo($currImg, 1,
			{
				css: {scaleX: 0, scaleY: 0.5, skewY: 5, alpha: 0}
			}, 
			{
				css: {scale: 1, alpha: 1, skewY: 0},
				ease: Power3.easeInOut, 
				onComplete: function() {
					$imgWrap.on('click', flip);
				}
			}
		);
		$currImg.show();

	</script>
</body>
</html>