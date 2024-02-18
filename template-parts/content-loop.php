<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

?>

<article class="col-md-4 mb-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card-loop">
		
		<?php $feature_img = ((get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() :  catch_that_image())
		?>
		<div class="box-loop">
			<a href="<?php echo get_permalink() ?>"><img class="box-loop-image" src="<?php echo $feature_img; ?>" alt="" /></a>
		</div>
		<header class="entry-header">
			<?php
			the_title( '<div class="text-size-medium"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
		 ?>
		 <div class="entry-meta mb-2 small">
			<?php
				wp_guarapo_posted_on();
				echo '<span class="reading-time">' . reading_time() . '</span>';
			?>
		</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		
		<?php	if ( 'post' === get_post_type() ) :
			?>
		
		<?php endif; ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->