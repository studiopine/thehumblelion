<?php 

	if ( get_sub_field('the_text') ) { ?>

		<h1><?php the_sub_field('the_text'); ?></h1>

	<?php }

?>

<img id="thl-logomark" src="<?php the_sub_field('the_image'); ?>" alt="" />