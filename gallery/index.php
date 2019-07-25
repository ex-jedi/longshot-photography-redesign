<?php include('../perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
<main id="main-content" class="main-content gallery-main-content">
		<article class="gallery-article">
		<?php
			perch_gallery_albums(array(
					'template'=>'gallery_index_page.html',
					'image'=>true,
					'count'=>5,
					'paginate'=>true
			));
		?>
	</article>
</main>
<?php perch_layout('main-footer'); ?>
