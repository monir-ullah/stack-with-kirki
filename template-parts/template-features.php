<div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">            
            <div class="text-wrapper">
              <div>
                <?php
                  if(class_exists('Kirki')){
                    $about_tilte = get_theme_mod('about_tilte');
                    $about_description = get_theme_mod('about_description');
                    $about_button_text = get_theme_mod('about_button_text');
                    $about_button_link = get_theme_mod('about_button_link');
                    if($about_tilte){ ?>
                      <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo $about_tilte; ?></h2>
                      <?php 
                    }
                    if($about_description){ ?>
                        <p class="mb-4"><?php echo $about_description; ?></p>
                      <?php 
                    }
                    if($about_button_text){ ?>
                      <a href="<?php echo $about_button_link; ?>" class="btn btn-common"><?php echo $about_button_text; ?></a>
                      <?php 
                     }
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">
              <?php
                if(class_exists('Kirki')){
                  $about_section_repeater = get_theme_mod( 'about_section_repeater' );
                  if($about_section_repeater){  
                    foreach ($about_section_repeater as $single_item) { ?>
                        <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <?php 
                               $about_icon = $single_item['about_icon'];
                               if($about_icon){ ?>
                                  <div class="icon">
                                    <i class="<?php echo $about_icon; ?>"></i>
                                  </div>
                              <?php }
                            ?>                           
                            <div class="feature-content">
                                <?php 
                                  $about_title = $single_item['about_title'];
                                  $about_description = $single_item['about_description'];
                                  if($about_title){ ?>
                                    <h3><?php echo $about_title ?></h3>
                                   <?php 
                                  }
                                  if($about_description){ ?>
                                      <p><?php echo $about_description; ?></p>
                                    <?php
                                  }
                                  ?>
                            </div>
                        </div>
                      <?php 
                    }
                    ?>
                    <?php 
                  }
                }
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>