<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function wpdocs_my_search_form( $form ) {
    $form = '<form style="display: none" role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <i class="fa fa-search" aria-hidden="true"></i>
    <label class="screen-reader-text" for="s">' . __( 'Wyszukiwarka' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Wpisz szukane hasło i wciśnij Enter" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

function SearchFilter($query) {
if ($query->is_search) {
  
$query->set('post__not_in', array(194));
}
return $query;
}

add_action('pre_get_posts','SearchFilter');

