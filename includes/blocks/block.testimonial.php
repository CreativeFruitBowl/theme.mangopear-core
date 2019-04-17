<?php

	/**
	 * [Block] Useful resource
	 *
	 * This file is used to setup the ACF integration
	 *
	 * @category 	Core WordPress template files
	 * @package  	the-savings-king
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2019 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @since   	1.0.0
	 */
	

	/**
	 * CONTENTS
	 *
	 * [1]	Register action for ACF initialisation
	 * [2]	Register block with ACF
	 */
	

	/**
	 * [1]	Register action for ACF initialisation
	 *
	 * 		@since 1.0.0
	 */	

	add_action('acf/init', 'mangopear_register_block__testimonial');





	/**
	 * [2]	Register block with ACF
	 *
	 * 		@since 1.0.0
	 */

	function mangopear_register_block__testimonial() {
		if (function_exists('acf_register_block')) :
			acf_register_block(array(
				'name'				=> 'mangui-testimonial',
				'title'				=> __('Testimonial (MangUI)'),
				'description'		=> __('Show a testimonial in the Mangopear core style'),
				'render_template'	=> get_stylesheet_directory() . '/template-partials/blocks/block.testimonial.php',
				'category'			=> 'formatting',
				'icon'				=> 'format-quote',
				'keywords'			=> array('testimonial', 'quote', 'pullquote'),
				'supports'			=> array(
											'align'		=> array('left', 'center', 'right', 'wide', 'full'),
											'anchor'	=> true,
									   ),
			));
		endif;
	}
	
?>