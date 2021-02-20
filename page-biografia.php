<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress_gulp_starter
 */

get_header();
?>

<?php get_template_part('template-parts/cover'); ?>

<?php
$biografia = get_field('biografia');
if ($biografia) :
?>
    <section class="biografia container pt-4 mb-4">
        <div class="row">
            <div class="col-sm-12 pt-4">
                <h2 class="biografia-title"><?php print_r($biografia['title']); ?></h2>
            </div>

            <div class="col-md-7 mb-2">
                <p class="biografia-description"><?php print_r($biografia['description']); ?></p>
            </div>
            <div class="col-md-5">
                <div class="box-fluid">
                    <img class="box-fluid-image" src="<?php echo esc_url($biografia['image']); ?>" alt="profile" />
                </div>
            </div>

        </div>
    </section>
<?php
endif;
?>

<?php
$reconocimiento = get_field('reconocimiento');
if ($reconocimiento) :
?>

    <section class="container-fluid py-4 bg-gray">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 pt-4">
                    <h2><?php print_r($reconocimiento['title']); ?></h2>
                    <p><?php print_r($reconocimiento['description']); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-4">
        <div class="row ">
            <div class="col-sm-12 pt-2">
                <p><?php print_r($reconocimiento['description-2']); ?></p>
            </div>
        </div>
    </section>

<?php
endif;
?>

<?php get_template_part('template-parts/box', 'simple'); ?>


<?php
get_footer();
