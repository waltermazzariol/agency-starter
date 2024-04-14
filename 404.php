<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp_guarapo
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="container error-404 not-found">
			<header class="page-header text-center mt-5">
				<h1 class="main-title mb-3"><?php esc_html_e( '404', 'wp_guarapo' ); ?></h1>
				<h2 class="mb-5"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp_guarapo' ); ?></h2>

			</header><!-- .page-header -->

			<div class="page-content text-center  mb-5">
				<p class=" mb-4"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp_guarapo' ); ?></p>

					<?php
					get_search_form();

					?>
			</div><!-- .page-content -->
			<div class="d-flex justify-content-center mb-5"><a href="/" class="button">Go Home </a></div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();