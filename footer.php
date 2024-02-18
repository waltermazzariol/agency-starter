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
<div class="container-fluid mt-5 py-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 py-4">
                <?php dynamic_sidebar('footer_area_one'); ?>
            </div>
            <div class="col-sm-12 col-md-4 py-4">
                <?php dynamic_sidebar('footer_area_two'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid  bg-primary py-3">
    <div class="row">
        <div class="footer col-sm-12 text-center">
            Copyright &copy; 2024 - <a href="https://guarapomedia.com"
                target="_blank" rel="noopener noreferrer"><img class="icon"
                    src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/guarapo_logo.svg"
                    alt="Guarapo Media" /></a>
        </div><!-- .site-info -->
    </div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>