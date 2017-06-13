<?php 

	if ( get_field('subheading', 'options') ) {
		the_field('subheading', 'options');
	}

	if ( get_field('heading', 'options') ) {
		the_field('heading', 'options');
	}

	if ( get_field('form_shortcode', 'options') ) {
		the_field('form_shortcode', 'options' );
	}
	
?>