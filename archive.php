<?php
/*
Template Name: Archives
*/
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="section">

				<header class="page-header">

					<?php if ( get_field('subheading') ) { ?>

						<h4><?php the_field('subheading'); ?></h4>

					<?php } ?>

					<h1><?php the_title(); ?></h1>

				</header><!-- .page-header -->

				<?php
				// the query
				$wp_query = new 
				WP_Query(
				array(
					'post_type'=>'post',
					'post_status'=>'publish',
					'posts_per_page'=> 12,
					'paged' => $paged,
					'meta_query' => array(
						array(
							'key' 		=> '_thumbnail_id',
							'compare' 	=> 'EXISTS'
							)
						)
				));

				if ( $wp_query->have_posts() ): ?>

					<section>

					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();

						get_template_part( 'template-parts/content-archive', get_post_format() );

					endwhile;
					wp_reset_postdata(); ?>

					</section>

					<div class="post-navigation">

						<?php if( get_previous_posts_link() ) : ?>

							<span class="nav-previous"><?php previous_posts_link( 'Previous' ); ?></span>

						<?php 
						endif; ?>

						<span class="nav-next"><?php next_posts_link( 'Next' ); ?></span>

					</div>

				

				<?php 
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
