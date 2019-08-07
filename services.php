<?php include('perch/runtime.php'); ?>
<?php perch_layout('simple-header'); ?>
<main class="main-content services-main-content" id="main-content">
  <section class="services-section">
    <h2 class="section-heading">
    Services
    </h2>

  </section>
  <?php perch_content("General Contact Form"); ?>
</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>
