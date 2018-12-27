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
					<span class="h6  c-title__sub-title">Category</span><span class="u-hide"> - </span>
					<strong><?php single_cat_title(); ?></strong>
				</h1>
			</div><!-- /.o-container -->
		</header>





		<?php if (have_posts()) : ?>
			<div class="o-container">
				<div class="o-grid  o-grid--wide">
					<?php while (have_posts()) : the_post(); ?>
						<div class="o-grid__item  u-one-half  u-palm--one-whole">
							<article class="c-article">
								<header class="c-article__header">
									<img class="c-article__image" alt="<?php the_title(); ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-lister'); ?>">


									<h2 class="h3  c-article__title">
										<a href="<?php the_permalink(); ?>" class="c-article__title__link">
											<?php the_title(); ?>
										</a>
									</h2>
								</header>


								<div class="c-article__content">
									<?php the_excerpt(); ?>


									<a href="<?php the_permalink(); ?>" class="o-button  o-button--secondary  c-article__link">
										<span class="o-button__text">Continue reading</span>
										<svg class="o-button__icon  o-button__icon--right" height="22" width="22" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#arrow--right"/></svg>
									</a>
								</div>
							</article>
						</div><!-- /.o-grid__item -->
					<?php endwhile; ?>
				</div><!-- /.o-grid -->


				<?php get_template_part('template-partials/pagination'); ?>
			</div><!-- /.o-container -->
		<?php endif; ?>
	</main><!-- /.o-panel -->


<?php get_footer(); ?>