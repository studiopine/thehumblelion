<div class="categories section">
<?php 

	if ( get_sub_field('subheading') ) { ?>

		<h4><?php the_sub_field('subheading'); ?></h4>

	<?php }

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	// check if the repeater field has rows of data
	if( have_rows('categories') ): ?>

		<ul>

		 	<?php 
		 	// loop through the rows of data
		    while ( have_rows('categories') ) : the_row(); ?>

					<li>
				        <i><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></i><br><br>
				        <?php the_sub_field('description'); ?>
				        
			        </li>

		    <?php
		    endwhile; ?>

	    </ul>

	<?php else :

	    // no rows found

	endif;
	
?>
</div>