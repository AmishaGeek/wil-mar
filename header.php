<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wil-mar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/fonts/Montserrat-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/fonts/Montserrat-ExtraBold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/fonts/Montserrat-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/fonts/Montserrat-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<!-- Header Start -->
		<header id="masthead" class="site-header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="contact-link">
								<ul>
									<li>
										<a href="javascript:void(0);" title="105 Littlefoot Ln. Madisonville, KY 42431" target="_blank">
											<span><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/map.svg" alt="Map"></span> 105 Littlefoot Ln. Madisonville, KY 42431
										</a>
									</li>
									<li>
										<a href="tel:wilmarhydraulics@outlook.com" title="wilmarhydraulics@outlook.com" target="_blank">
											<span><img width="20" height="13" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/email.svg" alt="Email"></span> wilmarhydraulics@outlook.com
										</a>
									</li>
									<li>
										<a href="tel:2703228654" title="(270) 322-8654" class="header-call">
											<span class="call-icon"> <img width="14" height="14" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/call.svg" alt="Phone"></span> <span class="callus"> (270) 322-8654 </span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header-menu">
				<div class="container">
					<div class="header-menu-box">
						<div class="row">
							<div class="col-lg-2">
								<div class="site-branding">
									<?php the_custom_logo(); ?>
								</div>
							</div>
							<div class="col-lg-10">
								<div class="header-menu">
									<nav id="site-navigation" class="main-navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
											<span></span>
											<span></span>
											<span></span>
										</button>
										<div class="header-mobile-menu">
											<?php
											wp_nav_menu(
												array(
													'theme_location' => 'menu-1',
													'menu_id'        => 'primary-menu',
												)
											);
											?>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->