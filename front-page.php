<?php
/**
 * The home page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php // open the WordPress loop
			if (have_posts()) : while (have_posts()) : the_post();

				// are there any rows within within our flexible content?
				if( have_rows('home_page_content') ): 

					// loop through all the rows of flexible content
					while ( have_rows('home_page_content') ) : the_row();

					// TAGLINE
					if( get_row_layout() == 'tagline' )
						get_template_part('template-parts/section', 'tagline');

					// FEATURED POSTS
					if( get_row_layout() == 'featured_posts' )
						get_template_part('template-parts/content', 'featured');

					// NEWSLETTER FORM
					if( get_row_layout() == 'form' )
						get_template_part('template-parts/section', 'form');

					// GALLERY
					if( get_row_layout() == 'gallery' )
						get_template_part('template-parts/section', 'gallery');

					// ABOUT ME
					if( get_row_layout() == 'about_me' )
						get_template_part('template-parts/section', 'aboutme');

					endwhile; // close the loop of flexible content
				endif; // close flexible content conditional

			endwhile; endif; // close the WordPress loop ?>		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
