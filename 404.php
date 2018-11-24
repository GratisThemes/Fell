<?php
/**
 * Template for displaying 404 Not Found error
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.1
 */
?>

<?php get_header(); ?>

<main>

  <?php get_template_part( 'template-parts/header' ); ?>
    
  <article>
    <div class="entry-content">
      <p>
        <?php _e( 'Oops! That page can&rsquo;t be found.', 'fell' ); ?>
      </p>

      <p>
        <?php _e( 'It looks like nothing was found at this location.', 'fell' ); ?>
      </p>
    </div>
  </article>

</main>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>