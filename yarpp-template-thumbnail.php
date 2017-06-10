<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3>If you liked this one, you will love these</h3>
<?php if (have_posts()):?>
<ul>
	<?php while (have_posts()) : the_post(); ?>
		<?php if (has_post_thumbnail()):?>
			<li>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('thumbnail'); ?>
					<?php lion_posted_on(); ?>
					<?php the_title(); ?>
					</a>
				</li>
		<?php endif; ?>
	<?php endwhile; ?>
</ul>

<?php else: ?>
<p>No related photos.</p>
<?php endif; ?>
