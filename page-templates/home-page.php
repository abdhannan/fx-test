<?php

/**
 * Template Name: Home Page
 * 
 * @author Abd Hannan
 * @package wordpress themes
 * 
 * This template file to handle home page template
 */

get_header(); ?>

<!-- Home Slider Start -->
	<?php get_template_part( 'page-templates/home-partials/slider'); ?>
<!-- Home Slider End -->

<!-- Welcome Start -->
   
	<?php get_template_part( 'page-templates/home-partials/welcome', 'section'); ?>
    
<!-- Welcome End -->

	<!-- Home Services Start -->
	<?php get_template_part( 'page-templates/home-partials/service', 'section' ); ?>
    <!-- Home Services End -->
    
	<!-- Home Team Start -->
	<?php get_template_part('page-templates/home-partials/team', 'section'); ?>
	<!-- Home Team End -->

	<!-- Exotic Care Start -->
	<?php get_template_part( 'page-templates/home-partials/exotic', 'care'); ?>
	<!-- Exotic Care End -->

	<!-- Fun Fact Start -->
	<?php get_template_part( 'page-templates/home-partials/fun','fact' ); ?>
	<!-- Fun Fact End -->

	<!-- Testi and Blog Start -->
	<?php get_template_part( 'page-templates/home-partials/testi', 'blog' ); ?>
    <!-- Testi and Blog End -->
    


    <?php get_footer(); ?>