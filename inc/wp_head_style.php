<?php

    function halim_head_sytle(){

        if(class_exists('Kirki')){

            $banner_heading_text_color =  get_theme_mod( 'banner_heading_text_color' );
            if($banner_heading_text_color){ ?>
                <style>
                    .head-title{
                        color:<?php echo $banner_heading_text_color ?> !important;
                    }
                </style>
            <?php
            }
        }
    }
    add_action( 'wp_head', 'halim_head_sytle' );

?>