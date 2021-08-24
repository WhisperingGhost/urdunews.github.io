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
	$limit = $xpanel['homepage-feature-limit'];
	$catid = $xpanel['homepage-feature-cat'];
	$args = array (
            'post_type'      => 'post',
            'posts_per_page' => $limit,
            'cat' => $catid,
            'post_status'    => array( 'publish' ),
            'orderby' => 'ASC'
    );
	$r = new WP_Query( $args );
	if ( $r->have_posts() ) {
		while ( $r->have_posts() ) {
			$r->the_post(); 
			?>
			<div class="feature-block-post mb-10 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="post-thumb col-lg-6 col-xs-12 pl-0" >
					<a href="<?php the_permalink() ?>">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('postblock-large');
						}
						else {
                            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/nothumb-360.jpg" />';
                        }
					?>
					</a>
				</div>
				<div class="feature-post-title col-lg-6 col-xs-12 pr-0">
					<div class="post-title-sperater-1">
						<h3>
                            <a href="<?php the_permalink()?>" title="<?php the_title() ?>">
                                <?php the_title(); ?>
                            </a>
						</h3>
					</div>
					<div class="post-des">
						<p>
							<?php
							the_excerpt();
							?>
						</p>
					</div>
					<div class="post-refrence">
						<?php urdu_news_posted_on(); ?>
					</div>
				</div>
			</div>
		<?php 
		}

	}
// Restore original Post Data
wp_reset_postdata();
