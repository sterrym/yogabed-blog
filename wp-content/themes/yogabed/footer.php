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

  <footer id="footer" role="contentinfo">
    <div class="container">
      <div class="legal">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 link">COPYRIGHT © 2014</div>
            <div class="col-sm-2 link"><a href="https://yogabed-staging.herokuapp.com/privacy-policy">PRIVACY</a></div>
            <div class="col-sm-3 link"><a href="https://yogabed-staging.herokuapp.com/shipping-return-warranty">SHIPPING, RETURNS &amp; WARRANTY</a></div>
            <div class="col-sm-5 text-right"><a href="#top" class="return-to-top" title="Return to Top"><span class="fa fa-chevron-up"></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>