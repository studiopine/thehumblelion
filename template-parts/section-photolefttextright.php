<?php 

	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}

	if ( get_sub_field('subheading') ) {
		the_sub_field('subheading');
	}

	if ( get_sub_field('heading') ) {
		the_sub_field('heading');
	}

	if ( get_sub_field('content') ) {
		the_sub_field('content');
	}
	
?>