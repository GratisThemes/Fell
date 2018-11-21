<?php
/**
 * Template for displaying search results
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<?php get_sidebar( 'left' ); ?>

<main>

  <?php get_template_part( 'template-parts/header' ); ?>

  <?php if ( have_posts() ): ?>
  
    <?php while ( have_posts() ): ?>

      <?php the_post(); ?>
  
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>        

        <?php get_template_part( 'template-parts/header', 'entry' ); ?>

        <?php get_template_part( 'template-parts/thumbnail' ); ?>
      
        <?php get_template_part( 'template-parts/content' ); ?>
  
      </article>

    <?php endwhile; ?>

    <?php
    the_posts_pagination( array(
      'prev_text' => __( 'Prev', 'fell' ) . '<span class="screen-reader-text">' . __( 'Previous page', 'fell' ) . '</span>',
      'next_text' => __( 'Next', 'fell' ) . '<span class="screen-reader-text">' . __( 'Next page', 'fell' ) . '</span>',
      'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'fell' ) . '</span>'
    ) );
    ?>

  <?php else: ?>
    
    <?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'fell' ); ?>
    
    <?php get_search_form(); ?>

  <?php endif;?>

</main>

<?php get_sidebar(); ?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>