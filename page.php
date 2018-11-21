<?php
/**
 * Template for displaying Page content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<main>

  <?php while ( have_posts() ): ?>
    
    <?php the_post(); ?>
    
    <?php get_template_part( 'template-parts/header' ); ?>
    
    <?php get_template_part( 'template-parts/content' ); ?>
    
    <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
    
  <?php endwhile; ?>

</main>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>