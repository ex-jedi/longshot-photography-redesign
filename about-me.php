<?php include('perch/runtime.php'); ?>
<?php perch_layout('simple-header'); ?>
<main class="main-content about-me-main-content" id="main-content">
  <?php perch_content("About Me Section"); ?>
  <?php perch_content("Contact Form"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>
