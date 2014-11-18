<?php
/**
 * The Sidebar containing the footer widget areas.
 *
 * @package Edin
 */
?>

<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>

  <div id="tertiary" class="footer-widget-area container" role="complementary">
    <div class="footer-widget-wrapper clear row">
      <div class="brand">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yogabed-logomark.svg" alt="Yogabed" />
      </div>
      <div class="col-xs-5 col-sm-4">
        <div class="row">
          <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div class="footer-widget col-sm-6">
              <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>

          <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
            <div class="footer-widget col-sm-6">
              <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>

          <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
            <div class="footer-widget">
              <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div><!-- .footer-widget -->
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-offset-5 col-sm-3 col-xs-7" style="text-align:right">
        <p>
          <span><a href="http://instagram.com/yogabed" target="_blank"><img alt="Social instagram" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-instagram.png"></a></span> &nbsp; 
          <span><a href="https://twitter.com/yogabedmattress" target="_blank"><img alt="Social twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-twitter.png"></a></span>&nbsp;
          <span><a href="https://facebook.com/yogabedmattress" target="_blank"><img alt="Social facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-facebook.png"></a></span>
        </p>
        <p class="customer-service" style="font-size:20px;">Customer Service<br><a href="tel:+18009861656"><strong>1-800-986-1656</strong></a></p>
      </div>
    </div><!-- .footer-widget-wrapper -->
  </div><!-- #tertiary -->

<?php endif; ?>