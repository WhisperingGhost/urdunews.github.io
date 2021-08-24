<?php
/**
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Urdu_News
 */

get_header(); ?>

	<div id="primary" class="content-area container pt-10">
		<div class="col-lg-4 col-md-4 col-xs-12 col-lg-4 col-md-4 col-sm-4 hidden-xs">
            <?php get_sidebar();?>
        </div>
        <div class="col-lg-8 col-md-8 col-xs-12">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
		<div class="hidden-lg hidden-md hidden-sm col-xs-12">
            <?php dynamic_sidebar('sidebar-1');?>
        </div>
	</div><!-- #primary -->

<?php
get_footer();
