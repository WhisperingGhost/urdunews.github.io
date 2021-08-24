<?php
/*
* In this file we will register all the stykes and scripts reuired in theme.
*/
function opl_register_scripts_styles() {
	
	//jQuery
	wp_deregister_script( 'jquery');

	//jQuery
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');

	wp_enqueue_script( 'urdu-news-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'urdu-news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//Bootstrap CSS
	wp_enqueue_style( 'unews-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
    
    //Default Stylesheet
    wp_enqueue_style( 'urdu-news-style', get_stylesheet_uri() );
    
    //Font Awesome CSS
	wp_enqueue_style( 'unews-font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );

	//Urdu Fonts
	wp_enqueue_style( 'unews-urdu-fonts', get_template_directory_uri() . '/css/fonts.css' );
    

	//Bootstrap JS
	wp_enqueue_script( 'unews-bootstrap-j', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
    
    //Bootstrap JS
	wp_enqueue_script( 'js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    
    //JS Browser Functions
	wp_enqueue_script( 'unews-js-browser', get_template_directory_uri() . '/js/jquery.browser.js', array(), '', false);
    
    //jQuery matchHeight
	wp_enqueue_script( 'unews-matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '', tre);

	//Urdu Writing Support
	wp_enqueue_script( 'unews-urdueditor', get_template_directory_uri() . '/js/urdueditor/jquery.UrduEditor.js');
    
    //Sticky Sidebar JS
	wp_enqueue_script( 'stylo-sticky-sidebar-js', get_template_directory_uri() . '/js/theia-sticky-sidebar.js', array(), '', true);
		
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'opl_register_scripts_styles' );