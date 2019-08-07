<?php perch_layout('global-head'); ?><!-- global-head -->
<!-- Main attributes template -->
<?php perch_page_attributes(array(
		'template' => 'default.html'
	)); ?>
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
