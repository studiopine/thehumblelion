<div class="about-right">

	<?php 

	if ( get_sub_field('subheading') ) { ?>
		
		<em><?php the_sub_field('subheading'); ?></em>

	<?php }

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	if ( get_sub_field('content') ) {
		the_sub_field('content');
	}
	
	?>

</div>