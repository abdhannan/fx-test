<div class="fun-fact line-bg">
		<div class="container">
			<div class="fun-friday">
				<?php the_field('fun_fact_title'); ?>
				<span class="friday-label"><?php the_field('fun_fact_day'); ?></span>
			</div>
			<div class="fun-fact-owl owl-carousel">
                <?php
                // Star Query Loop
                $args = array (
                    'post_type' => 'funfact'
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post(); ?>
                        <div class="item">
                            <div class="fun-image">
                                <img src="<?php the_post_thumbnail_url('url'); ?>" alt="<?php the_title(); ?>">
                                <a class="play-icon icon-youtube" href="javascript:void(0);"></a>
                            </div>
                            <div class="fun-content">
                                <?php the_content(); ?>
                                
                                <a class="btn btn-primary" href="<?php the_permalink(  ); ?>">View Our Video Library</a>
                            </div>
                        </div>

                    <?php } ?> 
                <?php } else { ?>
                    <p>No Fun Fact</p>
                <?php } ?>
				
				<?php
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
			</div>
		</div>
	</div>