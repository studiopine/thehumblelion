<div class="fullwidthtext section">
<?php 

	if ( get_sub_field('subheading') ) {
		the_sub_field('subheading');
	}

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	if ( get_sub_field('content') ) { ?>

		<div class="text"><?php the_sub_field('content'); ?></div>

	<?php }
	
?>
</div>