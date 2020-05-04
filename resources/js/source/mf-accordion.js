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