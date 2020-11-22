<div class="home-slider owl-carousel owl-theme">

        <?php
        $args = array(
            'post_type' => 'slider'
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            while( $the_query->have_posts() ) { 
                $the_query->the_post();
            ?>

            <div class="item">
                <div class="slide-image">
                        <img src=<?php the_field('slider_image'); ?> alt="Slide" />
                </div>
                <div class="container">
                    <div class="slide-content">
                        <h4 class="optinal-h4"><?php the_field('slider_heading'); ?></h4>
                        <h3><?php the_field('slider_description'); ?></h3>
                        <a href="<?php the_field('slider_button_link'); ?>" class="btn btn-primary"><?php the_field('slider_button_label') ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        <?php } else { ?>
            <p>No SLider</p>
        <?php } ?>
        <?php 
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
	</div>