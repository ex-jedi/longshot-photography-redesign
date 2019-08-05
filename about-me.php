<?php include('perch/runtime.php'); ?>
<?php perch_layout('simple-header'); ?>
<main class="main-content about-me-main-content" id="main-content">
  <?php perch_layout("about-me-section"); ?>
  <?php perch_content("General Contact Form"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>
