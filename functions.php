<?php
define( '_S_VERSION', '1.0.0' );

function vape_setup() {
	load_theme_textdomain( 'vape', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'vape' ),
			'menu-2' => esc_html__( 'Product', 'vape' ),
		)
	);
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
	add_theme_support(
		'custom-background',
		apply_filters(
			'vape_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
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
add_action( 'after_setup_theme', 'vape_setup' );
function vape_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vape_content_width', 640 );
}
add_action( 'after_setup_theme', 'vape_content_width', 0 );


function vape_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vape' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vape' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu', 'vape' ),
			'id'            => 'menu_footer',
			'description'   => esc_html__( 'Add widgets here.', 'vape' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer support', 'vape' ),
			'id'            => 'footer_support',
			'description'   => esc_html__( 'Add widgets here.', 'vape' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer contact', 'vape' ),
			'id'            => 'footer_contact',
			'description'   => esc_html__( 'Add widgets here.', 'vape' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'vape_widgets_init' );

function vape_scripts() {
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', [], '1.1.0' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', [], '1.8.1' );
	wp_enqueue_style( 'vape-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vape-style', 'rtl', 'replace' );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', [ 'jquery' ], '1.1.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', [ 'jquery' ], '1.8.1', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', [ 'jquery' ], '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vape_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/class-vape-icons.php';

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

if ( ! function_exists( 'rwmb_meta' ) ) {
	/**
	 * Fallback function metabox.
	 *
	 * @return mixed
	 */
	function rwmb_meta( $key, $args = [], $post_id = null ) {
		return null;
	}
}