<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Urdu_News
 */
global $xpanel;
?><!DOCTYPE html>
<html lang="ur">
<head dir="rtl">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
if(is_single()) {
?>
<meta property="og:title" content="<?php the_title() ?>"/>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:site_name" content="<?php bloginfo('name') ?>"/>
<?php 
if( has_post_thumbnail() ) {
$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); 
?>
<meta property="og:image" content="<?php echo $image[0] ?>"/>
<?php } }?>
<?php wp_head(); ?>
<script type="text/javascript">
$(document).ready(function(){
    $('.related-block-post-grid').matchHeight();
    $('.home-block-small').matchHeight();
    $('.search-block-post-grid').matchHeight();
    $('.block-post-grid').matchHeight();
});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site" dir="rtl">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'urdu-news' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container head-top">
			
            <div class="logo col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo $xpanel['logo']['url'] ?>">
				</a>
			</div><!-- // Logo -->
           
           <div class="header-banner col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<?php dynamic_sidebar('header-top') ?>
			</div><!--// Header Banner -->
            
		</div><!-- .container -->
		<div class="main-menu">
			<div class="container pl-0 pr-0">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle pt-10 pb-10 pl-10 pr-10 mr-10" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			</div><!--.container-->
		</div><!--.main-menu-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
