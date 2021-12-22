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

<?php $button = get_field('boton'); $banner = get_field('banner_superior'); if ($banner) : ?>
<section class="container-fluid py-4">
    <h3 class="text-center"> <?php print_r($banner); ?> </h3>
    <hr class="line-center">
</section>
<?php endif ?>

<?php $section_1 = get_field('section_1'); if ($section_1) : ?>
<section class="container-fluid bg-beige-lighter">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 mb-3">
                <img class=" animated fadeIn" src="<?php print_r($section_1['image']); ?>" />
            </div>
            <div class="col-md-8">
                <h2> <?php print_r($section_1['titulo']); ?> </h2>
                <div class="mb-3"> <?php print_r($section_1['descripcion']); ?> </div>
                <div class="container">
                    <div class="row">
                        <?php
                            $index = 1;
                            $items = $section_1['items'];
                            if ($items) :
                                foreach ($items as &$value) :
                            ?>
                        <div class="col-md-4">
                            <h4 class="strong mt-3 animated fadeIn"><?php echo $value['titulo']; ?></h4>
                            <div class=" animated fadeIn"><?php echo $value['descripcion']; ?></div>
                        </div>
                        <?php
                        endforeach;
                            endif;
                    ?>
                    </div>
                </div>
                <div class="col-12 mt-5 text-center animated fadeIn"><a class="btn btn-basic"
                        href="<?php print_r($section_1['url_boton']); ?>"><?php print_r($section_1['texto_boton']); ?></a></div>
            </div>
        </div>
    </div>
</section>


<?php endif ?>

<?php
$section_2 = get_field('section_2');
if ($section_2) :
?>
<section class="container-fluid">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8">
                <h2 class=" animated fadeIn"> <?php print_r($section_2['titulo']); ?> </h2>
                <div class="mb-3 animated fadeIn"> <?php print_r($section_2['descripcion']); ?> </div>
                <div class="container">
                    <div class="row">
                        <?php $items = $section_2['items']; if ($items) : foreach ($items as &$value) : ?>
                        <div class="col-md-6">
                            <h4 class="strong mt-3"><?php echo $value['titulo']; ?></h4>
                            <div class=""><?php echo $value['descripcion']; ?></div>
                        </div>
                        <?php endforeach; endif; ?>
                        <div class="col-12 mt-5 text-center mb-3">
                            <a class="btn btn-basic" href="<?php print_r($section_2['url_boton']); ?>">
                                <?php print_r($section_2['texto_boton']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="<?php print_r($section_2['image']); ?>" />
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php $section_3 = get_field('section_3'); if ($section_3) : ?>
<section class="container-fluid  bg-beige-lighter">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 mb-4">
                <img class="animated fadeIn" src="<?php print_r($section_3['image']); ?>" />
            </div>
            <div class="col-md-8">
                <h2> <?php print_r($section_3['titulo']); ?> </h2>
                <div class="mb-3"> <?php print_r($section_3['descripcion']); ?> </div>
                <div class="container">
                    <div class="row">
                        <?php $items = $section_3['items']; if ($items) : foreach ($items as &$value) : ?>
                        <div class="col-12">
                            <h4 class="strong mt-4 animated fadeIn"><?php echo $value['titulo']; ?></h4>
                            <div class="animated fadeIn"><?php echo $value['descripcion']; ?></div>
                        </div>
                        <?php endforeach; endif; ?>
                        <div class="col-12 mt-5 text-center animated fadeIn"><a class="btn btn-basic"
                                href="<?php print_r($section_3['url_boton']); ?>"><?php print_r($section_3['texto_boton']); ?></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php
$section_4 = get_field('section_4');
if ($section_4) :
?>
<section class="container-fluid">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8">
                <h2 class=" animated fadeIn"> <?php print_r($section_4['titulo']); ?> </h2>
                <div class="mb-3 animated fadeIn"> <?php print_r($section_4['descripcion']); ?> </div>
                <div class="container">
                    <div class="row">
                        <?php
                            $index = 1;
                            $items = $section_4['items'];
                            if ($items) :
                                foreach ($items as &$value) :
                            ?>
                        <div class="col-12">
                            <h4 class="strong animated fadeIn"><?php echo $value['titulo']; ?></h4>
                            <div class="animated fadeIn"><?php echo $value['descripcion']; ?></div>
                        </div>
                        <?php endforeach; endif; ?>
                        <div class="col-12 mt-5 text-center mb-4 animated fadeIn"><a class="btn btn-basic"
                                href="<?php print_r($section_4['url_boton']); ?>"><?php print_r($section_4['texto_boton']); ?></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="<?php print_r($section_4['image']); ?>" />
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php
$section_5 = get_field('section_5');
if ($section_5) :
?>
<section class="container-fluid bg-beige-lighter">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 mb-4">
                <img class="animated fadeIn" src="<?php print_r($section_5['image']); ?>" />
            </div>
            <div class="col-md-8">
                <h2 class=""> <?php print_r($section_5['titulo']); ?> </h2>
                <div class="mb-3 animated fadeIn"> <?php print_r($section_5['descripcion']); ?> </div>
                <div class="container">
                    <div class="row">
                        <?php
                            $index = 1;
                            $items = $section_5['items'];
                            if ($items) : foreach ($items as &$value) : ?>
                        <div class="col-12">
                            <h4 class="strong mt-4 animated fadeIn"><?php echo $value['titulo']; ?></h4>
                            <div class="mb-4 animated fadeIn"><?php echo $value['descripcion']; ?></div>
                        </div>
                        <?php endforeach; endif; ?>
                        <div class="col-12 mt-5 text-center animated fadeIn"><a class="btn btn-basic"
                                href="<?php print_r($section_5['url_boton']); ?>"><?php print_r($section_5['texto_boton']); ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php
get_footer();
