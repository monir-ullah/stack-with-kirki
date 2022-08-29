<?php if(true == get_theme_mod( 'service_show_hide', 'on' )){ ?>
  <section id="services" class="section-padding bg-gray">
    <div class="container">
      <div class="section-header text-center">
        <?php 
          if(class_exists('Kirki')){
            $service_section_tilte =  get_theme_mod( 'service_section_tilte' );
            $service_section_description =  get_theme_mod( 'service_section_description' );
            if($service_section_tilte){ ?>
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html__( $service_section_tilte, 'stack' ); ?></h2>
            <?php  
            }
            if($service_section_description){ ?>
              <p class="section_desc"><?php echo esc_html__( $service_section_description, 'stack' ); ?></p>
              <?php
            }
          }
        ?>
      </div>
      <div class="row">
        <?php 
          $service_section_repeater_item =  get_theme_mod( 'service_section_repeater_item' );
          if(class_exists('Kirki')){
            if($service_section_repeater_item){
              foreach($service_section_repeater_item as $signle_item){
                $service_animation =  get_theme_mod( 'service_animation' );
                ?>
                <!-- Services item -->
                <div class="col-md-6 col-lg-4 col-xs-12">
                  <div class="services-item wow <?php echo $service_animation ; ?>" data-wow-delay="<?php echo $signle_item['signle_service_animation_time'];?>s">
                    <div class="icon"> 
                      <i class="<?php echo esc_attr__( $signle_item['signle_service_icon'], 'stack' ); ?>"></i>
                    </div>
                    <div class="services-content">
                      <h3><a href="#"><?php echo esc_html__( $signle_item['signle_service_title'], 'stack' ); ?></a></h3>
                      <p><?php echo esc_html__( $signle_item['signle_service_desc'], 'stack' ); ?></p>
                    </div>
                  </div>
                </div>
                <?php  
            }   
          }} ?>
          
      </div>
    </div>
   </section> 
<?php } ?>