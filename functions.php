<?php
/**
 * Urdu News functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Urdu_News
 */

if ( ! function_exists( 'urdu_news_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function urdu_news_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Urdu News, use a find and replace
	 * to change 'urdu-news' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'urdu-news', get_template_directory() . '/languages' );

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
    
    add_image_size( 'thumbnail-widget', 420, 280, array( 'center', 'center' ) );

	add_image_size( 'postblock-large', 420, 320, array( 'center', 'center' ) );

	add_image_size( 'postblock-small', 120, 120, array( 'center', 'center' ) );

	add_image_size( 'postblock-grid', 360, 280, array( 'center', 'center' ) );

	add_image_size( 'post-head', 740, 420 );
    
    add_image_size( 'post-head-large', 1200, 420, array( 'center', 'center' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'urdu-news' ),
		'Footer' => esc_html__( 'Fotter-Top', 'urdu-news' ),
		'Footer-b' => esc_html__( 'Fotter-Bottom', 'urdu-news' ),
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
	add_theme_support( 'custom-background', apply_filters( 'urdu_news_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'urdu_news_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function urdu_news_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'urdu_news_content_width', 640 );
}
add_action( 'after_setup_theme', 'urdu_news_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function urdu_news_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Featured Widget Area', 'urdu-news' ),
		'id'            => 'sidebar-featured',
		'description'   => esc_html__( 'Add widgets here.', 'urdu-news' ),
		'before_widget' => '<section id="%1$s" class="widget featured-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'urdu-news' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'urdu-news' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
	register_sidebar( array(
		'name'          => esc_html__( 'AD - Header', 'urdu-news' ),
		'id'            => 'header-top',
		'description'   => esc_html__( 'Add widgets here.', 'urdu-news' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s add-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'AD - Above Post', 'urdu-news' ),
		'id'            => 'abovepost-ad',
		'description'   => esc_html__( 'Add widgets here.', 'urdu-news' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s add-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'AD - Below Post', 'urdu-news' ),
		'id'            => 'belowpost-ad',
		'description'   => esc_html__( 'Add widgets here.', 'urdu-news' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s add-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'unews' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'unews' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'unews' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
}
add_action( 'widgets_init', 'urdu_news_widgets_init' );
// Function to get the client ip address
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
//Get User Country By IP 
function ip_visitor_country($ip_address,$type)
{

    $client = $ip_address;
    $output = $type;
    $country  = "Unknown";

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

    if($ip_data && $ip_data['geoplugin_countryName'] != null) {
    	if($output == 'name') {
    		$country = $ip_data['geoplugin_countryName'];
    	}
    	elseif($output == 'code') {
    		$country = $ip_data['geoplugin_countryCode'];
    	}
    	elseif($output == 'city') {
    		$country = $ip_data['geoplugin_city'];
    	}
    	else {
    		$country = $ip_data['geoplugin_countryName'];
    	}
        
    }

    return $country;
}

/************************************************************************
* Import Demo Data
*************************************************************************/
function ocdi_import_files() {
    return array(
        array(
            'import_file_name'             => 'Demo Import 1',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'admin/demo/content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'admin/demo/widgets.json',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'admin/demo/customizer.dat',
            'import_preview_image_url'     => trailingslashit( get_template_directory() ) . 'admin/demo/screen-image.jpg',
            'import_notice'                => __( 'After you import this demo, you will have to setup the Homepage separately via <strong>Appearance>Theme Settings</strong> OR <strong>Appearance>Customize</strong>.', 'upaper' ),
        )
    );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

/************************************************************************
* Extended Example:
* Way to set menu, import revolution slider, and set home page.
*************************************************************************/
function ocdi_after_import( $selected_import ) {
	$top_menu = get_term_by( 'name', 'Top Nav', 'nav_menu' );
    if ( isset( $top_menu->term_id ) ) {
        set_theme_mod( 'nav_menu_locations', array(
                'primary' => $top_menu->term_id
            )
        );
    }
}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import' );
/*
* Excerpt Control
*/
function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	$moretag = '<a class="read-more" href="'. get_permalink( get_the_ID() ) .'">' . __( " ..مزید پڑھیں ", "unews" ) . '</a>';
    return $moretag;
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


/**
 * Modify Archive Titles.
 */
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( 'کیٹا گری: ', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( 'ٹیگ: ', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);

/**
 * Remove Redux Ads
 */
function removeDemoMod() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'removeDemoMod');

add_action( 'admin_menu', 'remove_redux_menu',12 );
function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}

if ( ! function_exists( 'redux_disable_dev_mode_plugin' ) ) {
    function redux_disable_dev_mode_plugin( $redux ) {
        if ( $redux->args['opt_name'] != 'redux_demo' ) {
            $redux->args['dev_mode'] = false;
            $redux->args['forced_dev_mode_off'] = false;
        }
    }
    add_action( 'redux/construct', 'redux_disable_dev_mode_plugin' );
}
/**
 * Load Custom cs and js file.
 */
require get_template_directory() . '/inc/register-scripts.php';
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
 * Load Urdu Date
 */
require get_template_directory() . '/inc/urdu-date.php';

/**
 * Load Custom Views Counter
 */
require get_template_directory() . '/inc/views-counter.php';
/* 
 Load Custom Widgets.
 */
require get_template_directory() . '/inc/widget-catposts.php';
require get_template_directory() . '/inc/widget-featured-pots.php';
require get_template_directory() . '/inc/widget-social.php';

/** Include the TGM_Plugin_Activation class. */
require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';

/* Include Urdu Kewyboard */
include_once('inc/urdu-keyboard.php');
/* Include 1 Click Demo Import */
include_once('inc/one-click-demo-import.php');

/**
 * Load Theme Admin Panel.
 */
require get_template_directory() . '/admin/admin-init.php';
