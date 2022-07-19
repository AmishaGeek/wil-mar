<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wil-mar
 */

get_header();
?>
<section class="inner-banner inner-banner-page">
    <div class="inner-banner-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/07/main-banner.jpg');"></div>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="banner-text white-text">
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wil-mar' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- emd of main-banner -->
<div class="error-404">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img width="424" height="353" src="<?php echo home_url(); ?>/wp-content/themes/turner-diesel/assets/images/404.svg" alt="Error">
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
