<?php 

	if ( get_sub_field('subheading') ) { ?>

		<h4><?php the_sub_field('subheading'); ?></h4>

	<?php }

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	if ( get_sub_field('content') ) {
		the_sub_field('content');
	}
	
?>