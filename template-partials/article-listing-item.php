<?php

	/**
	 * [Partial] Logo
	 *
	 * @category 	Core WordPress template files
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	
?>

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