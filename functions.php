<?php
/**
 * idowebservices functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package idowebservices
 */

if ( ! function_exists( 'idowebservices_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function idowebservices_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on idowebservices, use a find and replace
	 * to change 'idowebservices' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'idowebservices', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'idowebservices' ),
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
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'idowebservices_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'idowebservices_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function idowebservices_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'idowebservices_content_width', 640 );
}
add_action( 'after_setup_theme', 'idowebservices_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function idowebservices_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'idowebservices' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'idowebservices' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer-left', 'idowebservices' ),
		'id'            => 'sidebar-footer-left',
		'description'   => esc_html__( 'Add widgets here.', 'idowebservices' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-left-2', 'idowebservices' ),
		'id'            => 'sidebar-footer-left-2',
		'description'   => esc_html__( 'Add widgets here.', 'idowebservices' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-right', 'idowebservices' ),
		'id'            => 'sidebar-footer-right',
		'description'   => esc_html__( 'Add widgets here.', 'idowebservices' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-right-2', 'idowebservices' ),
		'id'            => 'sidebar-footer-right-2',
		'description'   => esc_html__( 'Add widgets here.', 'idowebservices' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'idowebservices_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function idowebservices_scripts() {
    //main stylesheet
	wp_enqueue_style( 'idowebservices-style', get_stylesheet_uri() );
    
    //bootstrap
    wp_enqueue_style('idowebservices-style-bootstrap', get_stylesheet_directory_uri() . '/assets/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '1.1', 'all');
    
    //materialize stylesheet
    wp_enqueue_style( 'idowebservices-style-materialize', get_stylesheet_directory_uri() . '/assets/bower_components/Materialize/dist/css/materialize.min.css', array(), '1.1', 'screen,projection' );
    //materialize stylesheet-rtl
    wp_enqueue_style( 'idowebservices-style-materialize-rtl', get_stylesheet_directory_uri() . '/assets/bower_components/Materialize/dist/css/materialize-rtl.min.css', array(), '1.1', 'screen,projection' );
    //materialize stylesheet-rtl
    wp_enqueue_style( 'idowebservices-style-materialize-ghpages', get_stylesheet_directory_uri() . '/assets/bower_components/Materialize/dist/css/ghpages-materialize.css', array(), '1.1', 'screen,projection' );
    
    //font awsome
    wp_enqueue_style( 'fontawsome', get_stylesheet_directory_uri() . '/assets/font-awesome/font-awesome/css/font-awesome.min.css',false,'4.5', 'all'  );
    
     //devicos
    wp_enqueue_style( 'devicos', get_stylesheet_directory_uri() . '/assets/bower_components/devicons/css/devicons.min.css',false,'4.5', 'all'  );
    
    //rtl stylesheet
    wp_enqueue_style( 'idowebservices-style-rtl', get_stylesheet_directory_uri() . '/rtl.css', array(), '1.1', 'all' );
    
    //**********scripts
	wp_enqueue_script( 'idowebservices-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'idowebservices-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
    //jQuery
    wp_enqueue_script('idowebservices-jQuey', get_template_directory_uri() . '/assets/bower_components/jquery/dist/jquery.min.js', array(), '1.1', true );
    
    //bootstrap js
    wp_enqueue_script('idowebservices-bootstrap', get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), '1.1', 'true');
    
    //materialize
    wp_enqueue_script('idowebservices-materialiaze', get_template_directory_uri() . '/assets/bower_components/Materialize/dist/js/materialize.min.js', array(), '1.1', true );
    
    //modernizer
    wp_enqueue_script('idowebservices-modernizer', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '1.1', true );
    
    //personalized
    wp_enqueue_script('idowebservices-personalized', get_template_directory_uri() . '/assets/js/main.js', array(), '1.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'idowebservices_scripts' );

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

/**
*  Costum Post Types
*/
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Dev Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Dev Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Dev Services', 'text_domain' ),
		'name_admin_bar'        => __( 'Dev Services', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Dev Services', 'text_domain' ),
		'add_new_item'          => __( 'Add New Dev Service', 'text_domain' ),
		'add_new'               => __( 'Add Dev Service', 'text_domain' ),
		'new_item'              => __( 'New Dev Service', 'text_domain' ),
		'edit_item'             => __( 'Edit Dev Service', 'text_domain' ),
		'update_item'           => __( 'Update Dev Service', 'text_domain' ),
		'view_item'             => __( 'View Dev Service', 'text_domain' ),
		'search_items'          => __( 'Search Dev Service', 'text_domain' ),
		'not_found'             => __( 'Dev Service Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Dev Service Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Dev Services', 'text_domain' ),
		'description'           => __( 'Dev Services Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-editor-code',
		'capability_type'       => 'page',
	);
	register_post_type( 'dev services', $args );
    
    /*seo services*/
    
    $labels = array(
		'name'                  => _x( 'SEO Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'SEO Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'SEO Services', 'text_domain' ),
		'name_admin_bar'        => __( 'SEO Services', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All SEO Services', 'text_domain' ),
		'add_new_item'          => __( 'Add New SEO Service', 'text_domain' ),
		'add_new'               => __( 'Add SEO Service', 'text_domain' ),
		'new_item'              => __( 'New SEO Service', 'text_domain' ),
		'edit_item'             => __( 'Edit SEO Service', 'text_domain' ),
		'update_item'           => __( 'Update SEO Service', 'text_domain' ),
		'view_item'             => __( 'View SEO Service', 'text_domain' ),
		'search_items'          => __( 'Search SEO Service', 'text_domain' ),
		'not_found'             => __( 'SEO Service Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'SEO Service Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'SEO Services', 'text_domain' ),
		'description'           => __( 'SEO Services Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-dashboard',
		'capability_type'       => 'page',
	);
	register_post_type( 'seo services', $args );
    
    /*Personal Skills*/
    /*seo services*/
    
    $labels = array(
		'name'                  => _x( 'Personal skills', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Personal skill', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Personal skills', 'text_domain' ),
		'name_admin_bar'        => __( 'Personal skills', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Personal skills', 'text_domain' ),
		'add_new_item'          => __( 'Add New Personal skill', 'text_domain' ),
		'add_new'               => __( 'Add Personal skill', 'text_domain' ),
		'new_item'              => __( 'New Personal skill', 'text_domain' ),
		'edit_item'             => __( 'Edit Personal skill', 'text_domain' ),
		'update_item'           => __( 'Update Personal skill', 'text_domain' ),
		'view_item'             => __( 'View Personal skill', 'text_domain' ),
		'search_items'          => __( 'Search Personal skill', 'text_domain' ),
		'not_found'             => __( 'Personal skill Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Personal skill Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Personal skills', 'text_domain' ),
		'description'           => __( 'Personal skills Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'capability_type'       => 'page',
	);
	register_post_type( 'Personal skills', $args );
}
add_action( 'init', 'custom_post_type', 0 );

/** repalce the excerpt "more" text by a link ****************************/
function new_excerpt_more($more) {
 global $post;
    return '...<a class="moretag" href="'.get_permalink($post->ID) . '">קרא עוד &raquo;</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
    
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Remove ?ver=x.x from css and js
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );