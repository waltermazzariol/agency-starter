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

get_header(); ?>



<?php get_template_part( 'template-parts/hero' ); ?>


<?php if (have_rows('contact')) : ?>
<section class="container contact">
    <div class="row contact-wrapper justify-content-md-center">
        <?php while (have_rows('contact')) : the_row();
                // Load sub field value.
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $icon = get_sub_field('icon');
            ?>
        <div class="contact-item col-md-4 col-lg-3">
            <img class="animated bounceInDown" src="<?php echo $icon ?>" alt="icon" />
            <hr>
            <div class="title animated fadeIn"><?php echo $title ?>:</div>
            <div class="description animated fadeIn"><?php echo $description ?></div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php
endif;
?>


<?php $short_bio = get_field('short_bio'); if ($short_bio) : ?>
<section class="biography container my-5">
    <div class="row justify-content-md-center">
        <div class="col-lg-6">
            <img class="mx-auto d-block animated fadeIn" src="<?php print_r($short_bio['image']); ?>" alt="biofrafia" />
        </div>
        <div class="col-lg-6">
            <h3 class="title  animated fadeIn"><?php print_r($short_bio['title']); ?></h3>
            <div class="subtitle animated fadeIn"><?php print_r($short_bio['subtitle']); ?></div>
            <p class="mb-3 animated fadeIn"><?php print_r($short_bio['description']); ?></p>
            <a class="btn btn-basic animated fadeIn" href="<?php print_r($short_bio['url_boton']); ?>">
                <?php print_r($short_bio['texto_boton']); ?>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/box', 'card' ); ?>

<?php $testimonios = get_field('testimonios'); if ($testimonios) : ?>
<Section class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 px-0  box-container banner">
            <div class="box-fluid">
                <img class="box-fluid-image animated fadeIn" src="<?php echo esc_url($testimonios['image']); ?>" alt="profile" />
            </div>
        </div>
        <div class="col-sm-12 col-md-8 py-4">
            <h2 class="mb-4 ml-2"> <?php print_r($testimonios['title']); ?></h2>
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                                    $testimonios_item = $testimonios['reviews'];
                                    if ($testimonios_item) :
                                        foreach ($testimonios_item as $key => $value) :
                                    ?>
                        <div class="carousel-item <?php if ($key === 0) { echo ' active';} ?>">
                            <img class="quote mb-3"
                                src="<?php echo get_template_directory_uri(); ?>/dist/assets/image/quote.svg" />
                            <p class="description"><?php echo $value['description']; ?></p>
                            <h5 class="name"><?php echo $value['name']; ?></h5>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</Section>
<?php endif; ?>

<?php $form = get_field('form'); if ($form) : ?>
<section class="container-fluid"
    style="background-image: url('<?php echo esc_url($form['image']); ?>'); background-repeat: no-repeat; background-size: cover;">
    <div class="row justify-content-center">
        <div class="my-4 p-4 col-md-8 bg-white formulario text-center">
            <h2 class="ml-2 animated fadeIn"> <?php print_r($form['title']); ?></h2>
            <p class="mb-4 ml-2 animated fadeIn"> <?php print_r($form['subtitle']); ?></p>
            <a class="btn btn-basic animated fadeIn" href="<?php print_r($form['boton_url']); ?>">
                <?php print_r($form['boton_texto']); ?>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
get_footer();