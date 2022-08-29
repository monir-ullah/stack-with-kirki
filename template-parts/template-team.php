<?php if(true == get_theme_mod( 'team_show_hide', 'on' )){  ?>

<section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <?php 
            $team_section_title = get_theme_mod( 'team_section_title' );
            $team_section_description = get_theme_mod( 'team_section_description' );
            if($team_section_title){ ?>
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html__( $team_section_title, 'stack' ); ?></h2>
              <?php
            }
            if($team_section_description){ ?>
              <p><?php echo esc_html__( $team_section_description, 'stack' ); ?></p>
              <?php
            }
          ?>
        </div>
        <div class="row">
          <?php 
            $team_section_repeater_item = get_theme_mod('team_section_repeater_item') ;
            if($team_section_repeater_item){
              foreach($team_section_repeater_item as $team){ 
                  $signle_member_name = $team['signle_member_name'];
                  $signle_member_designation = $team['signle_member_designation'];
                  $signle_member_image = $team['signle_member_image'];
                  $signle_member_facebook = $team['signle_member_facebook'];
                  $signle_member_twitter = $team['signle_member_twitter'];
                  $signle_member_instagram = $team['signle_member_instagram'];
                  $signle_member_youtube = $team['signle_member_youtube'];
                  $signle_member_others = $team['signle_member_others'];
                ?>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <!-- Team Item Starts -->

                        <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
                          <div class="team-img">
                            <img class="img-fluid" src="<?php echo esc_attr__( $signle_member_image, 'stack' );?>" alt="">
                            <div class="team-overlay">
                              <div class="overlay-social-icon text-center">
                                <ul class="social-icons">
                                  <?php 
                                    if($signle_member_facebook){?>
                                      <li><a href="<?php echo esc_attr__( $signle_member_facebook, 'stack' );?>"><i class="lni-facebook-filled"        aria-hidden="true"></i></a></li>
                                      <?php
                                    }
                                  ?> 
                                  <?php 
                                    if($signle_member_twitter){?>
                                      <li><a href="<?php echo esc_attr__( $signle_member_twitter, 'stack' );?>"><i class="lni-twitter-filled"        aria-hidden="true"></i></a></li>
                                      <?php
                                    }
                                  ?> 
                                  <?php 
                                    if($signle_member_instagram){?>
                                      <li><a href="<?php echo esc_attr__( $signle_member_instagram, 'stack' );?>"><i class="lni-instagram-filled"        aria-hidden="true"></i></a></li>
                                      <?php
                                    }
                                  ?> 
                                  <?php 
                                    if($signle_member_youtube){?>
                                      <li><a href="<?php echo esc_attr__( $signle_member_youtube, 'stack' );?>"><i class="lni lni-youtube"></i>
                                      <?php
                                    }
                                  ?> 
                                  <?php 
                                    if($signle_member_others){?>
                                      <li><a href="<?php echo esc_attr__( $signle_member_others, 'stack' );?>"><i class="lni lni-wordpress-filled"></i>
                                      <?php
                                    }
                                  ?> 
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="info-text">
                            <?php 
                              if($signle_member_name){?>
                                <h3><a href="#"><?php echo esc_html__( $signle_member_name, 'stack' );?></a></h3>
                                <?php
                              }
                            ?>
                            
                            <?php 
                              if($signle_member_name){?>
                                <p><?php echo esc_html__( $signle_member_designation, 'stack' );?></p>
                                <?php
                              }
                            ?>
                          </div>
                        </div>
                      
                  <!-- Team Item Ends -->
                </div>
                <?php 
              }
            }
          ?>
        </div>
      </div>
    </section>
<?php } ?>    