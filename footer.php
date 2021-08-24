<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Urdu_News
 */
global $xpanel;
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="f-head">
                <h1>
                    <?php echo $xpanel['footer-about-text']?>
                </h1>
			</div>
			<div class="Footer-menus-1">
				<div class="footer-menu-top col-lg-12">
				<?php wp_nav_menu( array( 'theme_location' => 'Footer' ) ); ?>
				</div>
			</div>
			<div class="col-lg-12">
					<div class="footer-copyrights">
						<p><?php echo $xpanel['footer-copyright'] ?></p>
					</div><!--#Footer Copyright Info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script language="JavaScript" type="text/javascript">
$(document).ready(function() {    
    $('#searchInput').UrduEditor("14px");   
    $('textarea').UrduEditor("18px");
    
    $('#comment-toggle').click(function(){
        $('#comment-box').slideToggle();
    });
    $('#shareBtnSingle').click(function(){
        $('#entryShareBox').slideToggle();
    });
});  
</script>
<script type="text/javascript">
  $(document).ready(function() { 
  $('#incSize').click(function(){    
        curSize= parseInt($('#post-conten-single p').css('font-size')) + 2;
  if(curSize<=40)
        $('#post-conten-single p').css('font-size', curSize);
        });  
  $('#dcrSize').click(function(){    
        curSize= parseInt($('#post-conten-single p').css('font-size')) - 2;
  if(curSize>=12)
        $('#post-conten-single p').css('font-size', curSize);
        }); 
 });
</script>
<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery('#main, .main-sidebar').theiaStickySidebar({
      // Settings
      additionalMarginTop: 30
    });
});
</script>
</body>
</html>
