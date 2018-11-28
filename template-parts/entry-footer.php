<?php
/**
 * Template for displaying entry footers
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.1.0
 */
?>
<footer class="entry-footer">
  <?php if ( get_theme_mod( 'display_author_bio', true ) ): ?>
    <div class="author-bio">
      <?php echo get_avatar( get_the_author_meta( 'user_email' ), '100' ); ?>

      <div>
        <h5><?php _e( 'About the author', 'fell' ); ?></h5>

        <?php
        printf(
          '<a href="%2$s">%1$s</a>',
          get_the_author(),
          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
        );
        ?>

        <p><?php the_author_meta( 'description' ); ?></p>
      </div>
    </div><!-- .author-bio -->
  <?php endif; ?>
  
  <?php
  $fell_categories_list = get_the_category_list();
  if ( $fell_categories_list ) : ?>
    <div class="post-categories-container">
      <i class="fif fif-folder">
        <span class="screen-reader-text"><?php _e( 'categories', 'fell'); ?></span>
      </i>

      <?php echo $fell_categories_list; ?>
    </div><!-- .post-categories-container -->
  <?php endif; ?>
  
  <?php
  $fell_tags_list = get_the_tag_list();
  if ( $fell_tags_list ) : ?>
    <div class="post-tags-container">
      <i class="fif fif-tag">
        <span class="screen-reader-text"><?php _e( 'tags', 'fell'); ?></span>
      </i>

      <span class="post-tags"><?php echo $fell_tags_list; ?></span>
    </div><!-- .post-tags-container -->
  <?php endif; ?>

  <?php
  the_post_navigation( array(
    'prev_text' => 
      '<span class="screen-reader-text">' . __( 'Previous post', 'fell' ) . '</span>
       <span>' . __( 'Previous', 'fell' ) . '</span>
       <span>%title</span>',
    'next_text' => 
      '<span class="screen-reader-text">' . __( 'Next post', 'fell' ) . '</span>
       <span>' . __( 'Next', 'fell' ) . '</span>
       <span>%title</span>',
  ) );
  ?>
</footer><!-- .entry-footer -->