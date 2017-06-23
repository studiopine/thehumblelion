<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="section">

					<header class="page-header">
						<h4><?php esc_html_e( 'Oops!', 'lion' ); ?></h4>
						<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'lion' ); ?></h1>
					</header><!-- .page-header -->

				</div>

				<div class="form-wrapper">
					
					<?php 

					if ( get_sub_field('subheading') ) { ?>

						<h4><?php the_sub_field('subheading'); ?></h4>

					<?php }

					if ( get_sub_field('heading') ) { ?>

						<h1><?php the_sub_field('heading'); ?></h1>

					<?php } ?>

					<div class="thl-form">
						<?php get_search_form(); ?>
					</div>

				</div>

				<?php get_template_part( 'template-parts/content', 'featured' ); ?><!-- #featured-posts -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
