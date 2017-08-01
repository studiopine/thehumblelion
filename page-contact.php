<?php
/**
 *
 * The template for displaying the contact page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="contact-page content-area">
		<main id="main" class="site-main" role="main">

			<?php // open the WordPress loop
			if (have_posts()) : while (have_posts()) : the_post();

				if ( has_post_thumbnail() ) { ?>

					<div class="thl-hero-img"><?php the_post_thumbnail('full'); ?></div>

				<?php 
				};

				// are there any rows within within our flexible content?
				if( have_rows('contact_page_content') ): 

					// loop through all the rows of flexible content
					while ( have_rows('contact_page_content') ) : the_row();

					// SERVICES
					if( get_row_layout() == 'work_section' )
						get_template_part('template-parts/section', 'services');

					// FORM
					if( get_row_layout() == 'form' )
						get_template_part('template-parts/section', 'form');

					// PRESS
					if( get_row_layout() == 'press' )
						get_template_part('template-parts/section', 'press');

					// FULL WIDTH
					if( get_row_layout() == 'full_width_text' )
						get_template_part('template-parts/section', 'fullwidthtext');

					endwhile; // close the loop of flexible content
				endif; // close flexible content conditional

			endwhile; endif; // close the WordPress loop ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
