<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				<div class="single-post-content col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <?php
                    while ( have_posts() ) : the_post();
                       setViews(''.$ip_address.'',''.get_the_ID().'');
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile; // End of the loop.
                    ?>
                    <div class="below-post row">
                        <?php 
                            if ( isset( $xpanel['show-related-posts'] ) && $xpanel['show-related-posts'] == TRUE ) {
                        ?>
                        <div class="related-posts row mb-10 ml-0 mr-0">
                            <div class="related-posts-header text-center">
                                <h2><?php echo _e("مزید پڑھیں") ?></h2>
                            </div>
                            <div class="related-posts-container pt-10">
                                <?php 
                                    $categories = get_the_category();
                                    $category_id = $categories[0]->cat_ID;
                                    $block_cat = $category_id;
                                    set_query_var( 'block_cat', $block_cat );
                                    get_template_part( 'template-parts/posts', 'related' );
                                ?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="comments-row ml-0 mr-0 row">
                            <div class="comment-control"><a href="javascript:" id="comment-toggle">Load/Hide Comments</a></div>
                            <div id="comment-box">
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                            </div>
                        </div>
                    </div><!--//Below Post Row -->
				</div>
				
				<div class="hidden-lg hidden-md hidden-sm col-xs-12">
				    <?php dynamic_sidebar('sidebar-1');?>
				</div>
				
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
