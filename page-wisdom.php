<?php
/**
 *
 * The template for displaying the wisdom page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="wisdom-page content-area">
		<main id="main" class="site-main" role="main">

			<?php // open the WordPress loop
			if (have_posts()) : while (have_posts()) : the_post();

				// are there any rows within within our flexible content?
				if( have_rows('wisdom_page') ): 

					// loop through all the rows of flexible content
					while ( have_rows('wisdom_page') ) : the_row();

					// FULL WIDTH TEXT
					if( get_row_layout() == 'full_width_text' )
						get_template_part('template-parts/section', 'fullwidthtext');

					if( get_row_layout() == 'wisdom_wall' )
						get_template_part('template-parts/section', 'wisdom');

					endwhile; // close the loop of flexible content
				endif; // close flexible content conditional

			endwhile; endif; // close the WordPress loop ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
