<div class="press section">
<?php 

	if ( get_sub_field('subheading') ) { ?>

		<h4><?php the_sub_field('subheading'); ?></h4>

	<?php }

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	// check if the repeater field has rows of data
	if( have_rows('logos') ): ?>

		<ul>

		 	<?php 
		 	// loop through the rows of data
		    while ( have_rows('logos') ) : the_row(); 

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

	<?php else :

	    // no rows found

	endif;
	
?>
</div>