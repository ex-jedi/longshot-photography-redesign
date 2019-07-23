<?php include('perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
<main class="main-content homepage-main-content">
<section class="homepage-hero-image-section" >
	<div class="background-image-wrapper rellax" data-rellax-speed="-5" data-rellax-percentage=".5">

	</div>
</section>
		<?php perch_layout('featured-galleries'); ?>
		<?php perch_content("Homepage Quotation"); ?>
		<?php perch_content("Homepage Image collage"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>
