<?php

/**
 * [MangUI]	Theme functions
 *
 * @package     mangopear-core
 * @category    setup
 * @since       1.0.0
 * @version     1.0.0
 * @author      Andi North <andi@mangopear.co.uk>
 * @link        https://mangopear.co.uk/
 * @license     GNU General Public License <http://opensource.org/licenses/gpl-license.php>
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
 * [1]  Include MangUI class
 * [2]	Add SVG sprites
 * [3]	Define various theme variables
 */


/**
 * [1]	Include MangUI class
 *
 * 		Set up the MangUI helper class and functions.
 *
 * 		@since 1.0.0
 */

require_once get_template_directory() . '/includes/class.mangui.php';





/**
 * [2]	Add SVG sprites
 *
 * 		Set definitions for sprite URLs.
 *
 * 		@since 1.0.0
 */

define(MANGOPEAR_SPRITE, get_site_url() . '/sprites/mangopear-core.svg');





/**
 * [3]	Define various theme variables
 *
 * 		These can be overwritten by child themes to allow for customisations.
 *
 * 		@since 1.0.0
 */

define(BROWSER_TAB_COLOUR, '#499E00');





/**
 * [4]	Image sizes
 *
 * 		Custom image sizes for the WordPress theme
 *
 * 		@since 1.0.0
 */

function mangopear_add_image_sizes() {
	add_image_size('title--s',   500, 325, true);		// [a]
	add_image_size('title--m',  1000, 250, true);		// [a]
	add_image_size('title--l',  1500, 375, true);		// [a]
	add_image_size('title--xl', 2000, 500, true);		// [a]
}


add_action('after_setup_theme', 'mangopear_add_image_sizes');