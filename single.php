<?php
/**
 * Template for displaying songle post content
 *
 * @package Fell
 * @since 1.0.0
 * @version 1.0.1
 */
?>

<?php get_header(); ?>

<?php get_sidebar( 'left' ); ?>

<main>

  <?php while ( have_posts() ): ?>
    
    <?php the_post(); ?>

    <?php get_template_part( 'template-parts/header' ); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
        
      <?php get_template_part( 'template-parts/content' ); ?>
    
    </article>

    <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'fell' ),
      'after' => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after' => '</span>',
    ) );
    ?>

    <?php get_template_part( 'template-parts/footer' ); ?>
    
    <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

  <?php endwhile; ?>

</main>

<?php get_sidebar(); ?>

<?php get_sidebar( 'footer' ); ?>

<?php get_footer(); ?>