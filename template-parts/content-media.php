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
	$limit = $xpanel['homepage-cat4-limit'];
	$cat = $xpanel['homepage-cat4-cat'];
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
			<div class="home-block-small col-lg-6 col-xs-12 pb-10">
				
				<div class="post-thumb media-thumb col-lg-5 col-xs-12 pr-0 pull-right" >
					<a href="<?php the_permalink() ?>">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('postblock-grid');
						}
						else {
							//echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/wp.png" />';
						}
					?>
					</a>
					<span class="media-thumb-icon"><i class="fa fa-play"></i></span>
				</div>
                <div class="col-lg-13 col-lg-7 col-xs-12 pr-0 pl-0">
					<div class="post-title-small gallery-title pt-0">
						<h4 class="mt-0">
                            <a href="<?php the_permalink()?>" title="<?php the_title() ?>">
                              <?php the_title(); ?>
                            </a>
                        </h4>
						<?php urdu_news_posted_on();?>
					</div>
				</div>
				
			</div>
		<?php 
		}

	}
// Restore original Post Data
wp_reset_postdata();
