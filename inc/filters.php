<?php
/**
 * Various changes to wordpress functions
 *
 * @package Fell
 */


/**
 * Custom excerpt more
 *
 * @since 1.0.0
 * @version 1.0.0
 */
function fell_excerpt_more( $more ) {
  if ( is_admin() ) return $more;

  return sprintf(
    '<a class="read-more-link" href="%1s">%2s</a>',
    esc_url( get_permalink( get_the_ID() ) ),
    __( 'Read more', 'fell' )
  );
}
add_filter('excerpt_more', 'fell_excerpt_more');

/**
 * Add classes to the body depending on customize settings
 *
 * @since 1.0.0
 * @version 1.0.0
 */
function fell_body_class( $classes ) {

  if ( is_home() || is_archive() || is_search() ) {
    $classes[] = 'layout-' . get_theme_mod( 'content_layout', 'one-column' );
    $classes[] = 'content-view-' . get_theme_mod( 'content_view', 'excerpt' );    
  }

  return $classes;

}
add_filter( 'body_class', 'fell_body_class' );

?>