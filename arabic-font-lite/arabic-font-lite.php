<?php
/*
Plugin Name: Arabic Font Lite
Plugin URI: https://ruqyahbd.org/
Description: This plugin allows you to change the font of a single line in a post using a shortcode.
Author: almahmud
Version: 1.2
Author URI: https://ruqyahbd.org/
*/

function custom_arabic_font_shortcode($atts, $content = null) {
  // Enqueue the font file
  wp_enqueue_style('custom-arabic-font', plugin_dir_url(__FILE__) . '/fonts/style.css', array(), '1.0.0', 'all');

  // Return the content with the custom font and default font size and line-height applied
  return '<span class="custom-arabic-font">' . $content . '</span>';
}

add_shortcode('arabic', 'custom_arabic_font_shortcode');
?>
