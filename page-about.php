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
			if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="about-wrapper section">

				<?php
				// are there any rows within within our flexible content?
				if( have_rows('about_page_left') ): ?>

					<div class="about-left">

					<?php
					// loop through all the rows of flexible content
					while ( have_rows('about_page_left') ) : the_row();

						// IMAGE
						if( get_row_layout() == 'bio_photo' )
							get_template_part('template-parts/section', 'biophoto');	

						// TWO COLUMN LIST
						if( get_row_layout() == 'list' )
							get_template_part('template-parts/section', 'twocolumnlist');	

						// Image LIST
						if( get_row_layout() == 'list_images' )
							get_template_part('template-parts/section', 'imageslist');			

					endwhile; // close the loop of flexible content ?>

					</div>

				<?php
				endif; // close flexible content conditional

				// are there any rows within within our flexible content?
				if( have_rows('about_page_right') ): 

					// loop through all the rows of flexible content
					while ( have_rows('about_page_right') ) : the_row();

						// PHOTO LEFT TEXT RIGHT
						if( get_row_layout() == 'about_right' )
							get_template_part('template-parts/section', 'aboutright');				

					endwhile; // close the loop of flexible content
				endif; // close flexible content conditional ?>

			</div>

				<?php
				// are there any rows within within our flexible content?
				if( have_rows('about_page_full_width') ): 

					// loop through all the rows of flexible content
					while ( have_rows('about_page_full_width') ) : the_row();

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
