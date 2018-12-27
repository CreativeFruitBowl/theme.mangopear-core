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
		<header class="c-title">
			<div class="o-container">
				<h1 class="c-title__title"><?php the_title(); ?></h1>
			</div><!-- /.o-container -->


			<?php if (get_the_post_thumbnail_url(get_the_ID())) : ?>
				<img class="c-title__image" alt="<?php the_title(); ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" 
				     data-srcset="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'title--s'); ?> 500w, <?php echo get_the_post_thumbnail_url(get_the_ID(), 'title--m'); ?> 1000w, <?php echo get_the_post_thumbnail_url(get_the_ID(), 'title--l'); ?> 1500w, <?php echo get_the_post_thumbnail_url(get_the_ID(), 'title--xl'); ?>">
			<?php endif; ?>
		</header>


		<div class="o-container">
			<div class="o-container  o-container--optimise-readability">
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