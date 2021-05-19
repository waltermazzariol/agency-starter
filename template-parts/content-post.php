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
	<header class="container-fluid cover--small mb-5">
		<div class="container-fluid cover-wrapper">
			<span class="container item">
				<h1 class="cover-title animated fadeIn text-center"><?php the_title(); ?></h1>
			</span>
		</div>
	</header>
	
	<div class="container entry-content">
		<div class="row">
			<div class="col-md-8">
		<?php
		the_content(); ?>
</div>
<div class="col-md-4">
	<?php get_sidebar(); ?>
</div>	
<?php
		the_posts_pagination();
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
