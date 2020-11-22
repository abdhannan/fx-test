<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package University_Animal_CLinic
 */

?>

<!-- Footer Start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-logo">
					<a href="<?php the_field('footer_company_link', 'option'); ?>">
						<img src="<?php the_field('footer_company_logo', 'option'); ?>" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				</div>
				<div class="footer-social">
					<ul>
						<li>
							<a href="<?php the_field('facebook_link', 'option'); ?>" class="icon-facebook"></a>
						</li>
						<li>
							<a href="<?php the_field('instagram_link', 'option'); ?>" class="icon-instagram"></a>
						</li>
						<li>
							<a href="<?php the_field('youtube_link', 'option'); ?>" class="icon-youtube"></a>
						</li>
						<li>
							<a href="<?php the_field('tiktok_link', 'option'); ?>" class="icon-tiktoc"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-contact">
					<h4><?php the_field('contact_information_title', 'option'); ?></h4>
					<p>
					<?php the_field('contact_information_address_1', 'option'); ?> <br />
					<?php the_field('contact_information_address_2', 'option'); ?>
					<br/>
						<a class="learn-more" href="<?php the_field('contact_information_direction_link', 'option'); ?>">Get Directions <span class="icon-arrow-right"></span></a>
					</p>
					<p>
						Phone: <a class="color-body" href="tel:<?php the_field('contact_information_phone', 'option'); ?>"><?php the_field('contact_information_phone', 'option'); ?></a>
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-contact">
					<h4><?php the_field('hours_operation_title', 'option'); ?></h4>
					<?php the_field('hours_operation_content', 'option'); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-contact">
					<h4><?php the_field('footer_award_title', 'option'); ?></h4>
					<ul class="award-logos">
						<li>
							<img src="<?php the_field('award_logo_1', 'option'); ?>" alt="Award" />
						</li>
						<li>
							<img src="<?php the_field('award_logo_2', 'option'); ?>" alt="Award" />
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="bottom-wrap">
				<div class="footer-left">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'container_class' => 'footer-menu'
					) );
					?>
					<div class="copyright">
						<?php the_field('footer_copyright_text', 'option'); ?>
					</div>
				</div>
				<div class="back-top">
					<a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
				</div>
			</div>
		</div>
	</div>
</footer>
	<!-- Footer End -->


<?php wp_footer(); ?>

</body>
</html>
