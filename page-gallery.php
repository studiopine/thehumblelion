<?php
/**
 *
 * The template for displaying the gallery page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="gallery-page content-area">
		<main id="main" class="site-main" role="main">

			<?php // open the WordPress loop
			if (have_posts()) : while (have_posts()) : the_post();

				// are there any rows within within our flexible content?
				if( have_rows('gallery_page_content') ): 

					// loop through all the rows of flexible content
					while ( have_rows('gallery_page_content') ) : the_row();

					// FULL WIDTH
					if( get_row_layout() == 'gallery' )
						get_template_part('template-parts/section', 'gallery');

					endwhile; // close the loop of flexible content
				endif; // close flexible content conditional

			endwhile; endif; // close the WordPress loop ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
