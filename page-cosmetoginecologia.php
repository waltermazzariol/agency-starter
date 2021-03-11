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
            <h3 class="text-center"> <?php print_r($banner['titulo']); ?> </h3>
            <h4 class="text-center"> <?php print_r($banner['subtitlo']); ?> </h4>
            <div class="text-center"> <?php print_r($banner['descripcion']); ?> </div>
            <hr class="line-center">
        </div>
    </div>
</section>

<section class="container-fluid p-4 bg-beige-lighter">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php print_r($services_img); ?>" />
            </div>
            <div class="col-md-6 ">
                <?php $items = $services; if ($items) : foreach ($items as &$value) : ?>
                <div class="d-flex align-items-center justify-content-around">
                    <div class="item mr-4">
                        <img class="icon-check" src="http://localhost/gulp-theme/wp-content/uploads/2021/02/check.svg"
                            alt="check" />
                    </div>
                    <div class="item">
                        <h4 class="strong mt-4"><?php echo $value['titulo']; ?></h4>
                        <div class="mb-3"><?php echo $value['descripcion']; ?></div>
                        <a class="btn btn-basic"
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