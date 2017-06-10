<?php 

	if ( get_sub_field('list_title') ) {
		the_sub_field('list_title');
	}

	// check if the repeater field has rows of data
	if( have_rows('list_item') ):

	 	// loop through the rows of data
	    while ( have_rows('list_item') ) : the_row();

	        // display a sub field value
	        the_sub_field('item');

	    endwhile;

	else :

	    // no rows found

	endif;
	
?>