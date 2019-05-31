<?php class Social_Widget extends WP_Widget{
function __construct() {
	parent::__construct(
		'social_widget', // Base ID
		'Social Icons Widget', // Name
		array('description' => __( 'Displays your latest icons'))
	   );
}
function form($instance) {
    if( $instance) {
    $title = esc_attr($instance['title']);
    $numberOfListings = esc_attr($instance['numberOfListings']);
    } else {
    $title = '';
    $numberOfListings = '';
    } 
    
function widget($args, $instance) {
	extract( $args );
	$title = apply_filters('widget_title', $instance['title']);
	$numberOfListings = $instance['numberOfListings'];
	echo $before_widget;
	if ( $title ) {
		echo $before_title . $title . $after_title;
	}
	$this->getRealtyListings($numberOfListings);
	echo $after_widget;
}
function update($new_instance, $old_instance) {
	$instance = $old_instance;
	$instance['title'] = strip_tags($new_instance['title']);
	$instance['numberOfListings'] = strip_tags($new_instance['numberOfListings']);
	return $instance;
}
 
function getRealtyListings($numberOfListings) { //html
	global $post;
	add_image_size( 'realty_widget_size', 85, 45, false );
	$listings = new WP_Query();
	$listings->query('post_type=icon&amp;posts_per_page=' . $numberOfListings );
	if($listings->found_posts > 0) { ?>
        <li><?php the_post_thumbnail(); ?></li>
        <?php
    }
} //end class Realty_Widget
register_widget('Social_Widget');