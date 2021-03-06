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

	<?php
	$args = array(
		'post_count' => 3,
		'category_name' => 'featured' );

	$query = new WP_Query($args);

	if ( $query->have_posts() ) { ?>

		<h4 class="left">The Latest</h4>

	    <?php 
	    while($query->have_posts()) { 

	        $query->the_post(); 

	        if ( has_post_thumbnail() ) { // only print out the thumbnail if it actually has one ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<header class="featured-entry-header">
						
						<a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'featured-post' ); ?></a>

						<div class="feautred-entry-meta">
							<i><?php lion_posted_on(); ?></i>
						</div><!-- .entry-meta -->

						<?php the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );?>

					</header><!-- .entry-header -->

				</article><!-- #post-## -->

	        <?php } else {
	            // Display nothing
	        }
	    } ?>

	<h4 class="right">Favorites</h4>

	<?php
	} else {
		// Display nothing
	}
	wp_reset_query();
	?>

</div><!-- #featured-posts -->
