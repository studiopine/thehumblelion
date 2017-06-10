<?php 

	if ( get_sub_field('subheading') ) {
		the_sub_field('subheading');
	}

	if ( get_sub_field('heading') ) {
		the_sub_field('heading');
	}

	// check if the repeater field has rows of data
	if( have_rows('services') ):

	 	// loop through the rows of data
	    while ( have_rows('services') ) : the_row();

	        // display a sub field value
	        the_sub_field('title');
	        the_sub_field('description');

	    endwhile;

	else :

	    // no rows found

	endif;
	
?>