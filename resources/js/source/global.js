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

});