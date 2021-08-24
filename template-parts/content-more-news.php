<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Urdu_News
 */
global $xpanel;
?>
<?php 
	$limit = $xpanel['homepage-more-news-limit'];
	$args = array (
            'post_type'      => 'post',
            'posts_per_page' => $limit,
            'post_status'    => array( 'publish' ),
            'offset'         => $limit
    );
	$r = new WP_Query( $args );
	if ( $r->have_posts() ) {
		while ( $r->have_posts() ) {
			$r->the_post(); 
			?>
			<div class="home-block-small col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="post-thumb col-xs-12 pr-0 pl-0" >
					<a href="<?php the_permalink() ?>">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						else {
                            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/nothumb-grid.jpg" />';
                        }
					?>
					</a>
				</div>
				<div class="col-xs-12 pl-0 pr-0">
					<div class="post-cat">
					<?php
						$category = get_the_category($post->ID); 
						$catname =$category[0]->cat_name;
						// Get the ID of a given category
						$category_id = get_cat_ID( $catname );
					 
						// Get the URL of this category
						$category_link = get_category_link( $category_id );
					?>
                        <!-- Print a link to this category -->
                        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category[0]->cat_name;?>">
                           <?php echo $category[0]->cat_name;?>
                        </a>
					</div>
					<div class="post-title-small gallery-title">
                        <h4>
                            <a href="<?php the_permalink()?>" title="<?php the_title() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h4>
					</div>
				</div>
				<div class="col-xs-12 pt-0 pl-0 pr-0 post-des-block">
					<div class="post-des">
                        <p>
                            <?php 
                                the_excerpt();
                            ?>
                        </p>
					</div>
				</div><!--.col-->
			</div>
		<?php 
		}

	}
// Restore original Post Data
wp_reset_postdata();
