<section class="homepage-featured-galleries-section">
  <h2 class="section-heading featured-galleries-section-heading">
    Featured Galleries
  </h2>
  <div class="homepage-featured-gallery-wrapper">
    <?php
      perch_gallery_albums(array(
        'template' => 'homepage_featured_albums.html',
        'image' => true,
        'filter' => 'featured',
        'match' => 'eq',
        'value' => true,
        'count'=>3
      )); ?>
  </div>
</section>