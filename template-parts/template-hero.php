<div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <?php
                  if(class_exists('Kirki')){
                    $banner_heading =  get_theme_mod( 'banner_heading' );
                    $banner_section_btn_text = get_theme_mod( 'banner_section_btn_text' );
                    $banner_section_btn_url = get_theme_mod( 'banner_section_btn_url' );
                    $banner_section_image = get_theme_mod( 'banner_section_image' );
                    if($banner_heading){ ?>

                      <h2 class="head-title wow fadeInUp"><?php echo $banner_heading; ?></h2>

                     <?php
                    }

                    if($banner_section_btn_text){ ?>
                      <div class="header-button wow fadeInUp mb-5" data-wow-delay="0.3s">
                        <a href="<?php echo $banner_section_btn_url; ?>" class="btn btn-common"><?php echo $banner_section_btn_text; ?></a>
                      </div>
                      <?php
                    }

                    if($banner_section_image){ ?>

                      <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="<?php echo $banner_section_image; ?>" alt="">
                      </div>
                      <?php
                    }
                  }
                ?>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>