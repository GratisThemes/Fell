<?php
/**
 * Template for displaying page headers
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<header class="page-header">

  <?php if ( is_archive() ): ?>
  
    <?php the_archive_title( '<h1>', '</h1>' ); ?>
    <?php the_archive_description(); ?>
  
  <?php elseif ( is_search() ): ?>
    <?php
    printf(
      '<h1>' . __( 'Search results for: %s', 'fell' ) . '</h1>',
      '<span>' . esc_html( get_search_query() ) . '</span>'
    );
    ?>

  <?php elseif ( is_404() ): ?>

    <?php
    printf(
      '<h1>%s</h1>',
      __( '404 Not Found', 'fell' )
    );
    ?>

  <?php else: ?>
    
    <?php
    printf(
      '<h1>%s</h1>',
      get_the_title() === '' ? __( 'Untitled post', 'fell' ) : get_the_title()  
    );
    ?>

  <?php endif; ?>

  <?php if ( is_singular() ): ?>

    <?php get_template_part( 'template-parts/meta' ); ?>
  
  <?php endif; ?>

</header>