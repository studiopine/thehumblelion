<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package humblelion
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header>

				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'lion' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<article class="section">

				<?php get_search_form(); ?>

			</article>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
