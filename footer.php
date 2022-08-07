<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_guarapo
 */

?>
<section class="footer pt-5 pb-3 bg-secondary">
	<div class="container">
		<div class="row text-center">
			<div data-aos="fade-up" class="col-sm-12 col-md-12">
				<?php dynamic_sidebar('footer_area_two'); ?>
			</div>			
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer container-fluid bg-primary">
	<div class="site-info text-center">
		<small class="text-white pt-4">©2022 Voices Inc. <a href="https://taconessabios.com/privacy-policy/" target="_blank" class="text-white">Privacy Policy</a> Built and Designed by:</small>
		<a href="https://guarapomedia.com/"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/guarapo_logo.svg" /></a>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>