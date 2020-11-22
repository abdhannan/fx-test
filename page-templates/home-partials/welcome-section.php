<div class="welcome-block">
		<div class="container">
        <!-- Check welcome block content -->
        <?php if ( get_field('welcome_team_title') ) : ?>
			<div class="row">
				<div class="col-lg-5 col-md-4 mobile-order2">
					<div class="welcome-box team-box">
						<div class="team-image">
							<img src="<?php the_field('welcome_team_image'); ?>" alt="Welcome" />
						</div>
						<div class="team-title">
							<?php the_field('welcome_team_title'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="welcome-content">
						<h4 class="optinal-h4"><?php the_field('welcome_team_content_title'); ?></h4>
						<h1><?php the_field('welcome_team_content_subtitle'); ?></h1>
						<?php the_field('welcome_team_content_description'); ?>
						<a href="<?php the_field('welcome_team_content_button_link'); ?>" class="btn btn-primary"><?php the_field('welcome_team_content_button_label'); ?></a>
					</div>
				</div>
            </div>
            <?php else: ?>
                <p>No Welcome Block Content</p>
            <?php endif; ?>
            <!-- End of checking -->
		</div>
    </div>