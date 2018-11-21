<?php
/**
 * Template for displaying thumbnails
 *
 * @package  Fell
 * @since  1.0.0
 * @version  1.0.0
 */
?>
<?php if ( get_the_post_thumbnail() !== '' || get_theme_mod( 'content_layout', 'one-column' ) == 'criss-cross' ): ?>

  <a class="entry-thumbnail" href="<?php the_permalink() ?>">

    <?php if ( get_the_post_thumbnail() === '' && get_theme_mod( 'content_layout', 'one-column' ) == 'criss-cross' ): ?>
    
      <div class="entry-thumbnail-placeholder"><i class="fif fif-image"></i></div>
    
    <?php else: ?>
    
      <?php the_post_thumbnail( 'fell-featured-image' ); ?>
    
    <?php endif; ?>

  </a>

<?php endif; ?>