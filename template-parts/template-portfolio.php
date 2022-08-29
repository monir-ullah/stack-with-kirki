<?php if(true == get_theme_mod( 'our_work_show_hide', 'on' )){ ?>
  <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <?php 
            $our_work_section_title = get_theme_mod('our_work_section_title');
            $our_work_section_description = get_theme_mod('our_work_section_description');
            if($our_work_section_title){  ?>
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html__(  $our_work_section_title, 'stack' ) ?></h2>
              <?php
            }
            if($our_work_section_description){ ?>
                 <p><?php echo esc_html__(  $our_work_section_description, 'stack' ) ?></p>
              <?php 
            }

          ?>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          <?php
            $our_work_section_repeater_item = get_theme_mod('our_work_section_repeater_item');
            if($our_work_section_repeater_item){ 
              foreach($our_work_section_repeater_item as $signle_profolio){ ?>
                <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
                  <div class="portfolio-item">
                    <div class="shot-item">
                      <img src="<?php echo esc_attr__( $signle_profolio['our_work_small_image'] ,'stack' ); ?>" alt="" />  
                      <div class="single-content">
                        <div class="fancy-table">
                          <div class="table-cell">
                            <div class="zoom-icon">
                              <a class="lightbox" href="<?php echo esc_attr__( $signle_profolio['our_work_big_image'] ,'stack' ); ?>"><i class="lni-eye item-icon"></i></a>
                            </div>
                            <a href="#"><?php echo esc_html__( $signle_profolio['our_work_signle_title'] ,'stack' ); ?></a>
                          </div>
                        </div>
                      </div>
                    </div>               
                  </div>
                </div>      
                <?php
              }
            }
          ?>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
<?php } ?>      