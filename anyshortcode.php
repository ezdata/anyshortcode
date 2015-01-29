<?php
/*
Plugin Name: anyshortcode.php
Plugin URI: http://
Description: Add any shortcode you want using [field name="mycustomfield"]
Author: Jeff Siegel
Version: 1.0
Author URI: http://ezdatasolutions.com
*/



function field_func($atts) {
   global $post;
   $name = $atts['name'];
   if (empty($name)) return;

   return get_post_meta($post->ID, $name, true);
}

add_shortcode('field', 'field_func');