<?php

	/**
	 * Template partial: Post pagination
	 *
	 * @category 	Templates
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2018 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	4.0.0
	 * @link 		https://mangopear.co.uk/
	 * @since   	2.0.0
	 */


	/**
	 * Let's get paginated
	 *
	 * [1]	Load up the global query var
	 * [2]	Create a ridiculously large number as a max for the  max number of posts
	 * [3]	Show the pagination
	 * [4]	Reset wp_query so that queries below work as expected
	 */


	/**
	 * [1]	Load up the global query var
	 */

	global $wp_query;


	/**
	 * [2]	Create a ridiculously large number as a max for the  max number of posts
	 */

	$big = 999999999;


	/**
	 * [3]	Show the pagination
	 */
	
	the_posts_pagination(
		array(
			'mid_size'		=> 3,
			'prev_text'		=> '&laquo; &nbsp;Newer',
			'next_text'		=> 'Older&nbsp; &raquo;',
		)
	);


	/**
	 * [4]	Reset wp_query so that queries below work as expected
	 */

	wp_reset_query();


?>