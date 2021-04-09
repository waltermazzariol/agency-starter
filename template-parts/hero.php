<?php

/**
 * The template for displaying a hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */
?>

<?php
$hero = get_field('hero');
if ($hero) :
?>

    <section class="container-fluid hero" style="background-image: url('<?php echo esc_url($hero['image']['url']); ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="container hero-wrapper">
            <span class="item">
                <div class="hero-pretitle animated fadeIn">Bienvenida</div>
                <h1 class="hero-title animated fadeIn delay-1s"><?php print_r($hero['title']); ?></h1>
                <h4 class="hero-subtitle animated fadeIn delay-2s"><?php print_r($hero['subtitle']); ?></h4>
            </span>
        </div>
    </section>
<?php
endif;
?>