<div class="<?php if ( is_front_page() ) : ?>home-gallery<?php else : ?>gallery<?php endif; ?> section">
	<div class="gallery-heading">
	
		<div class="heading-left">
			<?php 

			if ( get_sub_field('heading') ) { ?>

				<h1><?php the_sub_field('heading'); ?></h1>

			<?php }

			if ( get_sub_field('subheading') ) { ?>

				<h4><?php the_sub_field('subheading'); ?></h4>

			<?php }; ?>
		</div>

		<div class="heading-right"><hr></div>

	</div>

	<?php

	if ( get_sub_field('gallery_shortcode') ) { 

		the_sub_field('gallery_shortcode');
		
	}

	?>
</div>