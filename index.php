<?php include('perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
<main class="main-content homepage-main-content" id="main-content">
<section class="homepage-hero-image-section" >
	<div class="background-image-wrapper rellax" data-rellax-speed="-5" data-rellax-percentage=".7">
	</div>
</section>
		<?php perch_layout('featured-galleries'); ?>
		<?php perch_content("Homepage Testimonial One"); ?>
		<?php perch_content("Homepage Image collage"); ?>
		<?php perch_content("Homepage Testimonial Two"); ?>
		<?php perch_layout('homepage-mobile-collage-two'); ?>
		<?php perch_content("General Contact Form"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>
