<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package humblelion
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<nav id="footer-navigation" class="footer-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-4', 'menu_id' => 'footer-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div id="footer-social">
			<ul>
				<li><a href="<?php the_field( 'instagram', 'options' ) ?>" target="_blank">Instagram</a></li>
				<li><a href="<?php the_field( 'facebook', 'options' ) ?>" target="_blank">Facebook</a></li>
				<li><a href="<?php the_field( 'pinterest', 'options' ) ?>" target="_blank">Pinterest</a></li>
			</ul>
		</div>

		<div class="site-info">
			<p>
				<?php the_field('copyright', 'option'); ?></br>
				<?php the_field('credits', 'option'); ?>
			</p>
		</div><!-- .site-info -->

		<div class="site-branding">

			<?php	
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

			<?php the_field('author_details', 'option'); ?>

			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

		</div><!-- .site-branding -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
