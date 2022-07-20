<!-- Start of Main Banner -->
<section class="main-banner bg-img" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-content">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('banner_title'); ?></h1>
                        <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <?php
                            $phone = get_field('phone', 'option');
                            $val = array("(", ")", " ", "-", ".");
                            $replace = array("", "", "", "", "");
                            $phone_link = str_replace($val, $replace, $phone);
                            ?>
                            <a href="tel:<?php echo $phone_link; ?>" title="CALL <?php echo $phone; ?>" class="sec-btn">
                                <span>CALL <span class="callus"><?php echo $phone; ?></span></span>
                            </a>
                            <a href="<?php echo get_permalink(28); ?>" title="Contact Us" class="sec-btn white-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Main Banner -->

<!-- Start of About Us -->
<section class="about-sec" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-img-wp">
                    <div class="about-img bg-img" style="background-image: url('<?php the_field('about_us_image'); ?>');"></div>
                </div>
            </div>
            <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-content">
                    <h2 class="h2-title"><?php the_field('about_us_title'); ?></h2>
                    <div class="about-text">
                        <?php the_field('about_us_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of We Serve -->
<section class="we-serve-sec">
    <img width="916" height="544" src="<?php the_field('who_we_serve_background_logo'); ?>" alt="Serve Logo" class="img">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="servce-content">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('who_we_serve_title'); ?></h2>
                    <div class="serve-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <?php the_field('who_we_serve_content'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (have_rows('who_we_serve_list')) { ?>
            <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <div class="serve-list">
                        <ul>
                            <?php
                            while (have_rows('who_we_serve_list')) {
                                the_row();
                                $icon = get_sub_field('point_icon'); ?>
                                <li>
                                    <div class="serve-box white-text">
                                        <span class="serve-icon">
                                            <img width="<?php echo $icon['width']; ?>" height="<?php echo $icon['height']; ?>" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                        </span>
                                        <span class="serve-title"><?php the_sub_field('point'); ?></span>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- End of We Serve -->

<!-- Start of Service -->
<section class="our-service-sec" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="sec-title text-center">
                    <h2 class="h2-title"><?php the_field('our_service_title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="service-list">
        <?php
        if (have_rows('services')) :
            $service_counter = 1;
            $odd_counter = 1;
            while (have_rows('services')) : the_row(); ?>
                <?php if ($service_counter % 2 == 0) : ?>
                    <div class="service-row even">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <div class="service-content">
                                        <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                        <?php the_sub_field('service_content'); ?>
                                        <a href="<?php the_sub_field('page_link'); ?>" title="<?php echo strip_tags(get_sub_field('service_title')); ?> More Info" class="more-info">More Info <span class="icon"><img width="20" height="11" src="http://192.168.29.162/wil-mar/wp-content/themes/wil-mar/assets/images/double-arrow.svg" alt="Double Arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="service-row odd <?php echo (($odd_counter % 2 == 0) ?  'odd-bg-shape' : ''); ?>">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="service-content">
                                        <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                        <?php the_sub_field('service_content'); ?>
                                        <a href="<?php the_sub_field('page_link'); ?>" title="<?php echo strip_tags(get_sub_field('service_title')); ?> More Info" class="more-info">More Info <span class="icon"><img width="20" height="11" src="http://192.168.29.162/wil-mar/wp-content/themes/wil-mar/assets/images/double-arrow.svg" alt="Double Arrow"></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $odd_counter++;
                endif; ?>
        <?php
                $service_counter++;
            endwhile;
        endif; ?>
    </div>
</section>
<!-- End of Service -->

<!-- Start of Additional Service -->
<section class="additional-service-sec bg-img" style="background-image: url('<?php the_field('product_background_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="additional-service-content">
                        <h2 class="h2-title"><?php the_field('products_title'); ?></h2>
                        <div class="additional-text">
                            <?php the_field('product_content'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="additional-service-list white-text">
                        <h4><?php the_field('other_service_title'); ?></h4>
                        <ul>
                            <?php
                            if (have_rows('other_services_list')) {
                                while (have_rows('other_services_list')) {
                                    the_row(); ?>
                                    <li><?php the_sub_field('other_service_title'); ?></li>
                            <?php }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Additional Service -->

<!-- Start of Brand -->
<div class="brand-sec">
    <div class="container">
        <div class="row brands-slider wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
            <?php
            if (have_rows('brands_list')) {
                while (have_rows('brands_list')) {
                    the_row();
                    $brand_icon = get_sub_field('brand_icon');
                    $brand_icon =  ((isset($brand_icon) && !empty($brand_icon)) ? $brand_icon : home_url() . '/wp-content/uploads/2022/07/screw-driver.svg'); ?>
                    <div class="col-lg-2">
                        <div class="brand-box text-center">
                            <span class="icon">
                                <img width="56" height="56" src="<?php echo $brand_icon; ?>" alt="Brand Icon">
                            </span>
                            <a href="javascript:void(0);" title="<?php echo strip_tags(get_sub_field('brand_title')); ?>" class="link"><?php the_sub_field('brand_title'); ?></a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- End of Brand -->

<?php get_template_part('template-parts/content', 'hiring'); ?>