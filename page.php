<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

get_header();
?>

	<main id="primary" class="site-main container-fluid px-0">
	<header class="entry-header text-center mb-4">
		<?php wp_guarapo_post_thumbnail(); ?>
		<?php the_title( '<h1  data-aos="fade-up" class="entry-title my-5"><span class="underline">', '</span></h1>' ); ?>
	</header><!-- .entry-header -->
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
