<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($class = 'mb-3'); ?>>
	<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
	if($featured_img_url): ?>
	<header class="entry-header container-fluid hero">
		<?php
    echo '<section class="hero-img" style="background-image: url('.esc_url($featured_img_url).');"></section>'; ?>
		<?php if(!is_front_page()):
	the_title( '<h1 class="entry-title animated fadeIn ">', '</h1>' ); 
	endif ?>
	</header><!-- .entry-header -->
	<?php endif ?>

	<div class="entry-content animated fadeIn ">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp_guarapo' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'wp_guarapo' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->