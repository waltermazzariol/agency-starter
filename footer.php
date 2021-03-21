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
<section class="footer py-5 bg-blue">
	<div class="container">
		<div class="row text-white">
			<div class="col-sm-12 col-md-6">
				<?php dynamic_sidebar('footer_area_one'); ?>
			</div>

			<div class="col-sm-12 col-md-2">
				<?php dynamic_sidebar('footer_area_two'); ?>
			</div>

			<div class="col-sm-12 col-md-2">
				<?php dynamic_sidebar('footer_area_three'); ?>
			</div>

			<div class="col-sm-12 col-md-2">
				<?php dynamic_sidebar('footer_area_four'); ?>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer container-fluid bg-blue">
	<div class="site-info text-center">
		<a href="https://guarapomedia.com/"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/guarapo_logo.svg" /></a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>