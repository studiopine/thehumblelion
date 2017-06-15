<div class="thl-form">
<?php 

	// are there any rows within within our flexible content?
	if( have_rows('blog_page', '3450') ): 

		// loop through all the rows of flexible content
		while ( have_rows('blog_page', '3450') ) : the_row();

		// NEWSLETTER FORM
		if( get_row_layout() == 'newsletter' )

			if ( get_field('subheading', 'options') ) {
				the_field('subheading', 'options');
			}

			if ( get_field('heading', 'options') ) { ?>

				<h2><?php the_field('heading', 'options'); ?></h2>

			<?php }

			if ( get_field('form_shortcode', 'options') ) {
				the_field('form_shortcode', 'options' );
			}

		endwhile; // close the loop of flexible content

	endif; // close flexible content conditional

?>
</div>