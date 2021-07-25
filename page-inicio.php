<?php
/**
* Template Name: Home page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();
?>

<main id="primary" class="site-main">
    <?php $destacado = get_field('destacado'); ?>
    <section class="container-fluid px-0">
        <div class="hero"
            style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="hero-wrapper container d-flex">
                <div data-aos="fade-up" class="hero-content py-4 d-flex ">
                    <span class="hero-content-img">
                        <img src="<?php print_r($destacado['foto_destacada']); ?>" />
                    </span>
                    <span class="hero-content-text">
                        <div class="hero-subtitle animated fadeIn"><?php print_r($destacado['titulo_cabecera']); ?>
                        </div>
                        <h1 class="hero-title animated fadeInDown"><?php print_r($destacado['titulo']); ?></h1>
                        <a href="" class="">
                            <img class="hero-icon title-icon"
                                src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/play.svg" />
                            <span class="hero-listen ml-2 animated fadeIn">COMENZAR A ESCUCHAR</span>
                        </a>
                    </span>
                </div>

            </div>
        </div>
    </section>

    <?php
        $tacones_sabios = get_field('tacones_sabios');
    ?>
    <section class="container py-5">
        <div class="row no-gutters">
            <div class="col-12 text-center">
                <h2><span class="underline animated fadeIn"><?php print_r($tacones_sabios['titulo']); ?></span></h2>
            </div>
            <div class="col-md-6 px-0" data-aos="fade-right">
                <img class="img-fluid" src="<?php print_r($tacones_sabios['imagen']); ?>" alt="" />
            </div>
            <div class="col-md-6 px-0 align-self-center position-relative" data-aos="fade-left">
                <div class="bg-light-brown text-white px-3 py-5">
                    <div class="text-big mb-3"><?php print_r($tacones_sabios['descripcion']); ?></div>
                    <img class="raya"
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/fondo-raya.png" />
                </div>
            </div>
        </div>
    </section>

    <?php
        $nombre_categoria = get_field('nombre_categoria');
    ?>
    <section class="container py-5">
        <div class="row no-gutters">
            <div data-aos="fade-up" class="col-12 text-center">
                <img class="title-icon mb-3"
                    src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/micro.svg" />
                <h3 class="mb-4"><span data-aos="zoom-in"
                        class="underline"><strong><?php print_r($nombre_categoria['titulo']); ?></strong></span></h3>
            </div>

            <?php $args = array(
                    'posts_per_page' => 6,
                    'cat'   => $nombre_categoria['categoria']
                    );
                    
                    $arr_posts = new WP_Query( $args );
                    if ( $arr_posts->have_posts() ) :
 
                        while ( $arr_posts->have_posts() ) :
                            $arr_posts->the_post();
                            get_template_part( 'template-parts/content', 'podcast' );

                        endwhile;
                    endif;
                    /* Restore original Post Data */
                    wp_reset_postdata();
                    ?>
            <div class="col-12 my-5 text-center">
                <a href="/category/health" class="btn-outline">Ver más</a>
            </div>
        </div>
    </section>

    <?php
        $escuchanos = get_field('escuchanos');
    ?>
    <section class="container-fluid bg-light-brown py-5"
        style="background-image: url('<?php print_r($escuchanos['imagen']); ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="row no-gutters">
            <div class="col-12 text-center text-white mt-5">
                <p><?php print_r($escuchanos['titulo']); ?></p>
                <div  data-aos="zoom-in" class="d-flex justify-content-center">
                    <?php
                    $iconos_item = $escuchanos['iconos'];
                    if ($iconos_item) : foreach ($iconos_item as &$value) : ?>
                    <a href="<?php echo $value['url']; ?>" target="_blank"><i
                            class="<?php echo $value['icono']; ?> mx-3 text-white"></i></a>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-dark-brown pt-3 px-0">
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="text-white">@taconessabios</h3>
        </div>
        <div class="row no-gutters mx-0">
            <?php
             $galeria = get_field('galeria');
            if ($galeria) : foreach ($galeria as &$value) : ?>
            <div  data-aos="flip-left" class="col-md-2 col-sm-6">
                <a href="<?php echo $value['url']; ?>" target="_blank">
                    <img class="fluid-img" src="<?php echo $value['imagen']; ?>" /></a>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </section>

    <?php
        $nombre_categoria_blog = get_field('nombre_categoria_blog');
    ?>
    <section class="container py-5">
        <div class="row no-gutters">
            <div data-aos="fade-up" class="col-12 text-center">
                <img class="title-icon mb-3"
                    src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/blog.svg" />
                <h3 class="mb-4"><span
                        class="underline"><strong><?php print_r($nombre_categoria['titulo']); ?></strong></span></h3>
            </div>
            <?php $args = array(
                    'posts_per_page' => 3,
                    'cat'   => $nombre_categoria_blog['categoria']
                    );
                    
                    $arr_posts = new WP_Query( $args );
                    if ( $arr_posts->have_posts() ) :
 
                        while ( $arr_posts->have_posts() ) :
                            $arr_posts->the_post();
                            get_template_part( 'template-parts/content', 'loop' );

                        endwhile;
                    endif;
                    /* Restore original Post Data */
                    wp_reset_postdata();
                    ?>
            <div class="col-12 my-5 text-center">
                <a class="btn-outline">Ver más</a>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();