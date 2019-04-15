/**
 * [Scripts] Global
 *
 * @category	WooCommerce custom scripts
 * @package		mangopear-core
 * @author		Andi North <andi@mangopear.co.uk>
 * @copyright  	2018 Mangopear creative
 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @since   	1.0.0
 * @version   	1.0.0
 */


/**
 * CHANGELOG
 *
 * @version 1.0.0
 *          Init
 */


/**
 * CONTENTS
 *
 * [1]	[Global] Header: Open and close navigation drawer
 * [2]	[Global] Blog: Expose the comment form
 * [3]	[Global] Enforce LazyLoadXT to check responsive images on page resize
 */

jQuery(function($) {

	/**
	 * [1]	[Global] Header: Open and close navigation drawer
	 *
	 * 		@since 1.0.0
	 *
	 * 		[a]	
	 */

	$('.js-head-navigation__menu__launcher').on('click', function(){
		var navEl = $('.js-head-navigation__menu__wrap');


		if ($(navEl).hasClass('is-hidden')) {
			$(navEl).removeClass('is-hidden');
		} else {
			$(navEl).addClass('is-hidden');
		}
	});





	/**
	 * [2]	[Global] Blog: Expose the comment form
	 *
	 * 		@since  1.0.0
	 */
	
	$('.js-comments__action--reveal-form').on('click', function(){
		var commentsForm = $('.js-comments__reveal-form');


		if (commentsForm.hasClass('is-hidden')) {
			$(commentsForm).removeClass('is-hidden');
		} else {
			$(commentsForm).addClass('is-hidden');
		}
	});





	/**
	 * [3]	[Global] Enforce LazyLoadXT to check responsive images on page resize
	 *
	 * 		@since 1.0.0
	 */
	
	var resizeTimeout;

	$(window).resize(function(){
		resizeTimeout = setTimeout(function(){
			$(window).lazyLoadXT({
				checkDuplicates: false
			});

			clearTimeout(resizeTimeout);
		}, 250);
	});

});