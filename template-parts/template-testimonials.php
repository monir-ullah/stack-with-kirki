<?php if(true == get_theme_mod( 'testimonial_show_hide', 'on' )){ ?>
  <section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <?php 
                $testimonial_section_repeater_item = get_theme_mod('testimonial_section_repeater_item');
                if($testimonial_section_repeater_item){
                  foreach($testimonial_section_repeater_item as $sigle_testimonial){ ?>
                    <div class="item">
                      <div class="testimonial-item">
                        <div class="img-thumb">
                          <img src="<?php echo esc_attr__( $sigle_testimonial['testimonial_client_image'] , 'stack' ); ?>" alt="">
                        </div>
                        <div class="info">
                          <h2><a href="#"><?php echo esc_attr__( $sigle_testimonial['testimonial_client_name'] , 'stack' ); ?></a></h2>
                          <h3><a href="#"><?php echo esc_attr__( $sigle_testimonial['testimonial_client_designation'] , 'stack' ); ?>.</a></h3>
                        </div>
                        <div class="content">
                          <p class="description"><?php echo esc_attr__( $sigle_testimonial['testimonial_client_description'] , 'stack' ); ?> </p>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                }
              ?> 
            </div>
          </div>
        </div>
      </div>
  </section>
<?php } ?>   