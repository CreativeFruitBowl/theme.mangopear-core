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
 */

jQuery(function($) {

	/**
	 * [1]	[Global] Header: Open and close navigation drawer
	 *
	 * 		@since 1.0.0
	 *
	 * 		[a]	
	 */

	var mainNav    = $('.js-head-navigation__menu__wrap');
	var searchForm = $('.js-head-navigation__search__wrap');
	var accountNav = $('.js-head-navigation__account__wrap');


	$('.js-head-navigation__menu__launcher').on('click', function(){
		$(searchForm).addClass('is-hidden');
		$(accountNav).addClass('is-hidden');

		if ($(mainNav).hasClass('is-hidden')) { $(mainNav).removeClass('is-hidden'); }
		else                                { $(mainNav).addClass('is-hidden');    }
	});


	$('.js-head-navigation__search__launcher').on('click', function(){
		$(mainNav).addClass('is-hidden');
		$(accountNav).addClass('is-hidden');

		if ($(searchForm).hasClass('is-hidden')) { $(searchForm).removeClass('is-hidden'); }
		else                                { $(searchForm).addClass('is-hidden');    }
	});


	$('.js-head-navigation__account__launcher').on('click', function(){
		$(mainNav).addClass('is-hidden');
		$(searchForm).addClass('is-hidden');

		if ($(accountNav).hasClass('is-hidden')) { $(accountNav).removeClass('is-hidden'); }
		else                                     { $(accountNav).addClass('is-hidden');    }
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





	/**
	 * [4]	[Global] Smoothly scroll to anchors
	 *
	 * 		@since 1.0.0
	 */
	
	$('a[href*="#"]:not([href="#"]), .js-smooth-scroll').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			

			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});

});