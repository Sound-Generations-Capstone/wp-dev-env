<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sound_Generations
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="https://kit.fontawesome.com/c0ca3cd1fd.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//fast.fonts.net/jsapi/865b2060-ff41-48c1-b0fc-646d9af040b1.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'sg20'); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site">
			<div class="site-branding">
				<?php
				$logo = '';
				switch (get_current_blog_id()) {
					case 1:
						$logo = get_template_directory_uri() . '/img/logo-sound-generations-rev2019_150x113.png';
						$logolink = 'https://www.SoundGenerations.org';
						break;
					case 4:	
						$logo = get_template_directory_uri() . '/img/logo-lake-city-seniors.png';
						$logolink = esc_url(home_url('/'));
						break;
					case 6:
						$logo = get_template_directory_uri() . '/img/logo-sound-generations-rev2019_150x113.png';
						$logolink = 'https://www.SoundGenerations.org';
						break;
					case 7:
						$logo = get_template_directory_uri() . '/img/logo-ballard-snr-ctr.png';
						$logolink = 'https://www.SoundGenerations.org';
						break;

					default:
						$logo = get_template_directory_uri() . '/img/logo-sound-generations-rev2019_150x113.png';
						$logolink = 'https://www.SoundGenerations.org';
						break;
				}
				?>
				<a class="site-title" href="<?php echo $logolink; ?>"><?php

																															echo '<img src="' . $logo . '" alt="Sound Generations logo">'; ?></a>

			</div><!-- .site-branding -->
			<div class="utility">
				<?php wp_nav_menu(array('theme_location' => 'utility')) ?>
				<?php get_search_form(); ?>
				<!-- <div id='resize-links'>
				<ul >

					<li><a href='#'  data-size='62.5%' class='resizer' >A-</a></li>
					<li><a href='#'  data-size='70%' class='resizer' >A</a></li>
					<li><a href='#'  data-size='82%' class='resizer' >A+</a></li>
				</ul>
				</div>-->
				<?php dynamic_sidebar('sidebar-3'); ?>

			</div><!-- .utility -->

		</div><!-- .site -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="page" class="site">

		<div id="content" class="site-content">
			<?php if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			} ?>