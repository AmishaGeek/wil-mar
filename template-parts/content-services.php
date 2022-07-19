<!-- Start of Inner Banner -->
<section class="inner-banner bg-img" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="inner-banner-content">
                        <h1 class="h1-title"><?php the_title(); ?></h1>
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
                <div class="service-text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <ul class="service-list">
        <?php
            if (have_rows('services')) :
                $service_counter = 1;
                $odd_counter = 1;
                while (have_rows('services')) : the_row(); ?>
                    <li>
                        <?php if ($service_counter % 2 == 0) : ?>
                            <div class="service-row odd <?php echo (($odd_counter % 2 != 0) ?  'odd-bg-shape' : ''); ?>">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 order-2 order-lg-1">
                                            <div class="service-content">
                                                <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                                    <?php the_sub_field('service_content'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 order-1 order-lg-2">
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
                                        <div class="col-lg-6">
                                            <div class="service-img-wp">
                                                <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-content">
                                                <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                                    <?php the_sub_field('service_content'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <?php
                    endif;
				    $service_counter++;
			    endwhile;
		    endif; ?>
    </ul>
</div>
<!-- End of Service details -->

<?php get_template_part('template-parts/content', 'hiring'); ?>