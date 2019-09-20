<?php include('../perch/runtime.php'); ?>
<?php perch_layout('simple-header'); ?>
<main class="blog-main-content archive-main-content">
	<section class="blog-section blog-archive-section">
			<?php
		        // defaults for all modes
		        $posts_per_page = 10;
		        $template 		= 'non_featured_posts.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;

		        /*
		        	perch_get() is used to get options from the URL.

					e.g. for the URL
						/blog/archive.php?cat=news

					perch_get('cat') would return 'news' because cat=news.


					The code below looks for different options in the URL, and then displays different types of listings based on it.
		        */


		        /* --------------------------- POSTS BY CATEGORY --------------------------- */
		        if (perch_get('cat')) {
		            echo '<h1 class="archive-section-heading section-heading">'.perch_blog_category(perch_get('cat'), true).'</h1>';

		            perch_blog_custom(array(
							'category'   => perch_get('cat'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }


		      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

		      	if ($posts_displayed == false) {

		      		// No other options have been used; no posts have been displayed yet.
		      		// So display all posts.

		      		echo '<h1 class="archive-section-heading section-heading">Archive</h1>';

		      		perch_blog_custom(array(
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));
		      	}

		    ?>
	</section>
			<section class="contact-form section">
				<?php perch_content("General Contact Form"); ?>
			</section>
		</main>
<?php perch_layout('blog-footer'); ?>
