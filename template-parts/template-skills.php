<?php if(true == get_theme_mod( 'skills_show_hide', 'on' )){  ?>  
  <div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <?php
              $skills_section_img = get_theme_mod('skills_section_img');
              if($skills_section_img){ ?>
                 <img class="img-fluid" src="<?php echo esc_attr__($skills_section_img, 'stack'); ?>" alt="" >
                <?php
              }
            ?>
           
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <?php 
                  $skills_section_title = get_theme_mod('skills_section_title');
                  $skills_section_description = get_theme_mod('skills_section_description');
                  if($skills_section_title){ ?>
                    <h2 class="section-title"><?php echo esc_html__($skills_section_title, 'stack'); ?></h2>
                    <?php
                  }
                  if($skills_section_description){ ?>
                       <p><?php echo esc_html__($skills_section_description, 'stack'); ?></p>
                    <?php
                  }
              ?>
            </div>
            <div class="skills-section">
              <!-- Progress Bar Start -->
              <?php
                $skills_section_repeater = get_theme_mod('skills_section_repeater');
                if($skills_section_repeater){ 
                  foreach($skills_section_repeater as $single_skill){ ?>
                      <div class="progress-box">
                        <h5><?php echo esc_html__($single_skill['skills_name_table_headline'], 'stack'); ?><span class="pull-right"><?php echo '  '. esc_html__($single_skill['skills__percentage_number'], 'stack'); echo esc_html__('%','stack') ?></span></h5>
                        <div class="progress" style="opacity: 1; left: 0px;">
                          <div class="progress-bar" role="progressbar" data-width="<?php echo esc_html__($single_skill['skills__percentage_number'], 'stack'); ?>" style="width: <?php echo esc_html__($single_skill['skills__percentage_number'], 'stack'); ?>%;"></div>
                        </div>
                      </div>
                    <?php  
                  }

                }
              ?>
              <!-- End Progressbar -->
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } ?>  
