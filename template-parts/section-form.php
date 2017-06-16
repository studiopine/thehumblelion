<div class="thl-form">
<?php 

	if ( get_sub_field('subheading') ) { ?>

		<h4><?php the_sub_field('subheading'); ?></h4>

	<?php }

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	if ( get_sub_field('form_shortcode') ) {
		the_sub_field('form_shortcode');
	}

	if ( get_sub_field('notes') ) {
		the_sub_field('notes');
	}
	
?>
</div>