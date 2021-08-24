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
	$limit = $xpanel['homepage-latest-block-count'];
	$args = array (
            'post_type'      => 'post',
            'posts_per_page' => $limit,
            'post_status'    => array( 'publish' ),
            'orderby' => 'ASC'
    );
	$r = new WP_Query( $args );
	$count=0;
	if ( $r->have_posts() ) {
		while ( $r->have_posts() ) {
			$count++;
			$r->the_post(); 
			if($count == 1):
			?>
			<div class="home-block pl-0 pr-0 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php echo $count;?>">
				<div class="row ml-0 mr-0 pt-10 pb-10 mb-10">
					<div class="post-title">
						<h2>
                            <a href="<?php the_permalink()?>" title="<?php the_title() ?>"><?php the_title(); ?></a>
                        </h2>
						
					</div>
				</div>
				<div class="row ml-0 mr-0">
                    <div class="post-thumb col-lg-7 pl-0" >
                        <a href="<?php the_permalink() ?>">
                        <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('postblock-large');
                            }
                            else {
                                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/nothumb-grid.jpg" />';
                            }
                        ?>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <div class="post-des">
                            <p>
                                <?php
                                     the_excerpt();
                                ?>
                            </p>
                        </div>
                        <div class="post-refrence">
                            <?php urdu_news_posted_on();?>
                        </div>
                    </div><!--.col-->
				</div>
			</div>
			<?php else:?>
			<div class="home-block-small col-lg-4 col-md-4 col-sm-6 col-xs-12 pl-0 pr-0">
				
				<div class="post-thumb col-lg-12 col-xs-12" >
					<a href="<?php the_permalink() ?>">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						else {
                            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/nothumb-360.jpg" />';
                        }
					?>
					</a>
				</div>
                <div class="col-lg-12 col-xs-12">
					<div class="post-title-small">
						<h4>
                            <a href="<?php the_permalink()?>" title="<?php the_title() ?>"><?php the_title(); ?></a>
                        </h4>
					</div>
				</div>
				<div class="col-lg-12 col-xs-12 pt-0 post-des-block">
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
		endif;
		}

	}
// Restore original Post Data
wp_reset_postdata();
