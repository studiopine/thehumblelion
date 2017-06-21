<div class="list-section">
	<?php 

		if ( get_sub_field('list_title') ) { ?>
			
			<h3><?php the_sub_field('list_title'); ?></h3>
		
		<?php }

		// check if the repeater field has rows of data
		if( have_rows('list_item') ): ?>

			<ul>

		 	<?php 
		 	// loop through the rows of data
		    while ( have_rows('list_item') ) : the_row(); ?>

		        <li><?php the_sub_field('item'); ?></li>

		    <?php
		    endwhile; ?>

		    </ul>

		<?php
		else :

		    // no rows found

		endif;
		
	?>
</div>