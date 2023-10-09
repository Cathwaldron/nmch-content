<?php
/*
Plugin Name: NMCH Content Plugin
Plugin URI: http://webrenovationexpert.com
Description: Adapted version by Catherine Waldron. Adds html content of past shows page to main content area by using a short code.
Author: Catherine Waldron
Version: 1.1
*/


// WP Shortcode to display past shows html on any page or post.

 function past_shows() {


  $pastshows =  include('includes/shows-include.php');

  return $pastshows;

}

add_shortcode('pastshows', 'past_shows');

/* ?> remove the closing php tag 
*/
