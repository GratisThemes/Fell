<?php
/**
 * Template for displaying entry content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<div class="entry-content">
  
  <?php if ( (is_home() || is_archive() || is_search() ) && get_theme_mod( 'content_view', 'excerpt' ) == 'excerpt' ): ?>
      
      <?php the_excerpt(); ?>
    
    <?php else :?>
      
      <?php the_content(); ?>
  
    <?php endif; ?>

  <div style="clear: both;")>&nbsp;</div>

</div>