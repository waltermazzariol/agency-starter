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
	<header class="entry-header">
		<?php
		if ( is_singular() ) : ?>
			<header class="container-fluid cover--small mb-5">
				<div class="container-fluid cover-wrapper">
					<span class="container item">
						<h1 class="cover-title animated fadeIn"><?php the_archive_title(); ?></h1>
					</span>
				</div>
			</header>
		<?php else : 
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				wp_guarapo_posted_on();
				wp_guarapo_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php wp_guarapo_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_excerpt()
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
