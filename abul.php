<ul class="latest-post">
    <?php 
              $recent_args = array(
                'post_type'     => 'post',
                'order'         => 'DESC',
                'posts_per_page' => 3,
            );
            $recent_blog_query = new WP_Query( $recent_args );
            while($recent_blog_query->have_posts()){ 
                $recent_blog_query->the_post();
              ?>
                <li class="single-latest-post">
                    <div class="latest-post-img">
                        <a href="#"><img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html"><?php the_title();?></a></h5>
                    <p><a href="#"><?php the_date('j M, Y'); ?></a></p>
                    </li>
              <?php
              wp_reset_postdata();;
            } 
            
    ?>             
</ul>

