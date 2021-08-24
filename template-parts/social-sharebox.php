<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Urdu_News
 */
global $xpanel;
$current_url = home_url(add_query_arg(array(),$wp->request));
?>
<div class="social-share-box" id="socialShareBox">
	<ul>
		<li>
			<a href="http://www.facebook.com/sharer.php?u=<?php echo $current_url ?>" target="_blank" id="fb">
				<i class="fa fa-facebook"></i>
			</a>
		</li>
		<li>
			<a href="https://twitter.com/share?url=<?php echo $current_url ?>" target="_blank" id="tw">
				<i class="fa fa-twitter"></i>
			</a>
		</li>
		<li>
			<a href="https://plus.google.com/share?url=<?php echo $current_url ?>" target="_blank" id="gp">
				<i class="fa fa-google-plus"></i>
			</a>
		</li>
		<li>
			<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" id="pn">
				<i class="fa fa-pinterest"></i>
			</a>
		</li>
		<li>
			<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url ?>" target="_blank" id="li">
				<i class="fa fa-linkedin"></i>
			</a>
		</li>
		<li>
			<a href="http://reddit.com/submit?url=<?php echo $current_url ?>" target="_blank" id="rdt">
				<i class="fa fa-reddit"></i>
			</a>
		</li>
		<li>
			<a href="http://www.stumbleupon.com/submit?url=<?php echo $current_url ?>" target="_blank" id="su">
				<i class="fa fa-stumbleupon"></i>
			</a>
		</li>
	</ul>
	
</div>