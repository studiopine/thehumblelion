<?php if ( has_post_thumbnail() ) { ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="featured-entry-header">
			
			<a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( array(500,500,true) ); ?></a>

			<div class="feautred-entry-meta">
				<i><?php lion_posted_on(); ?></i>
			</div><!-- .entry-meta -->

			<?php the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );?>

		</header><!-- .entry-header -->

	</article><!-- #post-## -->

<?php } else {
	// Display nothing
} ?>