<?php include('../perch/runtime.php'); ?>
<?php perch_layout('main-header'); ?>
		<main class="main-content gallery-page">
		    <?php
		        perch_gallery_albums(array(
		            'template'=>'album-image.html',
		            'image'=>true
		        ));
		    ?>
		</main>
<?php perch_layout('main-footer'); ?>
<!-- TODO: Remove debug -->
<?php PerchUtil::output_debug(); ?>

