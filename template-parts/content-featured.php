<?php
/**
 * Template part for displaying featured posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package humblelion
 */

?>

<div id="featured-posts">
	
	<div class="left">The Latest</div>

	<?php
	$args = array(
		'post_count' => 3,
		'category_name' => 'featured' );

	$query = new WP_Query($args);

	if ( $query->have_posts() ) { 
	    while($query->have_posts()) { 
	        $query->the_post(); 

	        if ( has_post_thumbnail() ) { // only print out the thumbnail if it actually has one ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<header class="featured-entry-header">
						
						<?php the_post_thumbnail( 'featured-post' ); ?>

						<div class="feautred-entry-meta">
							<?php lion_posted_on(); ?>
						</div><!-- .entry-meta -->

						<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );?>

					</header><!-- .entry-header -->

				</article><!-- #post-## -->

	        <?php } else {
	            // Display nothing
	        }
	    }
	} else {
		// Display nothing
	}
	wp_reset_query();
	?>

	<div class="right">Favorites</div>

</div><!-- #featured-posts -->
