<div class="home-team">
		<div class="team-banner">
			<div class="banner-image">
				<img src="<?php the_field('doctor_section_background'); ?>" alt="Team" />
			</div>
		</div>
		<div class="team-content">
			<div class="container">
				<div class="team-wrap">
					<h4 class="optinal-h4"><?php the_field('doctor_section_title'); ?></h4>
					<h1><?php the_field('doctor_section_subtitle'); ?></h1>
					<div class="row">
                        <!-- Start Query Loop doctor -->
                        <?php
                        $args = array(
                            'post_type' => 'doctor',
                            'posts_per_page' => 3
                        );
                        $the_query = new WP_Query($args);
                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post(); ?>

                            <div class="col-md-4">
                                <div class="team-box">
                                    <div class="team-image">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Team"/>
                                        <div class="team-hover">
                                            <div class="team-h-inner">
                                                <div class="comman-icon">
                                                    <span class="icon-cross-paw"></span>
                                                </div>
                                                <div class="more-div">
                                                    <a class="learn-more yellow-link" href="<?php the_permalink(); ?>">learn more <span
                                                            class="icon-arrow-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-title">
                                        <?php the_title( ); ?>
                                    </div>
                                </div>
                            </div>

                            <?php } // endwhile ?>
                        <?php } else { ?>
                            <p>No Team</p>
                        <?php } ?>
						<?php
                        /* Restore original Post Data */
                        wp_reset_postdata();
                        ?>
					</div>
					<div class="meet-button">
						<a href="<?php the_field('doctor_section_button_link'); ?>" class="btn btn-secondary"><?php the_field('doctor_section_button_label'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>