<?php 

  
    require_once(get_theme_file_path( '/inc/stack-customizer.php' ));
    include_once(get_theme_file_path( '/inc/wp_head_style.php' ));  // This is for pushing sytle in the head
   

   
    // Good

    // This is for add theme support functionality 
    function stack_theme_support(){
        
        add_theme_support( 'tilte-tag');
        load_theme_textdomain('stack', get_template_directory_uri().'/languages' );
        $logo_defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'post-thumbnails', array( 'post' ) );
        add_theme_support( 'custom-logo', $logo_defaults );
        register_nav_menus( array(
            'primary-menu' => 'Primary Menu',
        ) );

    }
    add_action( 'after_setup_theme', 'stack_theme_support' );

    // This is for enqueuing scripts

    function stack_enqueue_scripts(){


        //CSS Enqueuing 
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'line-icon-css', get_template_directory_uri() . '/assets/fonts/line-icons.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'line-icon-ver-css', '//cdn.lineicons.com/3.0/lineicons.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'slicknav-css', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'nivo-lightbox-css', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'stack-style', get_stylesheet_uri() );


        // JS Scripts Enqueuing 

        wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'mixitup-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'jquery-nav-js', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'scrolling-nav-js', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'nivo-lightbox-js', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
   
        
    }

    add_action( 'wp_enqueue_scripts', 'stack_enqueue_scripts');


    //
    function stack_register_sidebar() {
        register_sidebar( array(
            'name'          => __( 'Blog Sidebar', 'stack' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'stack' ),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'stack_register_sidebar' );

   
    
    
    class Stack_First extends WP_Widget {
 
        /**
         * Register widget with WordPress.
         */
        public function __construct() {
            parent::__construct(
                'stack_first', // Base ID
                'Leates Blog Sidebar', // Name
                array( 'description' => __( 'A Foo Widget', 'stack' ), ) // Args
            );
        }
     
        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget( $args, $instance ) {
            extract( $args );
            $title = apply_filters( 'widget_title', $instance['title'] );
     
            echo $before_widget;
            if ( ! empty( $title ) ) {
                echo $before_title . '<h4 >' . $title . '</h4>' . $after_title;
            }
            ?>
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
                                <a href="#"><img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="<?php the_title();?>"></a>
                            </div>
                            <h5><a href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a></h5>
                            <p><a href="#"><?php the_date('j M, Y'); ?></a></p>
                            </li>
                    <?php
                    wp_reset_postdata();;
                    } 
                        
                ?>             
            </ul>
            <?php
            echo $after_widget;
        }
     
        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) ) {
                $title = $instance[ 'title' ];
            }
            else {
                $title = __( 'New title', 'stack' );
            }
            ?>
            <p>
                <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <div>
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
                            <a href="#"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>"></a>
                        </div>
                        <h5><a href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a></h5>
                        <p><a href="#"><?php the_date('j M, Y'); ?></a></p>
                        </li>
                <?php
                wp_reset_postdata();;
                } 
                        
                ?>    
            </div>
        <?php
        }
     
        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        // public function update( $new_instance, $old_instance ) {
        //     $instance = array();
        //     $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
     
        //     return $instance;
        // }
     
    }

    // Register Foo_Widget widget
    
        
    function stack_widget() { 
        register_widget( 'Stack_First' ); 
    }
    add_action( 'widgets_init', 'stack_widget' );
    // Commenting

    function stack_move_comment_field( $fields ) {
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;
        return $fields;
    }
    add_filter( 'comment_form_fields', 'stack_move_comment_field' );
    
    function stack_placeholder_author_email_url_subject_form_fields($fields) {
    
        $replace_author = __('Your Name', 'stack');
        $replace_email = __('Your Email', 'stack');
        $replace_url = __('Your Website', 'stack');
       
        
        
        $fields['author'] = ' <div class="row"><div class="col-md-4"> <div class="form-group">
          <input type="text" class="form-control required" id="name" name="name" placeholder="'.$replace_author.'" value="' . esc_attr( $commenter['comment_author'] ) . '" required>
        </div></div>';
                        
        $fields['email'] = '<div class="col-md-4"><div class="form-group">
          <input type="text" class="form-control" id="Email" name="Email" placeholder="'.$replace_email.'" value="' . esc_attr(  $commenter['comment_author_email'] ) .'"  required>
        </div></div>';
        
        $fields['url'] = '<div class="col-md-4"><div class="form-group">
          <input type="text" class="form-control" id="Website" name="Website" placeholder="'.$replace_url.'" value="' . esc_attr( $commenter['comment_author_url'] ) .'" required>
        </div></div></div>';
    
    
        return $fields;
    }
    add_filter('comment_form_default_fields','stack_placeholder_author_email_url_subject_form_fields');
    
    function stack_placeholder_comment_form_field($fields) {
        $replace_comment = __('Your Comment Here', 'stack');
        $fields['comment_field'] = '<div class="form-group">
         <textarea class="form-control" id="message" placeholder="'.$replace_comment.'" aria-required="true" rows="11" required></textarea>
        </div>';
        
        return $fields;
     }
    add_filter( 'comment_form_defaults', 'stack_placeholder_comment_form_field' );

    // define the comment_form_submit_button callback
    function stack_filter_comment_form_submit_button( $submit_button, $args ) {
        // make filter magic happen here...
        $submit_before = '<div class="form-group form-submit">';
        $submit_button = '<input class="btn btn-common" value="Post Comment" type="submit">';
        $submit_after = '</div>';
        return $submit_before . $submit_button . $submit_after;
    };
    
    // add the filter
   add_filter( 'comment_form_submit_button', 'stack_filter_comment_form_submit_button', 10, 2);


    
?>
