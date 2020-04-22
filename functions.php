<?php
/**
 * Blacklight functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blacklight
 */

if ( ! function_exists( 'blacklight_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blacklight_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Blacklight, use a find and replace
		 * to change 'blacklight' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'blacklight', get_template_directory() . '/languages' );

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

        // Add featured image sizes
        add_image_size( 'blog-secondaryFeatured', 350, 150, array( 'center', 'center' ) );
        add_image_size( 'blog-principalFeatured', 900, 440, array( 'center', 'center' ) );
        add_image_size( 'blog-hero', 1150, 430, array( 'center', 'center' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'blacklight' ),
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
		add_theme_support( 'custom-background', apply_filters( 'blacklight_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'blacklight_setup' );

function blacklight_add_editor_style() {
    add_editor_style('dist/css/editor-style.css');
}
add_action('admin_init', 'blacklight_add_editor_style');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blacklight_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'blacklight_content_width', 640 );
}
add_action( 'after_setup_theme', 'blacklight_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blacklight_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blacklight' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blacklight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blacklight_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blacklight_scripts() {
	

	/*Bootstrap CSS*/
    wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css');
    /** End Bootstrapp CSS **/
    
    /** Blacklight Styles **/
    wp_enqueue_style( 'blacklight-style', get_stylesheet_uri() );
    /** End Blacklight Styles **/
    
    /** Google Fonts **/
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:400,400i,700&display=swap', false ); 
    /** End Google Fonts **/
    
    /** Popper JS **/
    wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', false, '', true );  
    wp_enqueue_script ( 'popper' );
    
    /** ScrollReveal **/    
    wp_register_script( 'scrollreveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', false, '', false );
    wp_enqueue_script ( 'scrollreveal' );  
    /** End ScrollReveal **/
    
    /** jQuery **/
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), false, NULL, true);
    /** End jQuery **/
    
    /** fontawesome cdn **/
    wp_enqueue_style( 'wp-bootstrap-pro-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css' );
    /** End fontawesome cdn **/
    
    /** Custom JS **/
    wp_enqueue_script ( 'blacklight-js', get_template_directory_uri() . '/src/js/custom.js', array('jquery'), '', true );
    /** End Custom JS **/
    
    /** Masonry JS **/
    wp_enqueue_script ( 'masonry-js', get_template_directory_uri() . '/src/js/masonry.js', array('masonry'), '', true );
    wp_enqueue_script('masonry-init', get_template_directory_uri() . '/src/js/masonry-init.js', array('masonry'), '', true);
    /** End Masonry JS **/
    
    wp_enqueue_script ( 'blacklight-tether', get_template_directory_uri() . '/src/js/tether.min.js', array('jquery'), '', true );
        
    wp_enqueue_script ( 'bootstrap-js', get_template_directory_uri() . '/src/js/bootstrap.min.js', array('jquery'), '', true );
            

	wp_enqueue_script( 'blacklight-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	};

	if( is_front_page() )
    {
        wp_register_script( 'Slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', false, '', false );
    	wp_enqueue_script ( 'Slick-js' );
    	 wp_enqueue_script('Slick-init', get_template_directory_uri() . '/src/js/slick-init.js', false, '', true);  
        wp_enqueue_style( 'Slic-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    }}
add_action( 'wp_enqueue_scripts', 'blacklight_scripts' );

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
 * Widgets File.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Blacklight Theme Options.
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Bootstrap Nav Walker.
 */
require get_template_directory() . '/inc/bs-wp-walker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Admite SVG
 */
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Admite webp
 */
function webp_mime_types( $existing_mimes ) {
 $existing_mimes['webm'] = 'image/webp';
 return $existing_mimes;
}
add_filter( 'mime_types', 'webp_mime_types' );

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/inc/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');
