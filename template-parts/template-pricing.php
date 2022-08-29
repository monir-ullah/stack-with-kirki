<?php if(true == get_theme_mod( 'pricing_show_hide', 'on' )){  ?>  
  <section id="pricing" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <?php
            $pricing_section_title = get_theme_mod('pricing_section_title');
            $pricing_section_description = get_theme_mod('pricing_section_description');
            if($pricing_section_title){ ?>
               <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Best Pricing</h2>
              <?php
            }
            if($pricing_section_description){ ?>
               <p >A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
             <?php 
            }
          ?>
         
         
        </div>
        <div class="row">
          <?php 
            $pricing_section_repeater = get_theme_mod('pricing_section_repeater');
            if($pricing_section_repeater){
                foreach($pricing_section_repeater as $single_table){ ?>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                      <div id="<?php echo esc_attr__( $single_table['pricing_featured'] , 'stack' ); ?>" class="table wow fadeInLeft" data-wow-delay="1.2s">
                        <div class="title">
                          <h3><?php echo esc_html__( $single_table['pricing_table_headline'] , 'stack' ); ?></h3>
                        </div>
                        <div class="pricing-header">
                          <p class="price-value"><?php echo esc_html__( $single_table['pricing_currency'] , 'stack' ); ?><?php echo esc_html__( $single_table['pricing_price_number'] , 'stack' ); ?><span><?php echo esc_html__( '/', 'stack' ); ?><?php echo esc_html__( $single_table['pricing_catagory'] , 'stack' ); ?></span></p>
                        </div>
                        <ul class="description">
                          <?php 
                            $pricing_table_fe1 = $single_table['pricing_table_fe1'];
                            $pricing_table_fe2 = $single_table['pricing_table_fe2'];
                            $pricing_table_fe3 = $single_table['pricing_table_fe3'];
                            $pricing_table_fe4 = $single_table['pricing_table_fe4'];
                            $pricing_table_fe5 = $single_table['pricing_table_fe5'];
                            $pricing_table_fe6 = $single_table['pricing_table_fe6'];
                            $pricing_table_fe7 = $single_table['pricing_table_fe7'];
                            $pricing_table_fe8 = $single_table['pricing_table_fe8'];
                            $pricing_table_fe9 = $single_table['pricing_table_fe9'];
                            $pricing_table_fe10 = $single_table['pricing_table_fe10'];
                            if($pricing_table_fe1){?>
                              <li><?php echo esc_html__( $pricing_table_fe1, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe2){?>
                              <li><?php echo esc_html__( $pricing_table_fe2, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe3){?>
                              <li><?php echo esc_html__( $pricing_table_fe3, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe4){?>
                              <li><?php echo esc_html__( $pricing_table_fe4, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe5){?>
                              <li><?php echo esc_html__( $pricing_table_fe5, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe6){?>
                              <li><?php echo esc_html__( $pricing_table_fe6, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe7){?>
                              <li><?php echo esc_html__( $pricing_table_fe7, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe8){?>
                              <li><?php echo esc_html__( $pricing_table_fe8, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe9){?>
                              <li><?php echo esc_html__( $pricing_table_fe9, 'stack' ); ?></li>
                              <?php
                            }
                            if($pricing_table_fe10){?>
                              <li><?php echo esc_html__( $pricing_table_fe10, 'stack' ); ?></li>
                              <?php
                            }
                          ?>
                        </ul>
                        <button class="btn btn-common"><?php echo esc_html__( $single_table['pricing_table_btn'] , 'stack' ); ?></button>
                      </div> 
                    </div>
                  <?php 
                }
            }
          ?>
        </div>
      </div>
    </section>
<?php } ?>     