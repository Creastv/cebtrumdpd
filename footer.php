
    <?php if(get_theme_mod('d-map') ) { ?>
    <section>
        <div id="map"></div>
    </section>
    <?php } ?>
  </main>
  <footer id="footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col">
                  <?php get_template_part('template-parts/footer/site-footer-branding'); ?>
              </div>
              <div class="col">
                  <?php do_action( 'before_sidebar' ); ?>
                  <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?><?php endif; ?>
              </div>
              <div class="col">
                  <?php do_action( 'before_sidebar' ); ?>
                  <?php if ( ! dynamic_sidebar( 'footer' ) ) : ?><?php endif; ?>
                  <img class="world-footer" src="<?php echo get_template_directory_uri(); ?>/src/img/world.svg" alt="">
                  <img class="arrowflow-footer" src="<?php echo get_template_directory_uri(); ?>/src/img/arrowflow.svg" alt="">
             </div>
          </div>
      </div>
      <div class="container-fluid">
          <?php get_template_part('template-parts/footer/site-footer-info'); ?>
      </div>
  </footer>
  <?php get_template_part('template-parts/extras/contact-info'); ?>
  <svg id="go-to-top" class="js" xmlns="http://www.w3.org/2000/svg" width="25.243" height="24" viewBox="0 0 25.243 24">
      <g id="Icon_feather-arrow-up" data-name="Icon feather-arrow-up" transform="translate(-5.379 -6)">
          <path id="Path_522" data-name="Path 522" d="M18,28.5V7.5" fill="none" stroke="#fff" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="3" />
          <path id="Path_523" data-name="Path 523" d="M7.5,18,18,7.5,28.5,18" fill="none" stroke="#fff"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
      </g>
  </svg>
  <?php wp_footer(); ?>
  </body>
  </html>