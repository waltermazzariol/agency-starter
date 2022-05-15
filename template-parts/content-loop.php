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
		
		<?php $feature_img = ((get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() :  catch_that_image())
		?>
		<div class="box-loop">
			<img class="box-loop-image" src="<?php echo $feature_img; ?>" alt="" />
		</div>
		<header class="entry-header">
			<?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		 ?>
		 <div class="entry-meta mb-2 small">
			<?php
				wp_guarapo_posted_by();
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