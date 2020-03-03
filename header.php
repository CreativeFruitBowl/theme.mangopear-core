<?php

	/**
	 * [Core template name]	Header (Partial)
	 *
	 * This is the core header file that is included in all of the WordPress 
	 * templates used throughout the theme. This file contains the HTML that
	 * makes up the top of every website page.php.
	 *
	 * You should note the `wp_header();` hook that plugins and WordPress core
	 * may use to add additional HTML and stylesheets and/or JavaScript 
	 * files to the website.
	 *
	 * Please note: You should enqueue stylesheets and JavaScript documents
	 * - DO NOT simply insert them at the bottom of this document.
	 *
	 * @category 	Core WordPress template files
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	/**
	 * Please note: The <!DOCTYPE HTML> element CAN NOT have any characters before it
	 * 				otherwise there will be styling issues with the rendered website.
	 */
	
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		

		<!-- Make this site responsive, dude -->
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Favicon -->
		<?php echo get_template_part('template-partials/favicons'); ?>


		<script src="//rum-static.pingdom.net/pa-5e5cf6df229e930008000592.js" async></script>


		<?php wp_head(); ?>
	</head>





	<body <?php body_class(); ?>>
		<a href="#main" class="c-skip-link">Skip to content</a>


		<header class="c-head-navigation">
			<div class="o-container">
				<div class="o-grid  o-grid--middle">
					<div class="o-grid__item  u-one-half  u-portable--one-third  u-palm--one-quarter">
						<?php get_template_part('template-partials/logo'); ?>
					</div><!-- /.o-grid__item -->


					<div class="o-grid__item  u-one-half  u-portable--two-thirds  u-palm--three-quarters">
						<div class="c-head__buttons">
							<?php get_template_part('template-partials/global/header/search'); ?>
							<?php get_template_part('template-partials/global/header/main-menu'); ?>
						</div><!-- /.c-head__buttons -->
					</div><!-- /.o-grid__item -->
				</div><!-- /.o-grid -->
			</div><!-- /.o-container -->
		</header>





		<?php get_template_part('template-partials/additional-header-rows'); ?>