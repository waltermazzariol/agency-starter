<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_guarapo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wp_guarapo'); ?></a>
		<header class="site-header">
			<div class="bg-secondary d-none d-sm-block"><div class="pre-navbar container"><?php dynamic_sidebar('pre-navbar'); ?></div></div>
			<nav class="navbar navbar-expand-md navbar-light" id="mainNav">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
     					 <span class="navbar-toggler-icon"></span>
    				</button>
					<a class="navbar-brand" href="<?php bloginfo('url') ?>">
						<?php
						if (has_custom_logo()) {
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?> <img alt="<?php bloginfo('name') ?>" src="<?php echo $image[0] ?>"/> 
						<?php
						} else {
							bloginfo('name');
						}
						?>
					</a>
					<?php
					wp_nav_menu(array(
						'theme_location'    => 'menu-1',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse justify-content-end',
						'container_id'      => 'navbarScroll',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					));
					?>
				</div>
			</nav>
		</header><!-- #masthead -->