<?php
/**
 * The template for searching
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="search-page content-area">
		<main id="main" class="site-main" role="main">

			<?php // open the WordPress loop
			if (have_posts()) : while (have_posts()) : the_post();

				if ( has_post_thumbnail() ) { ?>

					<div class="thl-hero-img"><?php the_post_thumbnail('full'); ?></div>

				<?php 
				};

				// are there any rows within within our flexible content?
				if( have_rows('above_search_form') ): 

					// loop through all the rows of flexible content
					while ( have_rows('above_search_form') ) : the_row();

					// PHOTO LEFT TEXT RIGHT
					if( get_row_layout() == 'three_columns' )
						get_template_part('template-parts/section', 'categories');

					endwhile; // close the loop of flexible content

				endif; // close flexible content conditional

				// are there any rows within within our flexible content?
				if( have_rows('search_form') ): 

					// loop through all the rows of flexible content
					while ( have_rows('search_form') ) : the_row();

					// PHOTO LEFT TEXT RIGHT
					if( get_row_layout() == 'search_form_header' )
						get_template_part('template-parts/section', 'searchform');

					endwhile; // close the loop of flexible content

				endif; // close flexible content conditional

			endwhile; endif; // close the WordPress loop ?>

			<?php get_template_part( 'template-parts/content', 'featured' ); ?><!-- #featured-posts -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
