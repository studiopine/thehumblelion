<div class="form-wrapper">
<?php 

	if ( get_sub_field('subheading') ) { ?>

		<h4><?php the_sub_field('subheading'); ?></h4>

	<?php }

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1>

	<?php } ?>

	<div class="thl-form">
		<?php get_search_form(); ?>
	</div>

</div>