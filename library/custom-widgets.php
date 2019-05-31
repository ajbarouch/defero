<?php 
// Register and load the widget
function def_load_widget() {
    register_widget( 'def_widget' );
}
add_action( 'widgets_init', 'def_load_widget' );
 
// Creating the widget 
class def_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'def_widget', 
 
// Widget name will appear in UI
__('Instagram Posts', 'def_widget_domain'), 
 
// Widget description
array( 'description' => __( 'List of Instagram posts', 'def_widget_domain' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
 
//widget content
?>
      <h2>Follow us on Instagram</h2>
      <ul class="instagram-posts">
      <?php // Create and run custom loop
         $custom_posts = new WP_Query();
         $custom_posts->query('post_type=social&posts_per_page=5');
         while ($custom_posts->have_posts()) : $custom_posts->the_post();
       ?>
         <li><?php the_post_thumbnail(); ?></li>
       <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
      </ul>
    <?php
}
         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'def_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class def_widget ends here

// Register and load search widget
function search_load_widget() {
  register_widget( 'search_widget' );
}
add_action( 'widgets_init', 'search_load_widget' );

// Creating the widget 
class search_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'search_widget', 

// Widget name will appear in UI
__('Custom Search Bar', 'search_widget_domain'), 

// Widget description
array( 'description' => __( 'Custom Search Bar widget', 'search_widget_domain' ), ) 
);
}

// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes
echo $args['before_widget'];

//widget content
?>
<form role="search" method="get" id="searchform" action="http://localhost/defero/" _lpchecked="1">
	<div class="input-group def-input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" aria-label="Search" placeholder="enter zip code...">
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="enter zip code..." class="button">
		</div>
	</div>
</form>
  <?php
}
       
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'search_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
   
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class search_widget ends here

// Register and load the widget
function icon_load_widget() {
  register_widget( 'icon_widget' );
}
add_action( 'widgets_init', 'icon_load_widget' );

// Creating the widget 
class icon_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'icon_widget', 

// Widget name will appear in UI
__('Social Icon Posts', 'icon_widget_domain'), 

// Widget description
array( 'description' => __( 'List of social icon posts', 'def_widget_domain' ), ) 
);
}

// Creating widget front-end

public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes
echo $args['before_widget'];

//widget content
?>
    <ul class="icon-posts">
    <?php // Create and run custom loop
       $custom_posts = new WP_Query();
       $custom_posts->query('post_type=icon&posts_per_page=5&orderby=date&order=ASC');
       while ($custom_posts->have_posts()) : $custom_posts->the_post();
     ?>
       <li><?php the_post_thumbnail(); ?></li>
     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
    </ul>
  <?php
}
       
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'icon_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
   
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class icon_widget ends here