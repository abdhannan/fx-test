<?php
/**
 * @author Abd Hannan
 * 
 * This file contain fucntionality to load all aseets such as css and js
 */

 /**
  * Bootstrap
  */
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '4.0', 'all' );


  /**
   * owlcarousel
   */
  wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false, '2.3.4', 'all' );
  
  /**
   * Owlthemes
   */
  wp_enqueue_style( 'owltheme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', false, '2.3.4', 'all' );

  /**
   * Iconmoncss
   */
  wp_enqueue_style( 'iconmon', get_template_directory_uri() . '/assets/css/icomoon.css', false, '1.0', 'all' );

  /**
   * Google Fonts
   */
  wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false, '1.1', 'all' );

  /**
   * Custom CSS
   */
  wp_enqueue_style( 'customcss', get_template_directory_uri() . '/assets/css/style.css', false, '1.0', 'all');

  /**
   * Custom CSS responsive
   */
  wp_enqueue_style( 'customresponsive', get_template_directory_uri() . '/assets/css/responsive.css', false, '1.0', 'all' );


  /**
   * 
   * JS FILE
   */

   

    /**
     * Popper.js
     */
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js' , 'jquery', 1.0, true );

    /**
     * Bootstrap js
     */
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js' , 'jquery', 4.2, true );

    /**
     * owl carousel
     */
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js' , 'jquery', 2.3, true );

    /**
     * Custom js
     */
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js', 'jquery', 1.0, true );