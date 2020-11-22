<div class="home-services line-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="service-content">
						<h4 class="optinal-h4"><?php the_field('service_section_title'); ?></h4>
						<h1><?php the_field('service_section_subtitle'); ?></h1>
						<?php the_field('service_section_content'); ?>
						<a href="<?php the_field('service_section_button_link'); ?>" class="btn btn-primary"><?php the_field('service_section_button_label'); ?></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="d-none d-lg-block">
						<div class="service-owl owl-carousel owl-theme">
							<div class="item">
								<div class="row">
                                    <!-- Loop for services -->
                                    <?php $args = array (
                                        'post_type' => 'service'
                                    );
                                    $the_query = new WP_Query( $args );
                                    if ( $the_query->have_posts() ) {
                                        while ( $the_query->have_posts() ) {
                                            $the_query->the_post();
                                         ?>
                                    
                                        <div class="col-md-6">
                                            <div class="service-box">
                                                <div class="service-image">
                                                    <!-- Grab the url featured image for full size -->
                                                    <?php
                                                    //$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                                                    ?>
                                                    <img src="<?php the_post_thumbnail( 'full'); ?>" alt="Service" />
                                                </div>
                                                <div class="service-info">
                                                    <div class="service-inner">
                                                        <div class="service-icon comman-icon">
                                                            <span class="icon-dental"></span>
                                                        </div>
                                                        <div class="service-title"><?php the_title(); ?></div>
                                                        <a class="learn-more" href="<?php the_permalink(); ?>">learn more <span
                                                                class="icon-arrow-right"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <p>No Service</p>
                                    <?php } ?>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<!-- Loop for services -->
                                    <?php $args = array (
                                        'post_type' => 'service'
                                    );
                                    $the_query = new WP_Query( $args );
                                    if ( $the_query->have_posts() ) {
                                        while ( $the_query->have_posts() ) {
                                            $the_query->the_post();
                                         ?>
                                    
                                        <div class="col-md-6">
                                            <div class="service-box">
                                                <div class="service-image">
                                                    <!-- Grab the url featured image for full size -->
                                                    <?php
                                                    //$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                                                    ?>
                                                    <img src="<?php the_post_thumbnail( 'full'); ?>" alt="Service" />
                                                </div>
                                                <div class="service-info">
                                                    <div class="service-inner">
                                                        <div class="service-icon comman-icon">
                                                            <span class="icon-dental"></span>
                                                        </div>
                                                        <div class="service-title"><?php the_title(); ?></div>
                                                        <a class="learn-more" href="<?php the_permalink(); ?>">learn more <span
                                                                class="icon-arrow-right"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <p>No Service</p>
                                    <?php } ?>
                                    
                                    <?php
                                    /* Restore original Post Data */
                                    wp_reset_postdata();
                                    ?>

								</div>
							</div>
						</div>
					</div>
					<div class="d-lg-none">
						<div class="service-owl owl-carousel owl-theme">
                            <!-- Loop for services mobile -->
                            <?php $args = array (
                                'post_type' => 'service'
                            );
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                    ?>
                                <div class="item">
                                    <div class="service-box">
                                        <div class="service-image">
                                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="Service" />
                                        </div>
                                        <div class="service-info">
                                            <div class="service-inner">
                                                <div class="service-icon comman-icon">
                                                    <span class="icon-dental"></span>
                                                </div>
                                                <div class="service-title"><?php the_title(); ?></div>
                                                <a class="learn-more" href="<?php the_permalink(); ?>">learn more <span
                                                        class="icon-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php } ?>
                            <?php } else { ?>
                                <p>No Service</p>
                            <?php } ?>
                            
                            <?php
                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>