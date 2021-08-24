<?php
/**
 * Main index file for theme.
 */
global $xpanel;

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="col-lg-4 col-md-4 col-sm-12 hidden-xs main-sidebar">
				    <?php get_sidebar();?>
				</div>
				<div class="home-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="block-1">
                        <?php
                            get_template_part( 'template-parts/content', 'latest-post' );
                        ?>
                    </div>
                    <div class="home-separator-1">
                        <?php
                            get_template_part( 'template-parts/content', 'seprater-one' );
                        ?>
                    </div>
                    <div class="feature-block">
                        <div class="col-xs-12">
                            <h2>
                                <?php echo $xpanel['homepage-feature-head']; ?>
                            </h2>
                        </div>
                        <?php
                        get_template_part( 'template-parts/content', 'feature' );
                        ?>
                    </div><!-- //Featured Block -->
                    
                    <div class="gallery-block">
                        <div class="col-xs-12">
                            <h2>
                                <?php echo $xpanel['homepage-cat1-head']; ?>
                            </h2>
                        </div>
                        <?php
                            get_template_part( 'template-parts/content', 'gallery' );
                        ?>
                    </div><!-- //Gallery Block -->
                    
                    <div class="cat-block">
                        <div class="col-xs-12">
                            <h2>
                                <?php echo $xpanel['homepage-cat2-head']; ?>
                            </h2>
                        </div>
                        <?php
                            get_template_part( 'template-parts/content', 'category' );
                        ?>
                    </div><!-- //Category Block -->
                    
                    <div class="cat-block">
                        <div class="col-xs-12">
                            <h2>
                                <?php echo $xpanel['homepage-cat3-head']; ?>
                            </h2>
                        </div>
                        <?php
                            get_template_part( 'template-parts/content', 'category-block' );
                        ?>
                    </div><!-- //Category Block -->
                    
                    <div class="cat-block">
                        <div class="col-xs-12">
                            <h2>
                                <?php echo $xpanel['homepage-cat4-head']; ?>
                            </h2>
                        </div>
                        <?php
                            get_template_part( 'template-parts/content', 'media' );
                        ?>
                    </div><!-- //Category Block -->
                    
                    <div class="cat-block">
                        <div class="col-xs-12">
                            <h2>
                                <?php echo $xpanel['homepage-more-news-head']; ?>
                            </h2>
                        </div>
                        <?php
                            get_template_part( 'template-parts/content', 'more-news' );
                        ?>
                    </div><!-- //Category Block -->
				</div><!--//Post Blocks -->
				<div class="hidden-lg hidden-md hidden-sm col-xs-12 main-sidebar-small">
				    <?php dynamic_sidebar('sidebar-1');?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
