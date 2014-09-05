<?php
/*
Plugin Name: Simple Featured Box UdoF
Description: WordPress plugin to display customized content boxes
Plugin URI: http://javalidigital.com.br
Version: 1.0
Author: Javali Digital
Author URI: http://javalidigital.com.br
License: MIT
*/
?>
<?php
class featured_box_udof extends WP_Widget {

	// constructor
	function featured_box_udof() {
		parent::WP_Widget(false, $name = __('Simple Featured Box UdoF', 'wp_widget_plugin') );	
	}

	// widget form creation
	function form($instance) {	
		// Check values
		if( $instance) {
		     $title = esc_attr($instance['title']);
		     $text = esc_attr($instance['text']);
		     $link_text = esc_textarea($instance['link_text']);
			 $link_url = esc_textarea($instance['link_url']);
			 $img_url = esc_textarea($instance['img_url']);
		} else {
		     $title = '';
		     $text = '';
		     $link_text = '';
			 $link_url = '';
			 $img_url = '';
		}
		?>		
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título', 'wp_widget_plugin'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Texto:', 'wp_widget_plugin'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('link_text'); ?>"><?php _e('Texto do link:', 'wp_widget_plugin'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_text'); ?>" name="<?php echo $this->get_field_name('link_text'); ?>" type="text" value="<?php echo $link_text; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('link_url'); ?>"><?php _e('URL do link:', 'wp_widget_plugin'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_url'); ?>" name="<?php echo $this->get_field_name('link_url'); ?>" type="text" value="<?php echo $link_url; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('img_url'); ?>"><?php _e('URL da imagem:', 'wp_widget_plugin'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('img_url'); ?>" name="<?php echo $this->get_field_name('img_url'); ?>" type="text" value="<?php echo $img_url; ?>" />
		</p>
		<?php
	}

	// widget update
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		// Fields
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['text'] = strip_tags($new_instance['text']);
		$instance['link_text'] = strip_tags($new_instance['link_text']);
		$instance['link_url'] = strip_tags($new_instance['link_url']);
		$instance['img_url'] = strip_tags($new_instance['img_url']);
		return $instance;
	}

	// widget display
	function widget($args, $instance) {
		extract( $args );
	   // these are the widget options
	   $title = apply_filters('widget_title', $instance['title']);
	   $text = $instance['text'];
	   $link_text = $instance['link_text'];
	   $link_url = $instance['link_url'];
	   $img_url = $instance['img_url'];
	   
	   echo $before_widget;
	   // Display the widget
	   
	   echo '<div class="featured-box-image">';	   
	   echo '<a href="'.$link_url.'" title="'.$title.'"><img src="'.$img_url.'" alt="'.$title.'" /></a>';	   
	   echo '</div>';
	   
	   echo '<div class="featured-box-texts">';
	   echo '<span class="featured-box-title">'.$title.'</span>';
	   echo '<span class="featured-box-text">'.$text.'</span>';
	   echo '<a class="featured-box-link" href="'.$link_url.'" title="'.$title.'">'.$link_text.'</a>';
	   echo '</div>';
	   
	   echo $after_widget;
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("featured_box_udof");'));
?>