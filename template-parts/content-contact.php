<!-- Start of Inner Banner -->
<section class="inner-banner bg-img" style="background-image: url('<?php the_field('banner_image') ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="inner-banner-content">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Contact -->
<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="contact-content">
                    <h4><?php the_field('title') ?></h4>
                    <p><?php the_field('sub_title') ?></p>
                    <div class="contact-link">
                        <ul>
                            <li>
                                <?php
									$phone = get_field('phone', 'option');
									$val = array("(", ")", " ", "-", ".");
									$replace = array("", "", "", "", "");
									$phone_link = str_replace($val, $replace, $phone);
								?>                                
                                <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>" class="phone">
                                    <span><img width="17" height="17" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/phone-red.svg" alt="Phone"></span>
                                    <span class="callus"><?php echo $phone; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('address_link', 'option'); ?>" title="<?php the_field('address', 'option'); ?>" target="_blank">
                                    <span><img width="20" height="20" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/map-red.svg" alt="Map"></span> <?php the_field('address', 'option'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?php the_field('email', 'option'); ?>" title="<?php the_field('email', 'option'); ?>" target="_blank">
                                    <span><img width="20" height="13" src="<?php echo home_url(); ?>/wp-content/themes/wil-mar/assets/images/mail-red.svg" alt="Email"></span> <?php the_field('email', 'option'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="contact-form">
                    <h2 class="h2-title">Contact Form</h2>
                    <?php echo do_shortcode('[contact-form-7 id="72" title="Contact Page"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Contact -->