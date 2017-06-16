<div id="tagline">
	<?php 

		if ( get_sub_field('the_text') ) { ?>

			<h1><?php the_sub_field('the_text'); ?></h1>

		<?php }

	?>
	
	<div id="thl-logomark">

		<img src="<?php the_sub_field('the_image'); ?>" alt="" />
		
	</div>
	
</div>