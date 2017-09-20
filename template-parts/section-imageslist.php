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
		    while ( have_rows('list_item') ) : the_row(); 

		    $image = get_sub_field('image'); ?>

				<li>
				
			        <a href="<?php the_sub_field('link'); ?>" target="_blank">

			        <?php if(!empty($image) ): ?>

			        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				    <?php endif; ?>

			        </a>
			        
		        </li>

		    <?php
		    endwhile; ?>

		    </ul>

		<?php
		else :

		    // no rows found

		endif;
		
	?>
</div>