<!-- Start of Inner Banner -->
<section class="inner-banner bg-img" style="background-image: url('<?php the_field('banner_image'); ?>');">
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
<!-- Start of Service details -->
<div class="service-details-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <?php the_content(); ?>
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
                    <div class="service-row odd <?php echo (($odd_counter % 2 != 0) ?  'odd-bg-shape' : ''); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <div class="service-content">
                                        <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                        <?php the_sub_field('service_content'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $odd_counter++; ?>
                <?php else : ?>
                    <div class="service-row even">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="service-img-wp">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="service-content">
                                        <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                        <?php the_sub_field('service_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                endif;
                $service_counter++;
            endwhile;
        endif; ?>
    </div>
</div>
<!-- End of Service details -->

<?php get_template_part('template-parts/content', 'hiring'); ?>