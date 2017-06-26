<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				if ( has_post_thumbnail() ) { ?>

					<div class="thl-hero-img"><?php the_post_thumbnail('full'); ?></div>

				<?php 
				};

				// are there any rows within within our flexible content?
				if( have_rows('page_content') ): 

					// loop through all the rows of flexible content
					while ( have_rows('page_content') ) : the_row();

					// FULL WIDTH
					if( get_row_layout() == 'full_width' )
						get_template_part('template-parts/section', 'fullwidth');

					// FULL WIDTH TEXT
					if( get_row_layout() == 'full_width_text' )
						get_template_part('template-parts/section', 'fullwidthtext');

					// GALLERY
					if( get_row_layout() == 'gallery' )
						get_template_part('template-parts/section', 'gallery');

					// FORM
					if( get_row_layout() == 'form' )
						get_template_part('template-parts/section', 'form');

					// FEATURED POSTS
					if( get_row_layout() == 'featured_posts' )
						get_template_part('template-parts/content', 'featured');

					endwhile; // close the loop of flexible content
				endif; // close flexible content conditional

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
