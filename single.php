<?php 
  get_header( 'blog');
?>

    <!-- Blog Section Start  -->
    <div id="blog-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="blog-post">
              <div class="post-thumb">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
              </div>
              <div class="post-content">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>          
              </div>
            </div>
            <div class="blog-comment">
                <h4>2 Comments</h4>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="the-comment">
                      <div class="avatar">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img' ; ?>/blog/avater-1.jpg" alt="">
                      </div>
                      <div class="comment-box">
                        <div class="comment-author">
                          <strong>User</strong><span class="meta"> August 17, 2020 at 1:38 pm</span><a class="comment-reply-link" href="#"> - Reply</a>
                        </div>
                        <div class="comment-text">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, voluptates odio perspiciatis veritatis repellendus facilis nesciunt suscipit cumque aut quisquam quas..</p>
                        </div>
                      </div>
                    </div>
                    
                    <ul class="children">
                      <li class="comment">
                        <div class="the-comment">
                          <div class="avatar">
                            <img src="<?php echo get_template_directory_uri(). '/assets/img' ; ?>/blog/avater-2.jpg" alt="">
                          </div>
                          <div class="comment-box">
                            <div class="comment-author">
                              <strong>Demo User</strong> <span class="meta">August 18, 2020 at 3:39 pm</span><a class="comment-reply-link" href="#"> - Reply</a>
                            </div>
                            <div class="comment-text">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, voluptates odio perspiciatis veritatis repellendus facilis nesciunt suscipit cumque aut quisquamt..</p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              <form id="comment-form">
                <div class="row">
                  <div class="comments">

                    <?php 
                        if ( comments_open() ) {
                            comments_template();
                        }
                    ?>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            
            <div class="widgets">

              <div class="widget-latest-post single-widget">
                <?php 
                  if(is_active_sidebar('sidebar-1' )){
                    dynamic_sidebar('sidebar-1');
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Section End  -->

<?php get_footer(); ?>   