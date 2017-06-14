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

	<div id="footer-left">

		<nav id="footer-navigation" class="footer-navigation two-column" role="navigation">
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

	</div><!-- #footer-left -->

	<div id="footer-right">

		<div class="site-branding">

			<p class="site-description"><?php the_field('tagline', 'option'); ?></p>

			<p class="author-description"><?php the_field('author_details', 'option'); ?></p>

			<h1 class="footer-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		</div><!-- .site-branding -->

	</div><!-- #footer-right -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
