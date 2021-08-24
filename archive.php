<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Urdu_News
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="col-lg-4 col-md-4 col-xs-12 col-lg-4 col-md-4 col-sm-4 hidden-xs">
				    <?php get_sidebar();?>
				</div>
				<div class="col-lg-8 col-md-8 col-xs-12">
                    <?php
                    if ( have_posts() ) : ?>

                        <header class="page-header">
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="archive-description">', '</div>' );
                            ?>
                        </header><!-- .page-header -->

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                    
                            get_template_part( 'template-parts/content', 'archive' );

                        endwhile;


                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>
                    <div class="page-navigation text-center">
                        <?php if ( function_exists( 'urdu_news_page_navi' ) ) { ?>
                            <?php urdu_news_page_navi(); ?>
                        <?php } else { ?>
                            <?php the_posts_navigation(); ?>
                        <?php } ?>
                    </div>
				
				</div>
				<div class="hidden-lg hidden-md hidden-sm col-xs-12">
				    <?php dynamic_sidebar('sidebar-1');?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
