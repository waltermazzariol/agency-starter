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
$hero = get_field('section-0');
if ($hero) :
?>

<section class="container-fluid hero" style="background-image: url('<?php echo esc_url($hero['image']['url']); ?>'); background-repeat: no-repeat; background-size: cover;">
<div class="row hero-wrapper no-gutter">
    <div class="col-12">
        <h1 class="hero-title fade-in"><?php print_r($hero['title']); ?></h1>
    </div>
</div>
</section>
<?php
endif;
?>