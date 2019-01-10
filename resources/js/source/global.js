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
 * [3]	[Global] Forms: Floating label form fields
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
	 * [Global] Forms: Floating label form fields
	 *
	 * 		@since 1.0.0
	 */
	
	$('.js-o-field__input').on('focusin', function(){
		$(this).parent().addClass('is-docked');
	});


	$('.js-o-field__input input, .js-o-field__input textarea, .js-o-field__input select').on('blur', function(){
		if (! $(this).val().length > 0) {
			$(this).parent().parent().removeClass('is-docked');
		}
	});

});