<div class="<?php if ( is_front_page() ) : ?>home-gallery<?php else : ?>gallery<?php endif; ?>">
<?php 

	if ( get_sub_field('heading') ) { ?>

		<h1><?php the_sub_field('heading'); ?></h1><?php if ( is_front_page() ) : ?><hr><?php else : ?><?php endif; ?>

	<?php }

	if ( get_sub_field('gallery_shortcode') ) { 

		the_sub_field('gallery_shortcode');
		
	}

?>
</div>