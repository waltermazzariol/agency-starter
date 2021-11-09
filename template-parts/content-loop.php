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
		<div class="entry-meta mb-2 small">
			<?php
				wp_guarapo_posted_on();
				wp_guarapo_posted_by();
			?>
		</div><!-- .entry-meta -->
		<header class="entry-header">
			<?php
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		 ?>
		</header><!-- .entry-header -->
		<?php	if ( 'post' === get_post_type() ) :
			?>
		
		<?php endif; ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->