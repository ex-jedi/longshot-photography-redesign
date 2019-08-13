<?php include('../perch/runtime.php'); ?>
<?php perch_layout('simple-header'); ?>
<main id="main-content" class="main-content gallery-main-content">
		<section class="gallery-section">
			<h2 class="section-heading">
				Galleries
			</h2>
		<?php
			perch_gallery_albums(array(
					'template'=>'gallery_index_page.html',
					'image'=>true
			));
		?>
	</section>
	<?php perch_content("General Contact Form"); ?>
</main>
<?php perch_layout('main-footer'); ?>
