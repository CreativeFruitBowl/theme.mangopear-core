<?php

	/**
	 * Core template: Index
	 *
	 * This template serves as the default for all views. Can easily be overwritten 
	 * by other templates. Typically this will be used for either the front page or 
	 * as the list of posts.
	 *
	 * @category 	Templates
	 * @package  	mangui
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	4.0.0
	 * @since   	1.0.0
	 */


	get_header();

?>


	<main class="o-main" id="main">
		<div class="o-container">
			<div class="o-container  o-container--align-left  o-container--optimise-readability">
				<?php
			
					if (have_posts()) : 
						while (have_posts()) : the_post();
							the_content();

						endwhile;

					else :
						echo '<h2>Sorry!</h2>';
						echo '<p style-"text-align: center;">Looks like there\'s no content to be found here.</p>';

					endif;

				?>
			</div><!-- /.o-container -->
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->


<?php get_footer(); ?>