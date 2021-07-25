<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

?>

<article class="col-md-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div data-aos="zoom-in" class="podcast-card">
        <div class="podcast-card-wrapper position-relative">
            <?php if(get_the_post_thumbnail_url()){ ?>
            <img class="podcast-card-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
            <a href="<?php echo get_permalink()  ?>"><img class="podcast-card-play"
                src="<?php echo get_template_directory_uri() . '/dist/assets/images/play.svg'; ?>" alt="" /></a>
            <?php }else{ ?>
            <img class="podcast-card-image"
                src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/preview.jpeg" alt="" />
                <a href="<?php echo get_permalink()  ?>"><img class="podcast-card-play"
                src="<?php echo get_template_directory_uri() . '/dist/assets/images/play.svg'; ?>" alt="" /></a>
            <?php } ?>
        </div>
        <div class="entry-meta small">
            <img class="podcast-card-headphone"
                src="<?php echo get_template_directory_uri() . '/dist/assets/images/headphone.svg'; ?>" alt="" />
            <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<span class="podcast-card-cat">'.esc_html( $categories[0]->name ).'</span>';
        }?>
        </div>
        <header class="entry-header">
            <?php
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		 ?>
        </header><!-- .entry-header -->
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->