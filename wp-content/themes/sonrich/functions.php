<?php

/**
 * Sonrich functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sonrich
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sonrich_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Sonrich, use a find and replace
		* to change 'sonrich' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('sonrich', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'sonrich'),
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
			'sonrich_custom_background_args',
			array(
				'default-color' => 'ffffff',
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
add_action('after_setup_theme', 'sonrich_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sonrich_content_width()
{
	$GLOBALS['content_width'] = apply_filters('sonrich_content_width', 640);
}
add_action('after_setup_theme', 'sonrich_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sonrich_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sonrich'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sonrich'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'sonrich_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sonrich_scripts()
{
	wp_enqueue_style('sonrich-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('sonrich-style', 'rtl', 'replace');

	wp_enqueue_script('sonrich-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sonrich_scripts');

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

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// function register_my_menus() {
//     register_nav_menus(
//         array(
//             'primary-menu' => esc_html__('Primary Menu', 'your-theme-textdomain'), // Change 'your-theme-textdomain' to your theme's text domain
//         )
//     );
// }
// add_action('init', 'register_my_menus');


// function enqueue_bootstrap() {
//     // Enqueue Bootstrap CSS
//     wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

//     // Enqueue Bootstrap JS and Popper.js
//     wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '', true);
//     wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '', true);
// }
// add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

function remove_wp_styles()
{
	wp_dequeue_style("wp-block-library");
	wp_dequeue_style("classic-theme-styles");
	wp_dequeue_style("global-styles");
}

add_action("wp_enqueue_scripts", "remove_wp_styles");


// Add custom post type for products
function create_product_post_type() {
    $labels = array(
        'name'               => _x( 'Products', 'post type general name', 'your-text-domain' ),
        'singular_name'      => _x( 'Product', 'post type singular name', 'your-text-domain' ),
        'menu_name'          => _x( 'Products', 'admin menu', 'your-text-domain' ),
        'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'your-text-domain' ),
        'add_new'            => _x( 'Add New', 'product', 'your-text-domain' ),
        'add_new_item'       => __( 'Add New Product', 'your-text-domain' ),
        'new_item'           => __( 'New Product', 'your-text-domain' ),
        'edit_item'          => __( 'Edit Product', 'your-text-domain' ),
        'view_item'          => __( 'View Product', 'your-text-domain' ),
        'all_items'          => __( 'All Products', 'your-text-domain' ),
        'search_items'       => __( 'Search Products', 'your-text-domain' ),
        'parent_item_colon'  => __( 'Parent Products:', 'your-text-domain' ),
        'not_found'          => __( 'No products found.', 'your-text-domain' ),
        'not_found_in_trash' => __( 'No products found in Trash.', 'your-text-domain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'product' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'product', $args );
}

add_action( 'init', 'create_product_post_type' );

// Add custom meta box for price
function add_product_price_meta_box() {
    add_meta_box(
        'product_price_meta_box',      // Unique ID
        'Product Price',               // Box title
        'display_product_price_meta_box', // Callback function
        'product',                     // Post type
        'normal',                      // Context
        'default'                      // Priority
    );
}
add_action('add_meta_boxes', 'add_product_price_meta_box');

// Callback function to display the price meta box
function display_product_price_meta_box($post) {
    // Retrieve the current price value
    $price = get_post_meta($post->ID, '_product_price', true);

    // Output the price input field
    ?>
    <label for="product_price">Price:</label>
    <input type="text" id="product_price" name="product_price" value="<?php echo esc_attr($price); ?>" />
    <?php
}

// Save the price value when the post is saved
function save_product_price($post_id) {
    if (array_key_exists('product_price', $_POST)) {
        update_post_meta(
            $post_id,
            '_product_price',
            sanitize_text_field($_POST['product_price'])
        );
    }
}
add_action('save_post', 'save_product_price');

