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

		<div class="site-info">
			<p>
				&copy; 2016–<?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?></br>
				<?php printf( esc_html__( 'Site design by %2$s.', 'lion' ), 'lion', '<a href="https://automattic.com/" rel="designer">Studio Pine</a>' ); ?>
			</p>
		</div><!-- .site-info -->

		<div class="site-branding">

			<?php	
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

		</div><!-- .site-branding -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
