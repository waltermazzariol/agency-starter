<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

?>

<article class="col-md-4 mb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card-loop">
		<div class="box-loop">
			<?php if(get_the_post_thumbnail_url()){ ?>
			
				<img class="box-loop-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
		
			<?php }else{ ?>
		
				<img class="box-loop-image"
					src="<?php echo get_template_directory_uri() . '/dist/assets/image/preview.jpg'; ?>" alt="" />

			<?php } ?>
		</div>
		<header class="entry-header">
			<?php
			the_title( '<h3 class="entry-title"><a class="text-primary" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		 ?>
		</header><!-- .entry-header -->
		<?php	if ( 'post' === get_post_type() ) :
			?>
		<div class="entry-meta mb-3 small">
			<?php
				wp_guarapo_posted_on();
				wp_guarapo_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<div class="entry-content">
			<?php
			the_excerpt()
			?>
		</div><!-- .entry-content -->
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->