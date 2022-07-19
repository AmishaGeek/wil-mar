<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wil-mar
 */

?>

<footer id="colophon" class="site-footer">
	<div class="top-footer bg-img" style="background-image: url('<?php the_field('footer_background_image','option'); ?>');">
		<div class="sec-wp">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="footer-content">
							<div class="footer-logo">
								<a href="<?php echo home_url(); ?>" title="WIL-MAR Hydraulics & Machine Inc" class="custom-logo-link">
									<img width="243" height="144" src="<?php the_field('footer_logo','option'); ?>" alt="Footer Logo">
								</a>
							</div>
							<div class="footer-text">
								<?php the_field('footer_content','option'); ?>
							</div>
							<div class="footer-contact-link">
								<div class="contact-link">
									<ul>
										<li>
											<a href="mailto:<?php the_field('email','option'); ?>" title="<?php the_field('email','option'); ?>" target="_blank">
												<span><img width="20" height="13" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/email.svg" alt="Email"></span> <?php the_field('email','option'); ?>
											</a>
										</li>
										<li>
											<a href="<?php the_field('address_link','option'); ?>" title="<?php the_field('address','option'); ?>" target="_blank">
												<span><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/map.svg" alt="Map"></span> <?php the_field('address','option'); ?>
											</a>
										</li>
										<li>
											<a href="<?php the_field('facebook_link','option'); ?>" target="_blank" title="Follow On Facebook" class="fb">
												<svg xmlns="http://www.w3.org/2000/svg" width="10.223" height="19.167" viewBox="0 0 10.223 19.167">
													<path id="Face" d="M492.538,5334.841l.451-3.408h-3.465v-2.176c0-.986.283-1.659,1.735-1.659h1.852v-3.047a25.536,25.536,0,0,0-2.7-.134,4.16,4.16,0,0,0-4.5,4.5v2.512h-3.022v3.408h3.022v8.742h3.614v-8.742Z" transform="translate(-482.888 -5324.417)" fill="#fff" />
												</svg>
											</a>
											<?php
												$phone = get_field('phone', 'option');
												$val = array("(", ")", " ", "-", ".");
												$replace = array("", "", "", "", "");
												$phone_link = str_replace($val, $replace, $phone);
											?>
											<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>" class="header-call">
												<span class="call-icon"> <img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/call.svg" alt="Phone"></span> <span class="callus"> <?php echo $phone; ?> </span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="contact-form">
							<h3 class="h3-title">Contact Us</h3>
							<?php echo do_shortcode('[contact-form-7 id="63" title="Footer Form"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="footer-menu">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
							)
						);
						?>
					</div>
					<div class="copyright">
						<ul>
							<li>&copy; <?php echo date('Y'); ?> WIL-MAR Hydraulics & Machine Inc</li>
							<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
							<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Use">Terms of Use</a></li>
							<li><a href="<?php echo home_url(); ?>/cookies-policy" title="Cookies Policy">Cookies Policy</a></li>
						</ul>
						<p>Web Design & Digital Marketing with <span><i class="fas fa-heart"></i></span> by	<a href="https://www.dotcomdesign.com/" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer><!-- #colophon -->
<div class="cta-btn"> <a href="tel:<?php echo $phone_link; ?>" class="sec-btn" title="Call <?php echo $phone; ?>"> <span>Call</span> <span class="callus"><?php echo $phone; ?></span></a></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>