<?php
/**
 * humblelion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package humblelion
 */

if ( ! function_exists( 'lion_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lion_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on humblelion, use a find and replace
	 * to change 'lion' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lion', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'featured-post', 320, 320, true );

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Left', 'lion' ),
		'menu-2' => esc_html__( 'Right', 'lion' ),
		'menu-3' => esc_html__( 'Mobile', 'lion' ),
		'menu-4' => esc_html__( 'Footer', 'lion' ),
		'menu-5' => esc_html__( 'Blog Categories', 'lion' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lion_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'lion_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lion_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lion_content_width', 640 );
}
add_action( 'after_setup_theme', 'lion_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lion_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lion' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lion' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lion_widgets_init' );

// Exclude Wisdom quotes from Blog page
function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-51' );
        // $query->set( 'cat', '-70' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );

// Options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}

// Custom Comments
function lion_comment($comment, $args, $depth) {
 
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>

    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">

    <?php if ( 'div' != $args['style'] ) : ?>

    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">

	    <?php endif; ?>

	    <div class="comment-details">
	       
	        <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?><em class="date-stamp"><?php
	        /* translators: 1: date, 2: time */
	        printf( __('&nbsp;&nbsp;&mdash;&nbsp;&nbsp;%1$s ago', '%2$s = human-readable time difference', 'wpdocs_textdomain' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) );
	        ?></em>
	    
	    </div>

	    <?php if ( $comment->comment_approved == '0' ) : ?>

	         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
	         <br />

	    <?php endif; ?>

	    <?php comment_text(); ?>

	    <div class="reply">
	        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	    </div>

	    <?php if ( 'div' != $args['style'] ) : ?>

    </div>

    <?php endif; ?>

    <?php
    }

/**
 * Enqueue scripts and styles.
 */
function lion_scripts() {
	wp_enqueue_style( 'lion-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lion-headhesive', get_template_directory_uri() . '/js/headhesive.js', array(), true );

	wp_enqueue_script( 'lion-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lion-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script ( 'sidrjs' , get_template_directory_uri() . '/js/jquery.sidr.min.js', array( 'jquery' ), '1', true );
	
	wp_enqueue_script ( 'sidrinit' , get_template_directory_uri() . '/js/sidr-init.js', array( 'sidrjs' ), '1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lion_scripts' );

function lion_footer_js() { 

if ( is_front_page() ): ?>

	<script>

        // Set options
        var options = {
            offset: '#showHere',
            offsetSide: 'top',
            classes: {
                clone:   'banner--clone',
                stick:   'banner--stick',
                unstick: 'banner--unstick'
            }
        };

        // Initialise with options
        var banner = new Headhesive('.banner', options);

    </script>

<?php 
else :
endif; ?>

<?php
}

add_action( 'wp_footer', 'lion_footer_js' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
