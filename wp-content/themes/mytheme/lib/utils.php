<?php
/**
 * Utility functions for theme
 */
/**
* Common Utility function to check value of variable is empty or not
*/
function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}
/**
* Tell WordPress to use searchform.php from the templates/ directory
*/
function mytheme_get_search_form() {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', 'mytheme_get_search_form');

/**
 * Add page slug to body_class() classes if it doesn't exist
 */
function page_slug_to_body_class($classes) {
  // Add post/page slug
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }
  return $classes;
}
add_filter('body_class', 'page_slug_to_body_class');
