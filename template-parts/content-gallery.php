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
	$limit = $xpanel['homepage-cat1-limit'];
	$cat = $xpanel['homepage-cat1-cat'];
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
			<div class="home-block-small col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="post-thumb col-xs-12 pr-0 pl-0" >
					<a href="<?php the_permalink() ?>">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						else {
							//echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/wp.png" />';
						}
					?>
					</a>
				</div>
				<div class="col-xs-12 pr-0 pl-0">
					<div class="post-title-small gallery-title">
						<h3>
                            <a href="<?php the_permalink()?>" title="<?php the_title() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
					</div>
				</div>
				<div class="col-xs-12 pr-0 pl-0 post-des-block">
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
