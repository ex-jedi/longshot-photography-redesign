<?php include('perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
<main class="main-content homepage-main-content">
		<?php perch_content('Homepage Hero Image'); ?>
		<?php perch_content("Featured Galleries"); ?>
		<?php perch_content("Homepage Quotation"); ?>
		<?php perch_content("Homepage Image collage"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>
