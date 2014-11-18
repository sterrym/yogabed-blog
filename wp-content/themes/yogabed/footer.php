<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Yogabed
 */
?>

  </div><!-- #content -->

  <?php get_sidebar( 'footer' ); ?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-wrapper clear row">
      <div class="brand">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yogabed-logomark.svg" alt="Yogabed" />
      </div>
      <?php if ( has_nav_menu( 'footer' ) ) : ?>
        <div class="col-xs-5 col-sm-4">
          <div class="row">
            <nav class="footer-navigation" role="navigation">
              <?php
                wp_nav_menu( array(
                  'theme_location'  => 'footer',
                  'menu_class'      => 'clear',
                  'depth'           => 1,
                ) );
              ?>
            </nav><!-- .footer-navigation -->
          </div>
        </div>
        <div class="col-sm-offset-5 col-sm-3 col-xs-7" style="text-align:right">
          <div></div>
          <p>
            <span><a href="http://instagram.com/yogabed" target="_blank"><img alt="Social instagram" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-instagram.png"></a></span> &nbsp; 
            <span><a href="https://twitter.com/yogabedmattress" target="_blank"><img alt="Social twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-twitter.png"></a></span>&nbsp;
            <span><a href="https://facebook.com/yogabedmattress" target="_blank"><img alt="Social facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-facebook.png"></a></span>
          </p>
          <p class="customer-service" style="font-size:20px;">Customer Service<br><a href="tel:+18009861656"><strong>1-800-986-1656</strong></a></p>
        </div>
      <?php endif; ?>
    </div><!-- .footer-wrapper -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>