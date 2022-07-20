<?php $frontpage_id = get_option('page_on_front'); ?>
<!-- Start of Hiring -->
<section class="hiring-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="hiring-content text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('hiring_title',$frontpage_id); ?></h2>
                    <div class="hiring-text white-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <p><?php the_field('hiring_title',$frontpage_id); ?></p>
                    </div>
                    <a href="<?php echo get_permalink(26); ?>" title="Apply Now" class="sec-btn white-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Hiring -->