<?php 

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	if ( get_sub_field('gallery_shortcode') ) {

		the_sub_field('gallery_shortcode');
		
	}

?>