<?php
/**
 * Template for displaying landing page (home)
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<?php get_sidebar( 'above' ); ?>

<?php get_sidebar( 'left' ); ?>

<main>

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

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_sidebar( 'below' ); ?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>