<!-- Copyright Section Start -->
<div class="copyright">
      <div class="container">
        <div class="row">
          <?php 
            $footer_logo = get_theme_mod('footer_logo');
            $foooter_facebok = get_theme_mod('foooter_facebok');
            $foooter_twitter = get_theme_mod('foooter_twitter');
            $foooter_instagram = get_theme_mod('foooter_instagram');
            $foooter_linkedin = get_theme_mod('foooter_linkedin');
            $footer_copyright = get_theme_mod('footer_copyright');

            if($footer_logo){ ?>
                <div class="col-lg-4 col-md-3 col-xs-12">
                  <div class="footer-logo">
                    <img src="<?php echo esc_attr__($footer_logo , 'stack' ) ?>" alt="">
                  </div>
                </div>
              <?php 
            }?>
          
          <div class="col-lg-4 col-md-4 col-xs-12">    
            <div class="social-icon text-center">
                <?php 
                  if($foooter_facebok){ ?>
                    <a class="facebook" href="<?php echo esc_attr__( $foooter_facebok, 'stack' ) ?>"><i class="lni-facebook-filled"></i></a>
                  <?php }
                ?> 
                <?php 
                  if($foooter_twitter){ ?>
                    <a class="twitter" href="<?php echo esc_attr__( $foooter_twitter, 'stack' ) ?>"><i class="lni-twitter-filled"></i></i></a>
                  <?php }
                ?> 
                <?php 
                  if($foooter_instagram){ ?>
                    <a class="instagram" href="<?php echo esc_attr__( $foooter_instagram, 'stack' ) ?>"><i class="lni-instagram-filled"></i></a>
                  <?php }
                ?> 
                <?php 
                  if($foooter_linkedin){ ?>
                    <a class="linkedin" href="<?php echo esc_attr__( $foooter_linkedin, 'stack' ) ?>"><i class="lni-linkedin-filled"></i></a>
                  <?php }
                ?> 
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-xs-12">
              <?php 
                if($footer_copyright){ ?>
                  <p class="float-right"><?php echo $footer_copyright?></p>
                  <?php
                }
              ?>
      
          </div> 
        </div>
      </div>
    </div>
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    <?php wp_footer(); ?>
  </body>
</html>