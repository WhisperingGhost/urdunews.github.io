<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Urdu_News
 */
global $xpanel;
?>
<div class="social-icons-widget">
    <ul>
        <?php if(isset($xpanel['fb-url']) && $xpanel['fb-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['fb-url'] ?>" target="_blank" id="fburl">فیس بک <i class="fa fa-facebook-square pull-left"></i></a></li>
        <?php } ?>
        <?php if(isset($xpanel['twitter-url']) && $xpanel['twitter-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['twitter-url'] ?>" target="_blank" id="twurl">ٹوئٹر <i class="fa fa-twitter-square pull-left"></i></a></li>
        <?php } ?>
        <?php if(isset($xpanel['gplus-url']) && $xpanel['gplus-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['gplus-url'] ?>" target="_blank" id="gpurl"><i class="fa fa-google-plus-square pull-left"></i> گوگل پلس</a></li>
        <?php } ?>
        <?php if(isset($xpanel['youtube-url']) && $xpanel['youtube-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['youtube-url'] ?>" target="_blank" id="yturl">یو ٹیوب <i class="fa fa-youtube pull-left"></i></a></li>
        <?php } ?>
        <?php if(isset($xpanel['instagram-url']) && $xpanel['instagram-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['instagram-url'] ?>" target="_blank" id="insturl">انسٹاگرام <i class="fa fa-instagram pull-left"></i></a></li>
        <?php } ?>
        <?php if(isset($xpanel['linkedin-url']) && $xpanel['linkedin-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['linkedin-url'] ?>" target="_blank" id="liurl">لنکڈ ان <i class="fa fa-linkedin-square pull-left"></i></a></li>
        <?php } ?>
        <?php if(isset($xpanel['reddit-url']) && $xpanel['reddit-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['reddit-url'] ?>" target="_blank" id="rdurl">ریڈٹ <i class="fa fa-reddit-square pull-left"></i></a></li>
        <?php } ?>
        <?php if(isset($xpanel['stumble-url']) && $xpanel['stumble-url'] !="") { ?>
        <li><a href="<?php echo $xpanel['stumble-url'] ?>" target="_blank" id="suurl">سٹمبل اپون <i class="fa fa-stumbleupon-square pull-left"></i></a></li>
        <?php } ?>
    </ul>
</div>