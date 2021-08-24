<?php
/*
* Custom Widgets for UrduPress Theme
*/

add_action( 'widgets_init', 'st_social_widget' );
 
function st_social_widget() {
    register_widget( 'stylo_urdu_social_widget' );
}
 
class stylo_urdu_social_widget extends WP_Widget
{
 
    public function __construct()
    {
        $widget_details = array(
            'classname' => 'stylo_urdu_social_icons_widget',
            'description' => 'Urdu Social Icons'
        );
 
        parent::__construct( 'stylo_urdu_social_icons_widget', 'ST - Social Icons (Urdu)', $widget_details );
 
    }
 
    public function form( $instance ) {
        $title = '';
	    if( !empty( $instance['title'] ) ) {
	        $title = $instance['title'];
	    }
	 
	    $style = '';
	    if( !empty( $instance['style'] ) ) {
	        $style = $instance['style'];
	    }
	 
	    ?>
	 
	    <p>
	        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	    </p>
	    <p>
	    	<label for="<?php echo $this->get_field_name( 'style' ); ?>"><?php _e( 'Select Style:' ); ?></label>
	    	<br />
	        <select name="<?php echo $this->get_field_name( 'style' ); ?>" id="<?php echo $this->get_field_id( 'style' ); ?>">
	        	<?php 
	        	$style = $instance['style'];
	        	if($style == 1) { ?>
	        	<option value="1">Flat</option>
                <option value="0">Circle</option>
	        	<?php } else { ?>
	        	<option value="0">Circle</option>
	        	<option value="1">Flat</option>
                <?php } ?>
	        </select>
	    </p>
	 
	    <div class='mfc-text'>
	         
	    </div>
	 
	    <?php
	 
	    echo $args['after_widget'];
        // Backend Form
    }
 
    public function update( $new_instance, $old_instance ) {  
        return $new_instance;
    }
 
    public function widget( $args, $instance ) { 
    	$title = '';
	    if( !empty( $instance['title'] ) ) {
	        $title = $instance['title'];
	    }
	 
	    $thmbsize = '0';
	    if( !empty( $instance['style'] ) ) {
	        $style = $instance['style'];
	    }
	    $limit = 5;
    ?>
    	<div id="upress-<?php echo $this->id ?>" class="widget stylo-urdu-social">
	    	<h3 class="widget-title"><?php echo esc_attr( $title ); ?></h3>
	    	<div class="widget-content">
	    		<?php get_template_part( 'template-parts/social', 'icons' ); ?>
	    	</div>
			
		</div>
<?php }
 
}