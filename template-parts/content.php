<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<div class="featured-image">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( array(800) ); }; ?>
		</div>

		<div class="entry-content">

			<?php
			if ( is_single() ) :

				the_title( '<h1 class="entry-title">', '</h1>' );

			else :

				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );

			endif;

			if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">

				<i><?php lion_posted_on(); ?> • <?php the_category(', ') ?></i>

			</div><!-- .entry-meta -->

		</div>

		<?php
		endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( 	sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Read more', 'lion' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );


			wp_link_pages( array(
				// 'before' 			=> '<div class="page-links">' . esc_html__( 'Pages:', 'lion' ),
				// 'after'  			=> '</div>',
				'nextpagelink'     => __( 'Next' ),
				'previouspagelink' => __( 'Previous' ),
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<i><?php lion_entry_footer(); ?></i>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
