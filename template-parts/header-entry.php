<?php
/**
 * Template for displaying entry headers
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<header class="entry-header">

  <?php if ( is_sticky() && is_home() ) : ?>
    <i class="fif fif-pin"></i>
  <?php endif; ?>

  <?php
  printf(
    '<h2><a href="%2$s">%1$s</a></h2>',
    get_the_title() === '' ? __( 'Untitled post', 'fell' ) : get_the_title(), 
    esc_url( get_permalink() )
  );
  ?>

  <?php get_template_part( 'template-parts/meta' ); ?>

</header>