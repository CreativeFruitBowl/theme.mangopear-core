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
 * [4]	[Global] Smoothly scroll to anchors
 * [5]	[Global] Add SVG polyfill
 */

jQuery(function($) {

	/**
	 * [1]	[Global] Header: Open and close navigation drawer
	 *
	 * 		@since 1.0.0
	 *
	 * 		[a]	When a user clicks the button to reveal the navigation
	 * 		[b]	Prevent it from closing immediately due to [d]
	 * 		[c]	Open the main nav container
	 *
	 * 		[d]	When you click outside of the navigation
	 * 		[e]	Fetch main navigation el for ease of use later
	 * 		[f]	...and not on a child el of the main nav
	 * 		[g]	If the navigation is open
	 * 		[h]	Close it.	
	 */
	
	var mainNavEl    = $('.js-head-navigation__menu__wrap');
	var accountNavEl = $('.js-head-navigation__account__wrap');
	var searchFormEL = $('.js-head-navigation__search__wrap');


	$('.js-head-navigation__menu__launcher').on('click', function(event){								// [a]
		event.stopPropagation();																		// [b]
		$(accountNavEl, searchFormEL).addClass('is-hidden');
		$(mainNavEl).toggleClass('is-hidden');															// [c]
	});																									// [a]


	$('.js-head-navigation__account__launcher').on('click', function(event){							// [a]
		event.stopPropagation();																		// [b]
		$(mainNavEl, searchFormEL).addClass('is-hidden');
		$(accountNavEl).toggleClass('is-hidden');														// [c]
	});																									// [a]


	$('.js-head-navigation__search__launcher').on('click', function(event){								// [a]
		event.stopPropagation();																		// [b]
		$(mainNavEl, accountNavEl).addClass('is-hidden');
		$(searchFormEL).toggleClass('is-hidden');														// [c]
	});																									// [a]


	$('html').on('click', function(event){																// [d]
		if (! $(mainNavEl).has(event.target).length) {													// [f]
			if (! $(mainNavEl).hasClass('is-hidden'))    { $(mainNavEl).addClass('is-hidden');    }		// [g]
		}																								// [f]

		if (! $(accountNavEl).has(event.target).length) {												// [f]
			if (! $(accountNavEl).hasClass('is-hidden')) { $(accountNavEl).addClass('is-hidden'); }		// [g]
		}																								// [f]
	});																									// [d]





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





	/**
	 * [5]	[Global] Add SVG polyfill
	 *
	 * 		@since 1.0.0
	 */
	
	svg4everybody();

});
/**
 * [Component] Accordion
 *
 * Provides the JavaScript code to power the accordion component.
 *
 * @package     scenic-buses
 * @category    scripts
 * @version     4.0.0
 * @since       4.0.0
 * @author      Andi North <andi@mangopear.co.uk>
 * @link        https://mangopear.co.uk/
 * @license     GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 */


/**
 * CHANGELOG
 *
 * @version 4.0.0
 *          Init file
 */


/**
 * CONTENTS
 *
 * [1]  Accordion
 */


/**
 * [1]  Accordion
 *
 *      @since 4.0.0
 */


jQuery(document).ready(function($){

	/**
	 * [1] Accordion
	 *
	 * 		[a]	On page load, find all accordions
	 * 		[b]	Find the action button for current accordion
	 * 		[c]	Set aria-expanded attr to false to close panel and trigger CSS styles
	 *
	 * 		[d]	When accordion action clicked
	 * 		[e]	Fetch current (open|close) state of accordion, save variable 
	 * 			with value that is the opposite of current state
	 * 		[f]	Change state of accordion to opposite state
	 */

	$('.js-accordion').each(function(){																// [a]
		var thisAction  = $(this).find('.js-accordion__action');									// [b]
		$(thisAction).removeAttr('hidden').attr('aria-expanded', 'false');							// [c]
	});																								// [a]


	$('.js-accordion__action').unbind().on('click', function(e){									// [d]
		var currentState = ($(this).attr('aria-expanded') === 'true') ? 'false' : 'true';			// [e]
		$(this).attr('aria-expanded', currentState);												// [f]
	});																								// [d]
});