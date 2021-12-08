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
	<header class="container-fluid my-5">
		<div class="container cover text-center">
				<h1 class="cover-title"><?php the_title(); ?></h1>
				<?php	if ( 'post' === get_post_type() ) :
			?>
		<div class="entry-meta mb-3 small">
			<?php
				wp_guarapo_posted_on();
				wp_guarapo_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		
		</div>
	</header>
	
	<div class="container entry-content ">
		<div class="row justify-content-md-center">
			<div class="col-md-8">
			<?php my_share_buttons(); ?>
		<?php the_content(); ?>
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
