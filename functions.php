<?php
/**
 * University Animal CLinic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package University_Animal_CLinic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'university_animal_clinic_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function university_animal_clinic_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on University Animal CLinic, use a find and replace
		 * to change 'university-animal-clinic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'university-animal-clinic', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'university-animal-clinic' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'university_animal_clinic_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'university_animal_clinic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function university_animal_clinic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'university_animal_clinic_content_width', 640 );
}
add_action( 'after_setup_theme', 'university_animal_clinic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function university_animal_clinic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'university-animal-clinic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'university-animal-clinic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'university_animal_clinic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function university_animal_clinic_scripts() {
	wp_enqueue_style( 'university-animal-clinic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'university-animal-clinic-style', 'rtl', 'replace' );

	wp_enqueue_script( 'university-animal-clinic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	/**
	 * Load templates-assets function (css, js)
	 */
	require get_template_directory() . '/inc/template-assets.php';


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'university_animal_clinic_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * @author Abd Hannan
 * 
 * Custom code start here
 */



 
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Register nav menus for bootstrap
 */
register_nav_menus( array(
	'primary-header' => __( 'Primary Header', 'university_animal_clinic_setup' ),
	'footer-menu' => __( 'Footer Menu', 'university_animal_clinic_setup' ),
) );

/**
 * Theme options
 */

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

// Check function exists.
if( function_exists('acf_add_options_page') ) {

	// Register options page.
		$option_page = acf_add_options_page(array(
		'page_title' => __('Theme Options'),
		'menu_title' => __('Theme Options'),
		'menu_slug' => 'theme-options',
		'capability' => 'edit_posts',
		'icon_url' => 'dashicons-book-alt',
		'redirect' => false,
		'position' => '10',
		'updated_message' => __("The option has been updated", 'acf'),
		));
	}
}