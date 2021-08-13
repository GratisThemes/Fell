<?php
/**
 * Template for displaying 404 Not Found error
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <section class="content-container">

    <article class="error-404 not-found">
      <header class="page-header">
        <h1><?php esc_html_e( '404 Not Found', 'fell' ); ?></h1>
      </header>

      <section class="entry-content">
        <p>
          <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fell' ); ?>
          <br />
          <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'fell' ); ?>
        </p>

        <?php get_search_form(); ?>

      </section><!-- .entry-content -->

    </article><!-- .error-404 -->

  </section><!-- .content-container -->

</main><!-- .site-main -->

<?php get_footer(); ?>
