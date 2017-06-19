<div class="about-me section">

	<div class="left">

		<div class="about-text">

			<?php 

				if ( get_sub_field('subheading') ) { ?>

					<i><?php the_sub_field('subheading'); ?></i>

				<?php }

				if ( get_sub_field('heading') ) { ?>

					<h3><?php the_sub_field('heading'); ?></h3>

				<?php }

				if ( get_sub_field('description') ) { ?>
					
					<span><?php the_sub_field('description'); ?></span>

				<?php }

				if ( get_sub_field('read_more_button_text') ) { ?>
					
					<a href="<?php the_sub_field('read_more_button_link'); ?>"><?php the_sub_field('read_more_button_text'); ?></a>

			<?php } ?>

		</div>

	</div>

	<div class="right" style="background: url('<?php the_sub_field('photo'); ?>'); background-size: cover; background-position: center center;">

	</div>

</div>