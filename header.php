<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_enqueue_script("jquery"); ?>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- Header Start -->
	<div class="covid-message">
		<div class="container">
			<div class="covid-text">
				<?php the_field('flash_message_content', 'option'); ?>
			</div>
			<div class="covid-link">
				<a class="learn-more" href="<?php the_field('flash_message_button_link' , 'option'); ?>"><?php the_field('flash_message_button_label' , 'options'); ?> <span class="icon-arrow-right"></span></a>
			</div>
			<a href="javascript:void(0);" class="icon-close removeit"></a>
		</div>
	</div>
	<header class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-logo">
					<a href="<?php bloginfo( 'url' ); ?>">
						<?php
							the_custom_logo();
						?>
					</a>
				</div>
				<div class="header-right">
					<div class="header-content">
						<div class="call-us"><span><?php the_field('call_us_text', 'option'); ?></span> <a href="tel:<?php the_field('call_us_phone', 'option'); ?>"><?php the_field('call_us_phone', 'option'); ?></a></div>
						<div class="online-request">
							<a href="<?php the_field('cta_button_link_1', 'option'); ?>" class="btn btn-secondary"><?php the_field('cta_button_label_1', 'option'); ?></a>
							<a href="<?php the_field('cta_button_link_2', 'option'); ?>" class="btn btn-primary"><?php the_field('cta_button_label_2', 'option'); ?></a>
						</div>
					</div>
					<div class="header-bottom">
						<nav class="navbar navbar-expand-lg navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="menu-text">Menu</span>
							</button>
							<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary-header',
								'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarSupportedContent',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							) );
							?>
							
						</nav>
						<div class="header-search">
							<a href="javascript:void(0);" class="icon-search"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="searchbar">
			<div class="container">
				<div class="searchbar-inner">
					<input type="text" class="form-control" placeholder="Search here..." />
					<button type="submit" class="btn search-btn icon-search"></button>
				</div>
			</div>
		</div>

		<div class="mobile-bottom-header">
			<div class="call-us">
				<span><?php the_field('call_us_text', 'option'); ?> </span>
				<a href="tel:<?php the_field('call_us_phone', 'option'); ?>"><?php the_field('call_us_phone', 'option'); ?></a>
			</div>
		</div>
	</header>
	<!-- Header End -->