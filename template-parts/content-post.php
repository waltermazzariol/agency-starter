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

	<header class="text-center">
		<img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/cover.jpg" />
		<?php if(get_the_post_thumbnail_url()){ ?>
		<div class="square-image">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
		</div>
		<?php }else{ ?>
		<div class="square-image">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/preview.jpeg" alt="" />
		</div>
		<?php } ?>
		<?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<span class="post-meta">'.esc_html( $categories[0]->name ).'</span>';
        }?>
		<div class="container">
			<h1 class="post-title animated fadeIn"><?php the_title(); ?></h1>
		</div>
		</div>
	</header>
	<div class="container entry-content mb-4">
		<div class="row justify-content-between">
			<div class="col-md-12 mb-5">
				<?php
				the_content(); ?>
			</div>
			<?php if( get_previous_post() ) : ?>
			<div class="col-md-4 d-flex post-next ">
				<div class="d-flex align-content-center mr-3">
					<img class="rotate" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/play.svg" />
				</div>
				<div>
					<h3><span class="underline">Siguiente</span></h3>
					<div class="post-next-title"><?php previous_post_link('%link'); ?></div>
				</div>
			</div>
			<?php endif; if( get_next_post() ) :?>
			<div class="col-md-4 d-flex post-next ">
				<div>
					<h3><span class="underline">Anterior</span></h3>
					<div class="post-next-title"><?php next_post_link('%link'); ?></div>
				</div>
				<div class="d-flex align-content-center ml-3">
					<img class="title-icon"
						src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/play.svg" /></div>
			</div>
			<?php endif; ?>
		</div><!-- .entry-content -->

	</div>
	<section class="container py-5">
		<hr />
		<div class="row no-gutters">
			<div class="col-12 text-center my-5">
				<h2><span class="underline"><strong>Entradas Relacionadas</strong></span></h2>
			</div>
			<?php $args = array(
					'category__in' => wp_get_post_categories( $post->ID ), 
                    'posts_per_page' => 3,
					'post__not_in' => array( $post->ID )
                    );
                    
                    $arr_posts = new WP_Query( $args );
                    if ( $arr_posts->have_posts() ) :
 
                        while ( $arr_posts->have_posts() ) :
                            $arr_posts->the_post();
                            get_template_part( 'template-parts/content', 'loop' );

                        endwhile;
                    endif;
					wp_reset_postdata();
                    ?>
		</div>
	</section>
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