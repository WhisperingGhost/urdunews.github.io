<?php
/**
 * Custom Post Views Counter for UrduPaper
 *
 * @package Urdu Paper
 */

//Create Custom Table For Storing Views Count Data
function create_views_table(){
	global $wpdb;
	$table_name = $wpdb->prefix . "upviews";
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  user_ip varchar(100) NOT NULL,
	  post_id varchar(255) NOT NULL,
	  country varchar(10) NOT NULL,
	  views_value varchar(255) DEFAULT '0' NOT NULL,
	  time timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	  UNIQUE KEY id (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}
add_action("after_switch_theme", "create_views_table");


function setViews($ip,$id) {
    global $wpdb;
	$table_name = $wpdb->prefix . "upviews";

	$check_view = $wpdb->get_row("SELECT * FROM $table_name WHERE user_ip = '".$ip."' AND post_id = '".$id."' ");

	$country = ip_visitor_country($ip,'code');

	if(!$check_view) {
		$sql = $wpdb->insert(
			''.$table_name.'',
			array(
				'user_ip' => $ip,
				'post_id' => $id,
				'views_value' => 1,
				'country' => $country
			)
		);
		if($sql) {
			$current_views = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE post_id ='$id'" );
			$count_key = 'post_views_count';
		    $count = get_post_meta($id, $count_key, true);
		    if($count==''){
		        $count = 0;
		        delete_post_meta($id, $count_key);
		        add_post_meta($id, $count_key, '0');
		    }else{
		        $count = $current_views;
		        update_post_meta($id, $count_key, $count);
		    }

		} //SQL
	} 
}
function getViews($id){
	global $wpdb;
	$table_name = $wpdb->prefix . "upviews";
	
	$current_views = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name WHERE post_id ='$id'" );
	if($current_views) {
		return $current_views;
	}
	else {
		$views = '0';
		return $views;
	}
    
}