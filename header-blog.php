<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="<?php site_url(); ?>" class="navbar-brand"><?php echo get_custom_logo(); ?></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarCollapse">
            <?php 
              wp_nav_menu( 
                array(
                   'menu'              => "menu-id", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                   'theme_location'    => "primary-menu",
                    'menu_class'        => "navbar-nav mr-auto w-100 justify-content-end clearfix", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                   'menu_id'           => "main-menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, 
           ) );
            ?>
            
          </div>
        </div>
      </nav>
      <!-- Navbar End -->   
<!-- Page header Start -->
<section class="page-header">
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper text-center">
              <h2>Single Blog</h2>
              <p><a href="index.html">Home </a>/ Single Blog</p>
            </div>
          </div>
        </div> 
      </div> 
</section>
<!-- Page header End -->