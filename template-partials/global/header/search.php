<?php

	/**
	 * [Partial] Search form
	 *
	 * @category 	Core WordPress template files
	 * @package  	mangopear-core
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2020 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.3.0
	 * @since   	1.3.0
	 */
	
?>

	<div class="c-head__search">
		<button class="o-button  o-button--secondary  c-mega-nav__button  js-head-navigation__search__launcher" type="button">
			<svg class="o-button__icon  o-button__icon--left" height="22" width="22" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#search"/></svg>
			<span class="o-button__text">Search</span>
		</button>


		<div class="c-head__search__reveal  js-head-navigation__search__wrap  is-hidden">
			<div class="o-container">
				<form class="o-form  o-form--search" role="search" action="<?php bloginfo('url'); ?>">
					<input type="hidden" value="Search">

					<div class="o-form__field">
						<label class="o-form__label" for="header-search">Search website</label>
						<input class="o-form__input" type="search" name="s" id="header-search" value="" placeholder="Search this website">
					</div><!-- /.c-form__field -->


					<div class="o-form__action">
						<button class="o-button  o-button--primary  o-form__button">
							<svg class="o-button__icon  o-button__icon--left" height="32" width="32" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#search"/></svg>
							<span class="o-button__text  u-portable--hide">Search</span>
						</button>


						<button class="o-button  o-button--primary  o-form__close  js-head-navigation__search__launcher" type="button">
							<svg class="o-button__icon  o-button__icon--left" height="32" width="32" role="presentation"><use xlink:href="<?php echo MANGOPEAR_SPRITE; ?>#close"/></svg>
							<span class="o-button__text  u-hide">Close search form</span>
						</button>
					</div>
				</form>
			</div><!-- /.o-container -->
		</div><!-- /.c-head__search__reveal -->
	</div><!-- /.c-head__search -->