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
	<div class="testi-blog">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="testimonials">
						<div class="comman-icon">
							<span class="icon-quotes"></span>
						</div>
						<h1><?php the_field('testimonial_title'); ?></h1>
						<a class="btn btn-primary" href="<?php the_field('testimonial_button_link'); ?>"><?php the_field('testimonial_button_label'); ?></a>
						<div class="testi-owl owl-carousel">
                            <?php
                            // Start Query and Loop
                            $args = array (
                                'post_type' => 'testimonial'
                            );
                            $the_query = new WP_Query($args);
                            if ( $the_query->have_posts() ) {
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post(); ?>
                                <div class="item">
                                    <?php the_content(); ?>
                                    <b>- <?php the_title(); ?></b>
                                </div>
                                <?php } ?>
                            <?php } else { ?>
                                <p>No Testimonials</p>
                            <?php } ?>
							<?php
                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="home-blog">
						<div class="blog-title">
							<h4 class="optinal-h4"><?php the_field('blog_title'); ?></h4>
							<a class="btn btn-secondary" href="<?php the_field('blog_button_link'); ?>"><?php the_field('blog_button_label'); ?></a>
                        </div>
                        <?php
                        // Start query and loop for post
                        $args = array (
                            'post_type' => 'post',
                            'post_per_page' => 1
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post(); ?>
                                <div class="blog-main">
                                    <div class="blog-image">
                                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-inner">
                                            <h4><?php the_title(); ?></h4>
                                            <?php the_excerpt(); ?>
                                            <div class="readmore">
                                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        <?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Testi and Blog End -->
    


    <?php get_footer(); ?>