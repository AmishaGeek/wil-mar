<!-- Start of Inner Banner -->
<section class="inner-banner bg-img" style="background-image: url('<?php the_field('banner_image') ?>');">
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

<!-- Start of Career -->
<section class="career-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="career-content text-center">
                    <h2 class="h2-title"><?php the_field('title') ?></h2>
                    <p><?php the_field('sub_title') ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="176" title="Careers Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Career -->