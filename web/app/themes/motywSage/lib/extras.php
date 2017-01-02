<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
    // $tmp = get_page_template();
    // echo $tmp;
  }
  if (is_page_template('offer.php')||
  is_page_template('offer-main.php')||
  is_page_template('realization.php')||
  is_page_template('realization-main.php') ||
  is_page_template('product.php')||
  is_page_template('products-main.php')) {
      array_push($classes, "for_contact");
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  //return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
  return ' &hellip; <a href="' . get_permalink() . '" class="read-more">CZYTAJ WIĘCEJ <i class="fa fa-chevron-right" aria-hidden="true"></i></a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');
