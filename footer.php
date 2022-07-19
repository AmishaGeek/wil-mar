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
	<?php #echo do_shortcode('[contact-form-7 id="63" title="Footer Form"]'); ?>

		<!-- Footer Menu -->
		<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-2',
			// 	)
			// );
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
