<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package humblelion
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<script src="https://use.typekit.net/bzw2eqc.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="https://use.fontawesome.com/85c16a0e2e.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lion' ); ?></a>

	<header id="masthead" class="site-header" role="banner">		

		<nav id="site-navigation" class="<?php if ( is_front_page() ): ?>banner<?php else : ?>main-navigation<?php endif; ?>" role="navigation">

			<?php wp_nav_menu( array( 'theme_location' => 'menu-6', 'menu_id' => 'mobile-left-link' ) ); ?>

			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'left-menu' ) ); ?>

            <?php if ( get_theme_mod( 'lion_logo' ) ) : ?>
            	<div id="center-menu">
	                <div id="site-logo">
	                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
	                </div>
                </div>
            <?php else : ?>
                <hgroup>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </hgroup>
            <?php endif; ?>

			<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'right-menu' ) ); ?>

	        <a id="nav-toggle" href="#sidr">Menu</a>

		</nav><!-- #site-navigation -->

        <div id="sidr">

          <div id="responsive-menu"><?php wp_nav_menu( array( 'theme_location' => 'menu-3', 'menu_id' => 'mobile-menu', 'menu_class' => 'menu-inline' ) ); ?></div>

        </div><!-- #sidr -->

		<?php if ( is_front_page() ): ?>
			<div class="thl-hero-img">
				<div class="inner" style="background-image: url('<?php header_image(); ?>')">
					
				</div>
			</div>
		<?php else : ?>
		<?php endif; ?>
		
	</header><!-- #masthead -->

	<a id="showHere"></a>

	<?php if ( is_home() or is_single() or is_search() or is_archive() ): ?>
		<div id="blog-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-5', 'menu_id' => 'blog-menu' ) ); ?>
		</div>
	<?php else : ?>
	<?php endif; ?>

	<div id="content" class="site-content">
