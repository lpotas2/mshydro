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

add_theme_support( 'post-thumbnails' );

class walker_oferta extends Walker_page {
function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0 ) {
		if ( $depth ) {
			$indent = str_repeat( "\t", $depth );
		} else {
			$indent = '';
		}



		$css_class = array( 'page_item', 'page-item-' . $page->ID );

		if ( isset( $args['pages_with_children'][ $page->ID ] ) ) {
			$css_class[] = 'page_item_has_children';
		}

		if ( ! empty( $current_page ) ) {
			$_current_page = get_post( $current_page );
			if ( $_current_page && in_array( $page->ID, $_current_page->ancestors ) ) {
				$css_class[] = 'current_page_ancestor';
			}
			if ( $page->ID == $current_page ) {
				$css_class[] = 'current_page_item';
			} elseif ( $_current_page && $page->ID == $_current_page->post_parent ) {
				$css_class[] = 'current_page_parent';
			}
		} elseif ( $page->ID == get_option('page_for_posts') ) {
			$css_class[] = 'current_page_parent';
		}
 
$css_classes = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );

		if ( '' === $page->post_title ) {
			/* translators: %d: ID of a post */
			$page->post_title = sprintf( __( '#%d (no title)' ), $page->ID );
		}

		$args['link_before'] = empty( $args['link_before'] ) ? '' : $args['link_before'];
		$args['link_after'] = empty( $args['link_after'] ) ? '' : $args['link_after'];




		$feature_image_id = get_post_thumbnail_id($page->ID);
		$feature_image_meta = wp_get_attachment_image_src($feature_image_id,"full");
		$ikona_1 = get_field('ikona_1',$page->ID);
		$ikona_2 = get_field('ikona_2',$page->ID);

		$output .= $indent . sprintf(
			'<div class="box">
			<div class="container" style="background-image: url(%s);">
        <div class="bg"></div>

        <span class="index">.01</span>

        <img class="icon red" src="%s"/>
        <img class="icon white" src="%s"/>
        <h3><a href="%s">%s%s%s</a></h3>
        <div class="desc">
          <p>Projektujemy urządzenia dla starych i nowych linii produkcyjnych. Modernizujemy istniejące projekty techniczne działających urządzeń i maszyn.</p>
        </div>',
			$feature_image_meta[0],
			$ikona_1,
			$ikona_2,
			get_permalink( $page->ID ),
			$args['link_before'],
			/** This filter is documented in wp-includes/post-template.php */
			apply_filters( 'the_title', $page->post_title, $page->ID ),
			$args['link_after']
		);

		if ( ! empty( $args['show_date'] ) ) {
			if ( 'modified' == $args['show_date'] ) {
				$time = $page->post_modified;
			} else {
				$time = $page->post_date;
			}

			$date_format = empty( $args['date_format'] ) ? '' : $args['date_format'];
			$output .= " " . mysql2date( $date_format, $time );
		}
    }
    public function end_el( &$output, $page, $depth = 0, $args = array() ) {
		$output .= "<i class='fa fa-chevron-right' aria-hidden='true'></i>
      </div>
	  </div>\n";
	}
}