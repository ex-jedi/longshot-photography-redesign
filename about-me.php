<?php include('perch/runtime.php'); ?>
<?php perch_layout('simple-header'); ?>
<main class="main-content about-me-main-content" id="main-content">
  <section class="about-me-section">
    <h2 class="section-heading">
    About me
    </h2>
    <div class="about-me-content-wrapper">
      <?php perch_content("About Me Main Image"); ?>
      <?php perch_content("About Me Text"); ?>
    </div>
  </section>
  <?php perch_content("General Contact Form"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>
