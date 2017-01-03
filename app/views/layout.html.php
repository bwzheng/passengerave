<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>
	<meta name="description" content="<?php echo config('blog.description')?>" />
	<meta name="keywords" content="clipPath, svg, effect, layout, expansion, images, grid, polygon" />
    <link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />
	<link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/card.css" />
	<link rel="stylesheet" type="text/css" href="css/pattern.css" />
	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script>
	if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
		var root = document.getElementsByTagName('html')[0];
		root.setAttribute('class', 'ff');
	};
	</script>
    <script src="http://code.jquery.com/jquery-latest.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#card0" ).load( "content/1.html", function() {
                alert( "Load was performed." );
            });
        });
       
    </script>
</head>
<body>
	<div class="container">
		<header class="codrops-header">
			<div class="social-links">
				<a target="_blank" title="Find me on Facebook" href="http://www.facebook.com/passengerave"><img alt="Like me on facebook" src="//login.create.net/images/icons/user/facebook_30x30.png" border=0 style="width: 15px"></a>
			</div>
			<h1>Passenger Avenue <span>Psychology.Music.</span></h1>
		</header>
		<div class="content">
			<!-- trianglify pattern container -->
			<div class="pattern pattern--hidden"></div>
			<!-- cards -->
			<div class="wrapper">
                <?php echo content()?>
			</div>
			<!-- /cards -->
		</div><!-- /content -->
		<!-- Related demos -->
		<section class="content content--related">
			<p>If you enjoyed this demo you might also like:</p>
			<a class="media-item" href="http://tympanus.net/Development/AnimatedGridLayout/">
				<img class="media-item__img" src="img/related/GridItemAnimation.jpg">
				<h3 class="media-item__title">Grid Item Animation Layout</h3>
			</a>
			<a class="media-item" href="http://tympanus.net/Tutorials/ThumbnailGridExpandingPreview/">
				<img class="media-item__img" src="img/related/ThumbnailGridExpandingPreview.jpg">
				<h3 class="media-item__title">Thumbnail Grid with Expanding Preview</h3>
			</a>
		</section>
	</div>
	<!-- /container -->
	<!-- JS -->
	<script src="js/vendors/trianglify.min.js"></script>
	<script src="js/vendors/TweenMax.min.js"></script>
	<script src="js/vendors/ScrollToPlugin.min.js"></script>
	<script src="js/vendors/cash.min.js"></script>
	<script src="js/Card-circle.js"></script>
	<script src="js/demo.js"></script>
</body>

</html>
