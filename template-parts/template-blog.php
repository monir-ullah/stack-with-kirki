<section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center blog-div">
          <?php
            $blog_section_title = get_theme_mod('blog_section_title');
            $blog_section_description = get_theme_mod('blog_section_description');
            if($blog_section_title){ ?>
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html__( $blog_section_title, 'stack' ) ?> </h2>
              <?php 
            }
            if($blog_section_description){ ?>
                <p><?php echo esc_html__( $blog_section_description, 'stack' ) ?> </p>
              <?php 
            }
          ?>
        </div>
        <div class="row">
            <?php 
              $blog_args = array(
                'post_type'     => 'post',
                'order'         => 'DESC',
                'posts_per_page' => 3,
            );
            $blog_query = new WP_Query( $blog_args );
            while($blog_query->have_posts()){ 
                $blog_query->the_post();
              ?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                      <div class="blog-item-img">
                        <a href="single-post.html">
                          <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                        </a>                
                      </div>
                      <div class="blog-item-text"> 
                        <h3>
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p> <?php echo get_the_excerpt(); ?> </p>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-common btn-rm"><?php echo esc_html__('Read More', 'stack' ); ?></a>
                      </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                  </div>
              <?php
              wp_reset_postdata();;
            }
            ?>
        </div>
      </div>
    </section>