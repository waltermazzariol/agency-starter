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
$banner = get_field('banner');
$services_img = get_field('service_image');
$services = get_field('services');
if ($banner) :
?>
<section class="container py-4">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center animated fadeIn"> <?php print_r($banner['titulo']); ?> </h3>
            <h4 class="text-center animated fadeIn"> <?php print_r($banner['subtitlo']); ?> </h4>
            <div class="text-center animated fadeIn"> <?php print_r($banner['descripcion']); ?> </div>
            <hr class="line-center">
        </div>
    </div>
</section>

<section class="container-fluid p-4 bg-beige-lighter">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class=" animated fadeIn" src="<?php print_r($services_img); ?>" />
            </div>
            <div class="col-md-8 d-flex flex-wrap w-100">
                <?php $items = $services; if ($items) : foreach ($items as &$value) : ?>
                <div class="d-flex align-items-center justify-content-start">
                    <div class="item ml-3 mr-5">
                        <img class="icon-check animated fadeIn" src="/sandbox/wp-content/uploads/2021/02/check.svg"
                            alt="check" />
                    </div>
                    <div class="item">
                        <h4 class="strong mt-4 animated fadeIn"><?php echo $value['titulo']; ?></h4>
                        <div class="mb-3 animated fadeIn"><?php echo $value['descripcion']; ?></div>
                        <a class="btn btn-basic animated fadeIn"
                            href="<?php print_r($value['boton_url']); ?>"><?php print_r($value['boton_texto']); ?>
                        </a>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>

</section>
<?php endif ?>

<?php
get_footer();