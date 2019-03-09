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
				<h1 class="c-title__title">
					<strong>Search results for "<?php echo $_GET['s']; ?>"</strong>
				</h1>
			</div><!-- /.o-container -->


			<section class="c-title__search">
				<div class="o-container  o-container--optimise-readability">
					<form class="o-form  o-form--search" role="search" action="<?php bloginfo('url'); ?>">
						<input type="hidden" value="Search">

						<div class="o-form__field">
							<label class="o-form__label" for="s">Search website</label>
							<input class="o-form__input" type="text" name="s" id="s" value="<?php echo $_GET['s']; ?>">
						</div><!-- /.c-form__field -->


						<div class="o-form__action">
							<button class="o-button  o-button--primary  o-form__button">
								<svg class="o-button__icon  o-button__icon--left" height="32" width="32" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#search"/></svg>
								<span class="o-button__text  u-palm--hide">Search</span>
							</button>
						</div>
					</form>
				</div><!-- /.o-container -->
			</section><!-- /.c-title__search -->
		</header>





		<?php if (have_posts()) : ?>
			<div class="o-container">
				<div class="o-grid  o-grid--wide">
					<?php while (have_posts()) : the_post(); ?>
						<div class="o-grid__item  u-one-half  u-palm--one-whole">
							<?php get_template_part('template-partials/article-listing-item'); ?>
						</div><!-- /.o-grid__item -->
					<?php endwhile; ?>
				</div><!-- /.o-grid -->


				<?php get_template_part('template-partials/pagination'); ?>
			</div><!-- /.o-container -->


		<?php else : ?>
			<div class="o-container  o-container--optimise-readability">
				<p style="text-align: center;">No results found, sorry.</p>
			</div><!-- /.o-container -->


		<?php endif; ?>
	</main><!-- /.o-panel -->


<?php get_footer(); ?>