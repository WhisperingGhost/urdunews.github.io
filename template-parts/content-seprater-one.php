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
	$catid = $xpanel['homepage-seprater-cat'];
	$args = array (
            'post_type'      => 'post',
            'posts_per_page' => 2,
            'cat' => $catid,
            'post_status'    => array( 'publish' ),
            'orderby' => 'ASC'
    );
	$r = new WP_Query( $args );
	if ( $r->have_posts() ) {
		while ( $r->have_posts() ) {
			$count++;
			$r->the_post(); 
			?>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pr-0 pl-0">
				<div class="col-lg-12 col-xs-12 pr-0 pl-0">
					<div class="post-title-sperater-1">
                        <h3>
						  <a href="<?php the_permalink()?>" title="<?php the_title() ?>"><?php the_title(); ?></a>
                        </h3>
						
					</div>
				</div>
				<div class="col-lg-12 col-xs-12 pr-0 pl-0">
					<div class="post-refrence">
						<?php urdu_news_posted_on();?>
					</div>
				</div><!--.col-->
			</div>
		<?php 
		}

	}
// Restore original Post Data
wp_reset_postdata();
