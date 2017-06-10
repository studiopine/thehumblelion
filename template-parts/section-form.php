<?php 

	if ( get_sub_field('subheading') ) {
		the_sub_field('subheading');
	}

	if ( get_sub_field('heading') ) {
		the_sub_field('heading');
	}

	if ( get_sub_field('form_shortcode') ) {
		the_sub_field('form_shortcode');
	}

	if ( get_sub_field('notes') ) {
		the_sub_field('notes');
	}
	
?>