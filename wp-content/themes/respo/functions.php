<?php
/**
 * respo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package respo
 */

if ( ! function_exists( 'respo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function respo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on respo, use a find and replace
	 * to change 'respo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'respo', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'respo' ),
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
	add_theme_support( 'custom-background', apply_filters( 'respo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'respo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function respo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'respo_content_width', 640 );
}
add_action( 'after_setup_theme', 'respo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function respo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'respo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'respo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'respo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function respo_scripts() {

wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Red+Hat+Display:wght@400;500;700&display=swap', array(), null, 'all' );

wp_enqueue_style('fawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('boot-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
wp_enqueue_style('theme-style', get_template_directory_uri().'/css/style.css');



wp_enqueue_script('jq-scripts','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js','','',true);

wp_enqueue_script('jqval-scripts',get_template_directory_uri().'/assets/mail/jqBootstrapValidation.js','','',true);

wp_enqueue_script('cntmail-scripts',get_template_directory_uri().'/assets/mail/contact_me.js','','',true);

wp_enqueue_script('stell-scripts',get_template_directory_uri().'/js/vendor/stellarnav.min.js','','',true);

wp_enqueue_script('popper-scripts','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js','','',true);

wp_enqueue_script('bootmin-scripts','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js','','',true);

wp_enqueue_script('fast-scripts','https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js','','',true);

wp_enqueue_script('fvisible-scripts','https://unpkg.com/focus-visible','','',true);

wp_enqueue_script('icheck-scripts','https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js','','',true);

wp_enqueue_script('wayp-scripts','https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js','','',true);

wp_enqueue_script('theme-scripts',get_template_directory_uri().'/js/scripts.min.js','','',true);

}
add_action( 'wp_enqueue_scripts', 'respo_scripts' );

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

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




/* Google Tag Manager */
add_action( 'wp_head', 'pixelperfect_wp_head', 1 );

function pixelperfect_wp_head() { ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P499JRGD');</script>
	<!-- End Google Tag Manager -->

	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16486387799"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-16486387799');
    </script>
	<!-- End Google tag (gtag.js) -->

<?php }


add_action( 'wp_body_open', 'pixelperfect_wp_body_open' );

function pixelperfect_wp_body_open() { ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P499JRGD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<?php }
