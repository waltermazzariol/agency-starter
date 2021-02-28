<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header entry-header-video">
		<?php the_title( '<h1 class="entry-title  wow slideInDown">', '</h1>' ); ?>
		<?php $channel = get_field('youtube_channel'); if ($channel) : ?>	
		<a class="btn-basic wow slideInDown" href="<?php print_r($channel) ?>" target="_blank" rel="noreferrer noopener" >More Videos</a> 
		<?php endif ?>
	</header><!-- .entry-header -->
	<hr>

	<div class="entry-content ">
	<section class="container">
		<div class="row">
		<?php
		$pattern =  "/^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/";
		$video_items =  get_field('videos');
		if ($video_items) :
			foreach ($video_items as $key => $value) :
		?>
			<div class="col-sm-12 col-md-6  wow zoomIn">
				<p><?php preg_match($pattern, $value['video_url'], $string) ?></p>
				<div class="box-image">
					<a class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/<?php print_r($string[2]) ?>" data-target="#myModal">
						<img class="fluido wow" src="<?php echo $value['image']; ?>" />
						<div class="overlay">
							<img class="play-icon" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/play.svg" />
						</div>
					</a>
				</div>
				<h3 class=" mt-3 mb-5 title"><?php echo $value['title']; ?></h3>
			</div>

		<?php
			endforeach;
		endif;
		?>
		</div>
	</section>

		
		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp_guarapo' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	
	<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
		</div>
      </div>
    </div>
  </div>
</div> 
  

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
