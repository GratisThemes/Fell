    <footer id="site-footer">
    
      <?php
      if ( has_nav_menu( 'social' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'social',
          'menu_class'     => 'social-nav',
          'container'      => false,
          'depth'          => 1,
        ) );
      }
      ?>

      <?php
      if ( has_nav_menu( 'footer' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_id'        => 'footer-nav',
          'container'      => false,
          'depth'          => 1,
        ) );
      }
      ?>

      <div id="site-footer-information">
          
        <span>
          <?php echo get_theme_mod( 'footer_text', get_bloginfo( 'name' ) ); ?>
          <?php if ( get_theme_mod( 'footer_copyright', true ) ) echo '&copy;'; ?>
          <?php if ( get_theme_mod( 'footer_year', true ) ) echo date( 'Y' ); ?>
        </span>

        <?php
        if ( get_theme_mod( 'footer_wordpress', true ) ) {
          printf(
            '<span>' . __( 'Proudly powered by %s', 'fell' ) . '</span>',
            '<a href="https://wordpress.org/">WordPress</a>'
          );
        }
        ?>

        <?php
        if ( get_theme_mod( 'footer_theme', true ) ) {
          $fell_theme_data = wp_get_theme();

          printf(
            '<span>%1$s: <a href="%2$s">%3$s</a></span>',
            __( 'Theme', 'fell' ),
            esc_url( $fell_theme_data->get( 'ThemeURI' ) ),
            $fell_theme_data[ 'Name' ]
          );
        }
        ?>
      
      </div><!-- #site-footer-information -->

    </footer><!-- #site-footer -->

    <a href="#" id="scroll-to-top"><i class="fif fif-chevron"></i></a>

  </div><!-- #wrapper -->

  <?php wp_footer(); ?>
  
</body>
</html>