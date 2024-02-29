<?php
/**
 * Hasora Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hasora_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hasora_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Hasora Theme, use a find and replace
		* to change 'hasora-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'hasora-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Header', 'hasora-theme' ),
			'footer' => esc_html__( 'Footer', 'hasora-theme' ),
			'sns' => esc_html__('SNS', 'hasora-theme')
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
			'hasora_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'hasora_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hasora_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hasora_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'hasora_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hasora_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hasora-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hasora-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hasora_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hasora_theme_scripts() {
	// get the current page id
	$page_id = get_the_ID();

	wp_enqueue_style( 'hasora-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hasora-theme-style', 'rtl', 'replace' );

	// Load header.js 
	wp_enqueue_script( 'hasora-theme-header', get_template_directory_uri() . '/js/header.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'hasora-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hasora_theme_scripts' );

// Add ACF Options Pages to Dashboard
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Call-to-Action Settings',
        'menu_title'    => 'Call-to-Action Settings',
        'menu_slug'     => 'call-to-action-settings',
        'capability'    => 'edit_posts',
		'parent_slug'	=> ''
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'CTA: Shopify Settings',
        'menu_title'    => 'CTA-Shopify',
        'parent_slug'   => 'call-to-action-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'CTA: SNS Settings',
        'menu_title'    => 'CTA-SNS',
        'parent_slug'   => 'call-to-action-settings',
    ));
}

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

// Parallax

function parallax_background() {
	?>
	<style>
		.page-id-11:before {
			content:""; /*中身はブランク*/
			display:block;
			background-image: url(<?php echo get_template_directory_uri()?>/images/about_hasora_compressed.jpeg);
			background-repeat:no-repeat; /*画像を繰り返さない*/
			background-size:cover; /*画面サイズいっぱいに表示*/
			background-position:top;
			width:100%; /*横幅いっぱいに表示*/
			height:100vh; /*立幅いっぱいに表示*/
			position:fixed; /*固定*/
			/* z-index:-1; 全ての要素より順位を下げる */
		}
		@media screen and (min-width: 800px) {
			.page-id-11:before {
				background-position:50% 20%;
			}
		}

	</style>
	<?php
}

add_action('wp_head','parallax_background');

/**
 * Lower Yoast SEO Metabox location
 */
function yoast_to_bottom(){
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoast_to_bottom' );

// =================== WordPress "dashboard" cleanup for non-administrator role ===================

// Remove admin menu items from non-admin dashboard
function hasora_remove_admin_menu() {
	if ( !current_user_can( 'manage_options' ) ) {
		remove_menu_page( 'edit.php' ); // Posts
		remove_menu_page( 'edit-comments.php' );  // Comments
		remove_menu_page( 'tools.php' );  // Tools
		remove_submenu_page( 'edit.php?post_type=page', 'post-new.php?post_type=page' );  // 'Add New Page' SUBMENU

		// Yoast SEO related
		// remove_menu_page( 'admin.php?page=wpseo_workouts' );  // Yoast 消えない=指定がまちがっていた。?page= 以降のみ(slug)を指定
		remove_menu_page( 'wpseo_dashboard' ); // main admin menu
		remove_menu_page( 'wpseo_workouts' ); // need to remove this submenu too, or still show on menu
		remove_menu_page( 'wpseo_redirects' ); // need to remove this submenu too, or still show on menu
	}
}
add_action( 'admin_menu', 'hasora_remove_admin_menu' );

// Remove admin bar(very top of the dashboard)items . Refer to CSS id using dev tool, then add the id EXCEPT FOR 'wp-admin-bar-'
function hasora_remove_admin_bar($wp_admin_bar) {
	if ( !current_user_can( 'manage_options' ) ) {
		$wp_admin_bar->remove_node( 'wp-logo' ); // WP logo and its dropdown links
		$wp_admin_bar->remove_node( 'comments' );  // Comments
		$wp_admin_bar->remove_node( 'new-content' );  // +New (pages, posts, and media)
		$wp_admin_bar->remove_node( 'wpseo-menu' );  // Yoast SEO
	}
}
add_action( 'admin_bar_menu', 'hasora_remove_admin_bar', 9999 ); // needs high number to override default settings

// Remove widgets from dashboard
function hasora_remove_widgets() {
	if ( !current_user_can( 'manage_options' ) ) {
	remove_action( 'welcome_panel', 'wp_welcome_panel' ); // Welcom Panel
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // Quick Draft
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // Activity
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // At a glance
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPress Events and News
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' ); // Yoast SEO
	}
}
add_action( 'wp_dashboard_setup', 'hasora_remove_widgets' );

// Disable block editor in all pages
function hasora_disable_block_template() {
    $post_type_object = get_post_type_object( 'page' );
    $post_type_object->template = array(
        array( 'core/paragraph', array(
            'placeholder' => 'Add Description...',
        ) ),
    );
    $post_type_object->template_lock = 'contentOnly'; // allow content edits only
}
add_action( 'init', 'hasora_disable_block_template' );