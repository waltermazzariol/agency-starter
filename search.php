<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wp_guarapo
 */

get_header();
?>

	<main id="primary" class="site-main">
	<header class="container mt-5">
		<div class="d-flex justify-content-center">
		<h1><?php
				printf( esc_html__( 'Resultados para: %s', 'wp_guarapo' ), '' . get_search_query() . '' );
				 ?></h1>
		</div>
	</header>
		<?php if ( have_posts() ) : ?>
			<div class="container py-5">
		<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'loop' );

			endwhile;

			the_posts_pagination(array(

				'prev_text' => '<span>Anterior</span>',
				'next_text' => '<span>Siguiente</span>'
			  
			  ));
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
