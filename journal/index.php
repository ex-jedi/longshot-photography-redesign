<?php include('../perch/runtime.php'); ?>
<?php perch_layout('blog-post-header'); ?>
  <main class="blog-main-content blog-index-main-content">
  <section class="blog-section blog-index-section" >
    <?php perch_content("Blog Index Page Title"); ?>
    <?php perch_blog_recent_posts(5); ?>
  </section>
  <section class="contact-form section">
    <?php perch_content("General Contact Form"); ?>
  </section>
  </main>
<?php perch_layout('main-footer'); ?>
