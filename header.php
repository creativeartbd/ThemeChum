<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeChum
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
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'themechum'); ?></a>
		
			<nav class="navbar navbar-expand-lg sticky-top">		
			<div class="container">
			<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.05 26.72"><defs><style>.cls-1{font-size:21.9px;font-family:ShinePersonalUse, Shine Personal Use;}.cls-2{fill:#36f;}</style></defs><text class="cls-1" transform="translate(0.17 18.62) scale(0.93 1)">theme<tspan class="cls-2" x="64.66" y="0">chum</tspan></text></svg>
				<?php				
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="navbar-brand"><a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				<?php			
				endif;
				?>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'navbar-nav ml-auto mt-2 mt-lg-0'
						)
					);
					?>	
				</div>
				</div>
			</nav>
		
	