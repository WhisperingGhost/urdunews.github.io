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
	$limit = $xpanel['homepage-cat3-limit'];
	$cat = $xpanel['homepage-cat3-cat'];
	$args = array (
            'post_type'      => 'post',
            'posts_per_page' => $limit,
            'cat' => $cat,
            'post_status'    => array( 'publish' ),
            'orderby' => 'ASC'
    );
	$r = new WP_Query( $args );
	if ( $r->have_posts() ) {
		while ( $r->have_posts() ) {
			$r->the_post(); 
			?>
			<div class="home-block-cat col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-8 col-xs-12">
					<div class="post-title-small cat-post-title">
                        <h3>
                            <a href="<?php the_permalink()?>" title="<?php the_title() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
					</div>
					<div class="post-des hidden-xs">
                        <p>
                            <?php 
                                the_excerpt();
                            ?>
                        </p>
					<?php urdu_news_posted_on();?>
					</div>
				</div>
				<div class="post-thumb col-lg-4 col-xs-12 pr-0" >
					<a href="<?php the_permalink() ?>">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('postblock-large');
						}
						else {
							//echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/wp.png" />';
						}
					?>
					</a>
				</div>
			</div>
		<?php 
		}

	}
// Restore original Post Data
wp_reset_postdata();
