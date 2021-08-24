<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Urdu_News
 */
global $xpanel;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="post-info pt-5 pb-5">
                
                <?php 
                    if ( isset( $xpanel['show-sharing'] ) && $xpanel['show-sharing'] == TRUE ) {
                ?>
                <span class="share-btn-pull pull-left">
                    <a href="javascript:" id="shareBtnSingle" title="Share This Post" class="mr-10"> <i class="fa fa-share-alt"></i> شیئر کریں</a>
                </span>
                <?php } ?>
                <?php 
                    if ( isset( $xpanel['show-comment-count'] ) && $xpanel['show-comment-count'] == TRUE ) {
                ?>
                <small><?php $comments_count = wp_count_comments(get_the_ID()); ?></small>
                <?php } ?>
                <?php 
                    if ( isset( $xpanel['show-author'] ) && $xpanel['show-author'] == TRUE ) {
                ?>
                <span class="post-author ml-10">
                    <i class="fa fa-user pl-5"></i>
                    <?php printf( '<a href="%1$s">%2$s</a>',
                        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                        esc_html( get_the_author() )
                    ); ?>
                </span>
                <?php } ?>
                <?php 
                    if ( isset( $xpanel['show-posted-date'] ) && $xpanel['show-posted-date'] == TRUE ) {
                ?>
                <?php urdu_news_posted_on() ?>
                <?php } ?>
                <?php 
                    if ( isset( $xpanel['show-comment-count'] ) && $xpanel['show-comment-count'] == TRUE ) {
                ?>
                <span class="post-comments mr-10">
                    <i class="fa fa-comment-o pl-5"></i> <?php echo $comments_count->approved ?> <?php _e("تبصرے") ?>
                </span>
                <?php } ?>
                <?php 
                    if ( isset( $xpanel['show-views'] ) && $xpanel['show-views'] == TRUE ) {
                ?>
                <span class="post-views mr-10"><i class="fa fa-eye pl-5"></i> <small><?php echo getViews(get_the_ID()) ?></small> <?php _e("مناظر") ?></span>
                <?php } ?>
            </div>
		</div><!-- .entry-meta -->
		<div class="entry-share-box" id="entryShareBox">
		    <?php get_template_part( 'template-parts/social', 'sharebox' ); ?>
		</div>
		<?php
		endif; ?>
        <div class="entry-image">
            <?php 
                if (isset( $xpanel['show-post-featured'] ) && $xpanel['show-post-featured'] == TRUE) {
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('post-head');
                    }
                    else {
                        echo '<img src="' . get_template_directory_uri( '/' ) . '/images/nothumb-large.jpg" />';
                    }
                } 
                
            ?>
        </div>
        
	</header><!-- .entry-header -->
   <div class="above-post-ad row ml-0 mr-0">
       <?php dynamic_sidebar('abovepost-ad'); ?>
   </div>
    <div class="entry-controls">
         <?php 
            if ( isset( $xpanel['show-zoom'] ) && $xpanel['show-zoom'] == TRUE ) {
         ?>
         <span class="pull-left">
            <a href="javascript:" id="incSize" title="Increase Font Size" class="mr-10"><i class="fa fa-search-plus"></i></a>
            <a href="javascript:" id="dcrSize" title="Increase Font Size"><i class="fa fa-search-minus"></i></a>
         </span>
         <?php } ?>
    </div>
	<div class="entry-content" id="post-conten-single">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'urdu-news' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dynamic_sidebar('belowpost-ad'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
