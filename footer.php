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
<section class="footer py-5 bg-primary">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<?php dynamic_sidebar('footer_area_one'); ?>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer container-fluid bg-primary">
	<div class="site-info text-center wow fadeIn">
		<small class=" text-center text-white">All Rights Reserved. Orlando Molina © 2021-2021</small><br/>
		<a href="https://guarapomedia.com/"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/guarapo_logo.svg" /></a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>