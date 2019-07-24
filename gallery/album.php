<?php include('../perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="../gallery.css" />
	<link rel="stylesheet" type="text/css" href="colorbox.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title><?php perch_gallery_album_field(perch_get('s'), 'albumTitle'); ?><?php perch_content('Album Page Title') ?></title>
	<meta name="description" content="<?php perch_content('Album page meta description'); ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-63560047-1', 'auto');
			ga('send', 'pageview');
		</script>
</head>
<body>

<div class="wrapper">


   <header>
	<h1 class="main-heading"><a href="/"><?php perch_content('Sitewide Main Heading'); ?></a></h1>

				<nav class="main-nav">
					<div class="responsive-menu">
						<a class="highlight-page" href="/gallery/">galleries</a>
						<a href="/prints">store</a>
						<a href="/blog/">blog</a>
						<a href="/services">about me</a>
						<a href="/contact-me">contact me</a>
					</div>
					<a href="" id="pull"><span class="pull-span">Show </span>Menu</a>
				</nav>

</header>

	<main class="main-content album-page">

			<?php
			if(perch_get('s')) {
				perch_gallery_album_images(perch_get('s'), array(
            	   'template'   =>'list_image.html'
            	));
			} ?>

	</main>
<?php perch_layout('main.footer'); ?>

</div>
	<!-- <script type="text/javascript" src="jquery.colorbox-min.js"></script> -->
	<script type="text/javascript" charset="utf-8">
	   jQuery(function($){
           $('a.gallery').colorbox({maxWidth:"100%", maxHeight:"100%"});
	   });
	</script>
	<script type="text/javascript" src="/scripts/main-min.js"></script>

</body>
</html>
