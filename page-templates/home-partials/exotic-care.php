<div class="exotic-care">
		<div class="container">
			<div class="exotic-wrap">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<h4 class="optinal-h4"><?php the_field('exotic_care_title'); ?></h4>
						<h1><?php the_field('exotic_care_subtitle'); ?></h1>
						<?php the_field('exotic_care_content'); ?>
						<a href="<?php the_field('exotic_care_button_link'); ?>" class="btn btn-primary"><?php the_field('exotic_care_button_label'); ?></a>
					</div>
					<div class="col-lg-5">
						<div class="exotic-images">
							<div class="exotic-image1 team-box">
								<div class="team-image">
									<img src="<?php the_field('exotic_care_image_one'); ?>" alt="Exotic" />
								</div>
								<div class="team-title"><?php the_field('exotic_care_title_image_one'); ?></div>
							</div>
							<div class="exotic-image2 team-box">
								<div class="team-image">
									<img src="<?php the_field('exotic_care_image_two'); ?>" alt="Exotic" />
								</div>
								<div class="team-title"><?php the_field('exotic_care_title_image_two'); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>