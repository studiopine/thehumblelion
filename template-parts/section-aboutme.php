<div class="about-me">
<?php 

	if ( get_sub_field('subheading') ) {
		the_sub_field('subheading');
	}

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php }

	if ( get_sub_field('description') ) {
		the_sub_field('description');
	}

	if ( get_sub_field('read_more_button_text') ) { ?>
		
		<a href="<?php the_sub_field('read_more_button_link'); ?>"><?php the_sub_field('read_more_button_text'); ?></a>

	<?php }
	
?>

<img src="<?php the_sub_field('photo'); ?>" alt="" />

</div>