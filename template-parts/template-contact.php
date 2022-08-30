<?php if(true == get_theme_mod( 'skills_show_hide', 'on' )){  ?>  
  <section id="contact" class="section-padding">    
        <div class="container">
          <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="contact-block">
                <form id="contactForm">
                  <?php
                    echo do_shortcode( '[contact-form-7 id="92" title="Contact form 1"]');
                  ?>
                </form>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="contact-right-area wow fadeIn">
                <div class="contact-title">
                  <?php 
                    $contact_section_title = get_theme_mod('contact_section_title');
                    $contact_section_description = get_theme_mod('contact_section_description');
                    $contact_us_title = get_theme_mod('contact_us_title');
                    if($contact_section_title){ ?>
                          <h1><?php echo esc_html__($contact_section_title, 'stack'); ?></h1>
                      <?php
                    }
                    if($contact_section_description){ ?>
                          <p><?php echo esc_html__($contact_section_description, 'stack'); ?></p>
                      <?php
                    }
                  ?>
                </div>
                <?php 
                  if($contact_us_title){ ?>
                          <h2><?php echo esc_html__($contact_us_title, 'stack'); ?></h2>
                    <?php
                  }
                ?>
                <div class="contact-right">
                  <?php 
                    $contact_icon_repeater_item = get_theme_mod('contact_icon_repeater_item');
                    if($contact_icon_repeater_item){
                      foreach($contact_icon_repeater_item as $signle_contact){ ?>
                          <div class="single-contact">
                            <div class="contact-icon">
                              <i class="<?php echo esc_html__($signle_contact['contact_icon'], 'stack'); ?>"></i>
                            </div>
                            <p><?php echo esc_html__($signle_contact['contact_info_item_text'], 'stack'); ?></p>
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
  </section>
<?php } ?>  