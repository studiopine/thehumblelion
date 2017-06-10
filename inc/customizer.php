<?php
/**
 * humblelion Theme Customizer
 *
 * @package humblelion
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lion_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	  // Logo
	  $wp_customize->add_section( 'lion_logo_section' , array(
	      'title'       => __( 'Logo', 'lion' ),
	      'priority'    => 30,
	      'description' => 'Upload a logo to replace the default site name and description in the header',
	  ) );
	  $wp_customize->add_setting( 'lion_logo', array(
	      'sanitze_callback' => 'esc_url_raw',
	  ) );
	  $wp_customize->add_control( new WP_Customize_Image_control( $wp_customize, 'lion_logo', array(
	      'label'     => __( 'Logo', 'lion'),
	      'section'   => 'lion_logo_section',
	      'settings'  => 'lion_logo',
	  ) ) );
}
add_action( 'customize_register', 'lion_customize_register' );

function lion_customize_css()
{
    ?>
         <style type="text/css">
            
             #site-logo {
              background-image: url('<?php echo get_theme_mod('lion_logo'); ?>');
              background-size: 84px 53px;
              width: 84px;
              height: 53px;
             }

         </style>
    <?php
}
add_action( 'wp_head', 'lion_customize_css');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lion_customize_preview_js() {
	wp_enqueue_script( 'lion_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'lion_customize_preview_js' );
