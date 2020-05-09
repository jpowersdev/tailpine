<?php

/**
 * Theme helpers.
 */

namespace App;

/**
 * Set up custom theme colors
 */
add_action('wp_enqueue_scripts', function() {

  $primary = get_field('primary_theme_color', 'option');
  $secondary = get_field('secondary_theme_color', 'option');

  wp_add_inline_style( 'sage/app.css', "
    :root{
      --primary-color: ". $primary .";
      --secondary-color: ". $secondary .";
    }
  " );

}, 101);
