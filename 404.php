<?php

	/**
	 * Core template: Error 404 template
	 *
	 * @category 	Templates
	 * @package  	mangui
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2019 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	4.0.0
	 * @since   	4.0.0
	 */


	get_header();

?>


	<main class="o-main" id="main">
		<header class="c-title">
			<div class="o-container">
				<h1 class="c-title__title">Error 404 - Page not found.</h1>
			</div><!-- /.o-container -->
		</header>


		<div class="o-container">
			<div class="o-container  o-container--optimise-readability">
				<h2>It looks as though there's an issue here.</h2>
				<p>To be precise, it's an error with the status code 404. <strong>That means the page you tried visiting does not exist.</strong></p>
				<p>We'd suggest checking the URL you tried visiting to make sure it looks correct and is spelt correctly.</p>
			</div><!-- /.o-container -->
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->


<?php get_footer(); ?>