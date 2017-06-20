<?php
/**
 *
 * The template for displaying the about page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="about-page content-area">
		<main id="main" class="site-main" role="main">

			<?php // open the WordPress loop
			if (have_posts()) : while (have_posts()) : the_post();

				// are there any rows within within our flexible content?
				if( have_rows('about_page_content') ): 

					// loop through all the rows of flexible content
					while ( have_rows('about_page_content') ) : the_row();

					// PHOTO LEFT TEXT RIGHT
					if( get_row_layout() == 'photo_left_text_right' )
						get_template_part('template-parts/section', 'photolefttextright');

					// TWO COLUMN LIST
					if( get_row_layout() == 'two_column_list' )
						get_template_part('template-parts/section', 'twocolumnlist');

					// FULL WIDTH
					if( get_row_layout() == 'full_width' )
						get_template_part('template-parts/section', 'fullwidth');

					// GALLERY
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
