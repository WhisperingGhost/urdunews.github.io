<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Urdu_News
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-sm-6 col-xs-12 hidden-lg hidden-md hidden-sm">
		<?php 
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('postblock-large');
			}
			else {
			}
		?>
	</div>
	<div class="col-sm-6 col-xs-12">
	<header class="entry-header archive-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php urdu_news_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content archive-content">
		<p>
			<?php 
				the_excerpt();
			?>
		</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //urdu_news_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
	<div class="col-sm-6 col-xs-12 hidden-xs ">
		<?php 
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
			}
			else {
			}
		?>
	</div>
</article><!-- #post-## -->
