<?php if(true == get_theme_mod( 'client_company_show_hide', 'on' )){  ?>  
  <div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <?php 
            $company_logo_section_title = get_theme_mod('company_logo_section_title');
            $company_logo_section_description = get_theme_mod('company_logo_section_description');
            if($company_logo_section_title){ ?>
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html__( $company_logo_section_title, 'stack' ) ?></h2>
              <?php
            }
            if( $company_logo_section_description){ ?>
                <p><?php echo esc_html__( $company_logo_section_description, 'stack' ) ?></p>
              <?php
            }
          ?>
        </div>
        <div class="row text-align-">
          <?php 
            $client_compnay_section_repeater_item = get_theme_mod('client_compnay_section_repeater_item');
            if($client_compnay_section_repeater_item){
              foreach($client_compnay_section_repeater_item as $single_logo){?>
                <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="client-item-wrapper">
                    <img class="img-fluid" src="<?php echo esc_attr__( $single_logo['client_comany_image'], 'stack' ) ?>" alt="">
                  </div>
                </div>
               <?
              }
            }
          ?>
        </div>
      </div>
  </div>
<?php } ?>     