<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Typekit Fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/mud2esb.css">
  <link rel="stylesheet" href="/css/universal.css?v=1.0">
  <link rel="stylesheet" href="/css/blog.css?v=1.0">

	<!-- Perch Meta -->
	<?php
	$domain        = 'https://'.$_SERVER["HTTP_HOST"];
	$mainurl           = perch_page_url(array(
										    'hide-extensions'    => true,
										    'hide-default-doc'   => true,
										    'add-trailing-slash' => false,
										    'include-domain'     => true,
										), true);
	$mainsitename      = "Longshot Photography";
	$pagetitlename = " - Longshot Photography";
	$sharing_image = '/images/default_fb_image.jpg';

	PerchSystem::set_var('domain',$domain);
	PerchSystem::set_var('mainurl',$mainurl);
	PerchSystem::set_var('mainsitename',$mainsitename);
	PerchSystem::set_var('pagetitlename',$pagetitlename);
	PerchSystem::set_var('sharing_image',$sharing_image);

	?>
<!-- Google Analytics -->
<?php perch_content('Analytics'); ?>

<!-- Cookie Consent -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
		"palette": {
			"popup": {
				"background": "#875548"
			},
			"button": {
				"background": "transparent",
				"text": "#F3EDEB",
				"border": "#F3EDEB"
			}
		},
		"content": {
			"href": "/privacy-and-cookie-policy"
		}
	})});
  </script>

<!-- Perch Meta -->
<?php perch_blog_post_meta(perch_get('s'));

  perch_page_attributes(array(
    'template' => 'favicons.html'
  ));

?>

</head>
	<body class="<?php perch_page_attribute('bodyClass', array('template' => 'bits.html' )); ?>">
		<div id="vue-wrapper" class="site-wrapper" :class="{'hide-outline': outlineHide}" @keydown.9="outlineHide = !outlineHide" itemscope itemtype="http://schema.org/LocalBusiness" >
			<header class="header simple-header">
			<a class="show-on-focus"  href="#main-content">Skip to main content</a>
				<nav class="main-nav" :class="{'nav-reveal': navPull}">
					<?php perch_pages_navigation(array(
							'hide-extensions' => true,
					)); ?>
				</nav>
				<?php perch_content("Simple Header Submark"); ?>
			</header>