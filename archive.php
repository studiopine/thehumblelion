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
					<h4>Explore</h4>
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
					'paged' => $paged
				));

				if ( $wp_query->have_posts() ): ?>

					<section>

					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();

						get_template_part( 'template-parts/content-archive', get_post_format() );

					endwhile; ?>

					</section>

					<div class="page-navigation">

						<?php if( get_previous_posts_link() ) : ?>

							<span class="nav-previous"><?php previous_posts_link( 'Previous' ); ?></span>

						<?php 
						endif; ?>

						<span class="nav-next"><?php next_posts_link( 'Next' ); ?></span>

					</div>

				<?php wp_reset_postdata();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
