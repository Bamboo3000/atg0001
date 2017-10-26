<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function atg_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'atg' );

	// Add default posts and comments RSS feed links to head.
	// add_theme_support( 'automatic-feed-links' );

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
	add_image_size( 'atg-image-big', 1200, 9999);
	add_image_size( 'atg-image-medium', 800, 9999);
	add_image_size( 'atg-image-small', 600, 9999);
	add_image_size( 'atg-product-big', 720, 720, true );
	add_image_size( 'atg-product-medium', 400, 400, true );
	add_image_size( 'atg-product-small', 300, 300, true );
	add_image_size( 'atg-product-xsmall', 200, 200, true );
	add_image_size( 'atg-product-xxsmall', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 1000;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'shop'    => __( 'Shop Menu', 'atg' ),
		'social' => __( 'Social Links Menu', 'atg' ),
		'menu'    => __( 'Main Menu', 'atg' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 500,
		'height'      => 300,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'atg_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function atg_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'atg' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'atg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'atg' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'atg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'atg' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'atg' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'atg_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function atg_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'atg' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'atg_excerpt_more' );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function atg_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'atg_front_page_template' );



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// function wc_format_sale_price( $regular_price, $sale_price ) {
// 	$price = ( is_numeric( $sale_price ) ? wc_price( $sale_price ) : $sale_price );
// 	return apply_filters( 'woocommerce_format_sale_price', $price, $regular_price, $sale_price );
// }

// function my_search_form($html)
// {
//     return str_replace('Search ', 'Search ', $html);
// }
// add_filter('get_search_form', 'my_search_form');

/**
 * Disable responsive image support (test!)
 */

// Clean the up the image from wp_get_attachment_image()
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );

    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );

    return $attr;

 }, PHP_INT_MAX );

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_empty_array',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_empty_array', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );