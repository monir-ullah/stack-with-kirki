<?php if(true == get_theme_mod( 'counter_show_hide', 'on' )){ ?>
  <section id="counter" class="section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row">
              <!-- Start counter -->
              <?php 
                $counter_section_repeater = get_theme_mod('counter_section_repeater');
                if($counter_section_repeater){
                  foreach($counter_section_repeater as $counter_single){?>
            

                    <div class="col-lg-3 col-md-6 col-xs-12">
                      <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-o"><i class="<?php echo esc_html__( $counter_single['counter_icon'], 'stack' ) ?>"></i></div>
                        <div class="fact-count">
                          <h3><span class="counter"><?php echo esc_html__( $counter_single['counter_number'], 'stack' ) ?></span></h3>
                          <p><?php echo esc_html__( $counter_single['counter_text'], 'stack' ) ?></p>
                        </div>
                      </div>
                    </div>
                    <?php 
                  }
                } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php } ?>    