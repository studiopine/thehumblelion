<div class="thl-form">
<?php 

	if ( get_field('subheading', 'options') ) { ?>

		<h4><?php the_field('subheading', 'options'); ?></h4>

	<?php }

	if ( get_field('heading', 'options') ) { ?>
		
		<h2><?php the_field('heading', 'options'); ?></h2>

	<?php }

	if ( get_field('form_shortcode', 'options') ) {
		the_field('form_shortcode', 'options' );
	}
	
?>
</div>