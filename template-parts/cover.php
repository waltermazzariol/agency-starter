<?php

/**
 * The template for displaying a cover
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */
?>

<?php
$cover = get_field('cover');
if ($cover) :
?>
    <section class="container-fluid cover" style="background-image: url('<?php echo esc_url($cover['image']); ?>'); background-repeat: no-repeat; background-size: cover;background-position: top;">
        <div class="container-fluid cover-wrapper">
            <span class="container item">
                <h1 class="cover-title"><?php print_r($cover['title']); ?></h1>
                <h4 class="cover-subtitle"><?php print_r($cover['subtitle']); ?></h4>
            </span>
        </div>
    </section>
<?php
endif;
?>