<?php

/**
 * wp_guarapo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_guarapo
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('wp_guarapo_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_guarapo_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wp_guarapo, use a find and replace
		 * to change 'wp_guarapo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('wp_guarapo', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'wp_guarapo'),
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
				'wp_guarapo_custom_background_args',
				array(
					'default-color' => 'FDFDFD',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'wp_guarapo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_guarapo_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('wp_guarapo_content_width', 640);
}
add_action('after_setup_theme', 'wp_guarapo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_guarapo_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'wp_guarapo'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wp_guarapo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 1', 'wp_guarapo'),
			'id'            => 'footer_area_one',
			'description'   => esc_html__('Add widgets here.', 'wp_guarapo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 2', 'wp_guarapo'),
			'id'            => 'footer_area_two',
			'description'   => esc_html__('Add widgets here.', 'wp_guarapo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 3', 'wp_guarapo'),
			'id'            => 'footer_area_three',
			'description'   => esc_html__('Add widgets here.', 'wp_guarapo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 4', 'wp_guarapo'),
			'id'            => 'footer_area_four',
			'description'   => esc_html__('Add widgets here.', 'wp_guarapo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'wp_guarapo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wp_guarapo_scripts()
{
	wp_enqueue_style('wp_guarapo-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('wp_guarapo-style', 'rtl', 'replace');

	wp_enqueue_script('wp_guarapo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wp_guarapo_scripts');


/**
 * Enqueue scripts and styles from dist.
 */
function _themename_assets()
{
	wp_enqueue_style('_themename-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all');

	wp_enqueue_script('_themename-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', '_themename_assets');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Remove navbar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Implement the Custom Header feature.
 * require get_template_directory() . '/inc/custom-header.php';
*/

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Incluir Bootstrap JS y dependencia popper
function bootstrap_js() {
	wp_enqueue_script( 'popper_js', 
  					'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', 
  					array(), 
  					'2.9.2', 
  					true); 
	wp_enqueue_script( 'bootstrap_js', 
  					'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js', 
  					array('jquery','popper_js'), 
  					'5.0.1', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');


// Allow SVG
function add_file_types_to_uploads($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/**
 * Add animaate support
 */

function add_animate_css()
{
	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css');

}
add_action('wp_enqueue_scripts', 'add_animate_css');

/** 
 * Delete Category word when printing category page
*/


function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}

/**
 * Add font awesome support
 */

add_action('wp_enqueue_scripts', 'tthq_add_custom_fa_css');

function tthq_add_custom_fa_css()
{
	wp_enqueue_style('custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');
}

/**
 * Add Accent color to customize
 */
  function theme_customize_register( $wp_customize ) {    
    // Accent color
    $wp_customize->add_setting( 'accent_color', array(
      'default'   => '22577A',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Accent color', 'theme' ),
    ) ) );
  }

  add_action( 'customize_register', 'theme_customize_register' );

  function theme_get_customizer_css() {
    ob_start();

    $accent_color = get_theme_mod( 'accent_color', '' );
    if ( ! empty( $accent_color ) ) {
      ?>
	  	a:hover{
			color: <?php echo $accent_color; ?>;
			text-decoration: underline;
		}
		hr{
			background-color: <?php echo $accent_color; ?>;
			opacity: 1;
		}
		.bg-primary{
			background-color: <?php echo $accent_color; ?>!important;
		}
		.pagination .page-numbers{
				background-color: <?php echo $accent_color; ?>;
		}
	
      <?php
    }

    $css = ob_get_clean();
    return $css;
  }

/* 
* Add Leer más button
*/

  function theme_enqueue_styles() {
	wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
	$custom_css = theme_get_customizer_css();
	wp_add_inline_style( 'theme-styles', $custom_css );
  }
  
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

  function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more d-block" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Leer más', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
