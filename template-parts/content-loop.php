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
	<div data-aos="zoom-in" class="card-loop">
		<div class="card-loop-wrapper">
			<?php if(get_the_post_thumbnail_url()){ ?>
			<img class="card-loop-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
			<?php }else{ ?>
				<img class="card-loop-image"
                src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/preview.jpeg" alt="" />
			<?php } ?>
		</div>
		<!-- <div class="entry-meta small">
		<?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
			if( $categories[0]->name  == "Podcast"){
				echo '<span class="post-meta">Podcast</span>';
			}
			else{
				echo '<span class="post-meta">Blog</span>';

			}        }
			wp_guarapo_posted_on();
			wp_guarapo_posted_by();
		?>
		</div> -->
		<?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
			if( $categories[0]->name  == "Podcast"){
				echo '<span class="card-loop-cat">Podcast</span>';
			}
			else{
				echo '<span class="card-loop-cat">Blog</span>';

			}  
            // echo '<div class="card-loop-cat">'.esc_html( $categories[0]->name ).'</div>';
        }?>
		<header class="entry-header">
			<?php
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		 ?>
		</header><!-- .entry-header -->
		
		<a class="card-loop-button" href="<?php echo get_permalink() ?>">Leer Más</a>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->