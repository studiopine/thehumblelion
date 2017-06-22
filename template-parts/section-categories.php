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
				        <i><?php the_sub_field('title'); ?></i><br><br>
				        <?php the_sub_field('description'); ?>

				        <?php if ( get_sub_field('link') ) { ?>
							<span class="button-link"><a href="<?php the_sub_field('link'); ?>">Read posts</a></span>
				        <?php } ?>
				        
			        </li>

		    <?php
		    endwhile; ?>

	    </ul>

	<?php else :

	    // no rows found

	endif;
	
?>
</div>